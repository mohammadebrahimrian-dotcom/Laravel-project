<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RuntimeException;
use JsonException;

class BillingController extends Controller
{
    // JSON file location
    private function filePath(): string
    {
        return storage_path('app/json/billings.json');
    }

    // Read bills from JSON
    private function readBills(): array
    {
        $path = $this->filePath();

        if (!file_exists($path)) {
            return [];
        }

        $content = file_get_contents($path);

        if ($content === false) {
            throw new RuntimeException('Unable to read billing JSON file.');
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
                'Billing JSON file contains invalid data.',
                0,
                $e
            );
        }

        if (!is_array($data) || !array_is_list($data)) {
            throw new RuntimeException('Invalid billing JSON structure.');
        }

        return $data;
    }

    // Save bills to JSON
    private function saveBills(array $bills): void
    {
        $path = $this->filePath();
        $directory = dirname($path);

        if (!is_dir($directory)) {
            if (!mkdir($directory, 0755, true) && !is_dir($directory)) {
                throw new RuntimeException('Unable to create JSON directory.');
            }
        }

        try {
            $json = json_encode(
                array_values($bills),
                JSON_PRETTY_PRINT |
                JSON_UNESCAPED_UNICODE |
                JSON_THROW_ON_ERROR
            );
        } catch (JsonException $e) {
            throw new RuntimeException('Unable to encode billing data.', 0, $e);
        }

        if (file_put_contents($path, $json, LOCK_EX) === false) {
            throw new RuntimeException('Unable to save billing JSON file.');
        }
    }

    // 1. Display all bills
    public function index()
    {
        $bills = $this->readBills();

        return view('billing.index', compact('bills'));
    }

    // 2. Display create form
    public function create()
    {
        return view('billing.create');
    }

    // 3. Store new bill
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer' => 'required|string|max:255',
            'amount' => 'required|numeric|decimal:0,2|min:0',
            'status' => 'required|in:Paid,Pending',
        ]);

        $validated['customer'] = trim($validated['customer']);

        $bills = $this->readBills();

        $ids = array_map(
            'intval',
            array_column($bills, 'id')
        );

        $validated['id'] = empty($ids) ? 1 : max($ids) + 1;

        $bills[] = $validated;

        $this->saveBills($bills);

        return redirect()
            ->route('billing.index')
            ->with('success', 'Bill created successfully.');
    }

    // 4. Display one bill
    public function show(string $id)
    {
        $bill = collect($this->readBills())
            ->firstWhere('id', (int) $id);

        abort_if($bill === null, 404);

        return view('billing.show', compact('bill'));
    }

    // 5. Display edit form
    public function edit(string $id)
    {
        $bill = collect($this->readBills())
            ->firstWhere('id', (int) $id);

        abort_if($bill === null, 404);

        return view('billing.edit', compact('bill'));
    }

    // 6. Update bill
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'customer' => 'required|string|max:255',
            'amount' => 'required|numeric|decimal:0,2|min:0',
            'status' => 'required|in:Paid,Pending',
        ]);

        $validated['customer'] = trim($validated['customer']);

        $bills = $this->readBills();

        $found = false;

        foreach ($bills as &$bill) {
            if (
                isset($bill['id']) &&
                (int) $bill['id'] === (int) $id
            ) {
                $bill = array_merge(
                    $bill,
                    $validated,
                    ['id' => (int) $id]
                );

                $found = true;
                break;
            }
        }

        unset($bill);

        abort_if(!$found, 404);

        $this->saveBills($bills);

        return redirect()
            ->route('billing.index')
            ->with('success', 'Bill updated successfully.');
    }

    // 7. Delete bill
    public function destroy(string $id)
    {
        $bills = $this->readBills();

        $filtered = array_filter(
            $bills,
            fn ($bill) =>
                !isset($bill['id']) ||
                (int) $bill['id'] !== (int) $id
        );

        abort_if(
            count($filtered) === count($bills),
            404
        );

        $this->saveBills($filtered);

        return redirect()
            ->route('billing.index')
            ->with('success', 'Bill deleted successfully.');
    }
}
