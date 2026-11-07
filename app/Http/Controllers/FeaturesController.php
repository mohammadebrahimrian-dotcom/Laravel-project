<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JsonException;
use RuntimeException;

class FeaturesController extends Controller
{
    // JSON file location
    private function filePath(): string
    {
        return storage_path('app/json/features.json');
    }

    // Read features from JSON
    private function readFeatures(): array
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
                throw new RuntimeException('Unable to create features JSON file.');
            }
        }

        $content = file_get_contents($path);

        if ($content === false) {
            throw new RuntimeException('Unable to read features JSON file.');
        }

        try {
            $features = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            throw new RuntimeException('Features JSON file is invalid.', 0, $e);
        }

        if (!is_array($features) || !array_is_list($features)) {
            throw new RuntimeException('Features JSON must contain a list.');
        }

        return $features;
    }

    // Save features to JSON
    private function saveFeatures(array $features): void
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
                array_values($features),
                JSON_PRETTY_PRINT |
                JSON_UNESCAPED_UNICODE |
                JSON_THROW_ON_ERROR
            );
        } catch (JsonException $e) {
            throw new RuntimeException('Unable to encode features JSON.', 0, $e);
        }

        if (file_put_contents($path, $json, LOCK_EX) === false) {
            throw new RuntimeException('Unable to save features JSON file.');
        }
    }

    // Convert points textarea into an array
    private function preparePoints(string $points): array
    {
        return array_values(array_filter(
            array_map('trim', preg_split('/\r\n|\r|\n/', $points)),
            fn ($point) => $point !== ''
        ));
    }

    // 1. Display all features
    public function index()
    {
        $features = $this->readFeatures();

        return view('features.index', compact('features'));
    }

    // 2. Show create form
    public function create()
    {
        return view('features.create');
    }

    // 3. Store a new feature
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'icon' => 'nullable|string|max:50',
            'points' => 'required|string|max:3000',
        ]);

        $features = $this->readFeatures();

        $ids = array_map('intval', array_column($features, 'id'));

        $validated['id'] = empty($ids) ? 1 : max($ids) + 1;
        $validated['icon'] = $validated['icon'] ?? '';
        $validated['points'] = $this->preparePoints($validated['points']);

        $features[] = $validated;

        $this->saveFeatures($features);

        return redirect()
            ->route('features.index')
            ->with('success', 'Feature created successfully.');
    }

    // 4. Display one feature
    public function show(string $id)
    {
        $feature = collect($this->readFeatures())
            ->firstWhere('id', (int) $id);

        abort_if($feature === null, 404);

        return view('features.show', compact('feature'));
    }

    // 5. Show edit form
    public function edit(string $id)
    {
        $feature = collect($this->readFeatures())
            ->firstWhere('id', (int) $id);

        abort_if($feature === null, 404);

        return view('features.edit', compact('feature'));
    }

    // 6. Update a feature
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'icon' => 'nullable|string|max:50',
            'points' => 'required|string|max:3000',
        ]);

        $features = $this->readFeatures();
        $found = false;

        foreach ($features as &$feature) {
            if (isset($feature['id']) && (int) $feature['id'] === (int) $id) {
                $validated['icon'] = $validated['icon'] ?? '';
                $validated['points'] = $this->preparePoints($validated['points']);

                $feature = array_merge($feature, $validated, [
                    'id' => (int) $id,
                ]);

                $found = true;
                break;
            }
        }

        unset($feature);

        abort_if(!$found, 404);

        $this->saveFeatures($features);

        return redirect()
            ->route('features.index')
            ->with('success', 'Feature updated successfully.');
    }

    // 7. Delete a feature
    public function destroy(string $id)
    {
        $features = $this->readFeatures();

        $filtered = array_filter(
            $features,
            fn ($feature) =>
                !isset($feature['id']) ||
                (int) $feature['id'] !== (int) $id
        );

        abort_if(count($filtered) === count($features), 404);

        $this->saveFeatures($filtered);

        return redirect()
            ->route('features.index')
            ->with('success', 'Feature deleted successfully.');
    }
}
