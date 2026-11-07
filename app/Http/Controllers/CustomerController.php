<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RuntimeException;
use JsonException;

class CustomerController extends Controller
{
    // JSON file location
    private function filePath(): string
    {
        return storage_path('app/json/customers.json');
    }

    // Read customers from JSON
    private function readCustomers(): array
    {
        $path = $this->filePath();

        if (!file_exists($path)) {
            return [];
        }

        $content = file_get_contents($path);

        if ($content === false) {
            throw new RuntimeException(
                'Unable to read customers JSON file.'
            );
        }

        try {
            $data = json_decode(
                $content,
                true,
                512,
                JSON_THROW_ON_ERROR
            );
        } catch (JsonException $e) {
            throw new RuntimeException(
                'Customers JSON file contains invalid data.',
                0,
                $e
            );
        }

        if (!is_array($data) || !array_is_list($data)) {
            throw new RuntimeException(
                'Invalid customers JSON structure.'
            );
        }

        return $data;
    }

    // Save customers to JSON
    private function saveCustomers(array $customers): void
    {
        $path = $this->filePath();
        $directory = dirname($path);

        if (!is_dir($directory)) {
            if (!mkdir($directory, 0755, true) && !is_dir($directory)) {
                throw new RuntimeException(
                    'Unable to create JSON directory.'
                );
            }
        }

        try {
            $json = json_encode(
                array_values($customers),
                JSON_PRETTY_PRINT |
                JSON_UNESCAPED_UNICODE |
                JSON_THROW_ON_ERROR
            );
        } catch (JsonException $e) {
            throw new RuntimeException(
                'Unable to encode customer data.',
                0,
                $e
            );
        }

        if (file_put_contents($path, $json, LOCK_EX) === false) {
            throw new RuntimeException(
                'Unable to save customers JSON file.'
            );
        }
    }

    // Check duplicate email
    private function emailExists(
        array $customers,
        string $email,
        ?int $excludeId = null
    ): bool {
        foreach ($customers as $customer) {
            if (
                strtolower($customer['email'] ?? '') === strtolower($email) &&
                ($excludeId === null ||
                    (int) ($customer['id'] ?? 0) !== $excludeId)
            ) {
                return true;
            }
        }

        return false;
    }

    // 1. Display all customers
    public function index()
    {
        $customers = $this->readCustomers();

        return view('customers.index', compact('customers'));
    }

    // 2. Display create form
    public function create()
    {
        return view('customers.create');
    }

    // 3. Store new customer
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:30',
            'email' => 'required|email:rfc|max:255',
        ]);

        $customers = $this->readCustomers();

        $validated['name'] = trim($validated['name']);
        $validated['phone'] = trim($validated['phone']);
        $validated['email'] = strtolower(trim($validated['email']));

        if ($this->emailExists($customers, $validated['email'])) {
            return back()
                ->withErrors([
                    'email' => 'This email already exists.'
                ])
                ->withInput();
        }

        $ids = array_map(
            'intval',
            array_column($customers, 'id')
        );

        $newId = empty($ids) ? 1 : max($ids) + 1;

        $validated['id'] = $newId;

        $customers[] = $validated;

        $this->saveCustomers($customers);

        return redirect()
            ->route('customers.index')
            ->with('success', 'Customer created successfully.');
    }

    // 4. Display one customer
    public function show(string $id)
    {
        $customer = collect($this->readCustomers())
            ->firstWhere('id', (int) $id);

        abort_if($customer === null, 404);

        return view('customers.show', compact('customer'));
    }

    // 5. Display edit form
    public function edit(string $id)
    {
        $customer = collect($this->readCustomers())
            ->firstWhere('id', (int) $id);

        abort_if($customer === null, 404);

        return view('customers.edit', compact('customer'));
    }

    // 6. Update customer
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:30',
            'email' => 'required|email:rfc|max:255',
        ]);

        $customers = $this->readCustomers();

        $validated['name'] = trim($validated['name']);
        $validated['phone'] = trim($validated['phone']);
        $validated['email'] = strtolower(trim($validated['email']));

        if ($this->emailExists(
            $customers,
            $validated['email'],
            (int) $id
        )) {
            return back()
                ->withErrors([
                    'email' => 'This email already exists.'
                ])
                ->withInput();
        }

        $found = false;

        foreach ($customers as &$customer) {
            if (
                isset($customer['id']) &&
                (int) $customer['id'] === (int) $id
            ) {
                $customer = array_merge(
                    $customer,
                    $validated,
                    ['id' => (int) $id]
                );

                $found = true;
                break;
            }
        }

        unset($customer);

        abort_if(!$found, 404);

        $this->saveCustomers($customers);

        return redirect()
            ->route('customers.index')
            ->with('success', 'Customer updated successfully.');
    }

    // 7. Delete customer
    public function destroy(string $id)
    {
        $customers = $this->readCustomers();

        $filtered = array_filter(
            $customers,
            fn ($customer) =>
                isset($customer['id']) &&
                (int) $customer['id'] !== (int) $id
        );

        abort_if(
            count($filtered) === count($customers),
            404
        );

        $this->saveCustomers($filtered);

        return redirect()
            ->route('customers.index')
            ->with('success', 'Customer deleted successfully.');
    }
}
