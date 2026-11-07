<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JsonException;
use RuntimeException;

class ServiceController extends Controller
{
    // JSON file location
    private function filePath(): string
    {
        return storage_path('app/json/services.json');
    }

    // Read services from JSON
    private function readServices(): array
    {
        $path = $this->filePath();
        $directory = dirname($path);

        if (!is_dir($directory)) {
            if (!mkdir($directory, 0755, true) && !is_dir($directory)) {
                throw new RuntimeException('Unable to create JSON directory.');
            }
        }

        if (!file_exists($path)) {
            if (file_put_contents($path, '[]', LOCK_EX) === false) {
                throw new RuntimeException('Unable to create services JSON file.');
            }
        }

        $content = file_get_contents($path);

        if ($content === false) {
            throw new RuntimeException('Unable to read services JSON file.');
        }

        try {
            $services = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            throw new RuntimeException('Services JSON file is invalid.', 0, $e);
        }

        if (!is_array($services) || !array_is_list($services)) {
            throw new RuntimeException('Services JSON must contain a list.');
        }

        return $services;
    }

    // Save services to JSON
    private function saveServices(array $services): void
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
                array_values($services),
                JSON_PRETTY_PRINT |
                JSON_UNESCAPED_UNICODE |
                JSON_THROW_ON_ERROR
            );
        } catch (JsonException $e) {
            throw new RuntimeException('Unable to encode services JSON.', 0, $e);
        }

        if (file_put_contents($path, $json, LOCK_EX) === false) {
            throw new RuntimeException('Unable to save services JSON file.');
        }
    }

    // 1. Display all services
    public function index()
    {
        $services = $this->readServices();

        return view('services.index', compact('services'));
    }

    // 2. Show create form
    public function create()
    {
        return view('services.create');
    }

    // 3. Store a new service
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:Active,Inactive',
        ]);

        $services = $this->readServices();

        $ids = array_map(
            'intval',
            array_column($services, 'id')
        );

        $validated['id'] = empty($ids) ? 1 : max($ids) + 1;

        $services[] = $validated;

        $this->saveServices($services);

        return redirect()
            ->route('services.index')
            ->with('success', 'Service created successfully.');
    }

    // 4. Display one service
    public function show(string $id)
    {
        $service = collect($this->readServices())
            ->firstWhere('id', (int) $id);

        abort_if($service === null, 404);

        return view('services.show', compact('service'));
    }

    // 5. Show edit form
    public function edit(string $id)
    {
        $service = collect($this->readServices())
            ->firstWhere('id', (int) $id);

        abort_if($service === null, 404);

        return view('services.edit', compact('service'));
    }

    // 6. Update a service
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:Active,Inactive',
        ]);

        $services = $this->readServices();
        $found = false;

        foreach ($services as &$service) {
            if (
                isset($service['id']) &&
                (int) $service['id'] === (int) $id
            ) {
                $service = array_merge($service, $validated, [
                    'id' => (int) $id,
                ]);

                $found = true;
                break;
            }
        }

        unset($service);

        abort_if(!$found, 404);

        $this->saveServices($services);

        return redirect()
            ->route('services.index')
            ->with('success', 'Service updated successfully.');
    }

    // 7. Delete a service
    public function destroy(string $id)
    {
        $services = $this->readServices();

        $filtered = array_filter(
            $services,
            fn ($service) =>
                !isset($service['id']) ||
                (int) $service['id'] !== (int) $id
        );

        abort_if(count($filtered) === count($services), 404);

        $this->saveServices($filtered);

        return redirect()
            ->route('services.index')
            ->with('success', 'Service deleted successfully.');
    }
}
