<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RuntimeException;
use JsonException;

class SimcardController extends Controller
{
    // JSON file location
    private function filePath(): string
    {
        return storage_path('app/json/simcards.json');
    }

    // Read SIM cards from JSON
    private function readSimcards(): array
    {
        $path = $this->filePath();

        if (!file_exists($path)) {
            return [];
        }

        $content = file_get_contents($path);

        if ($content === false) {
            throw new RuntimeException('Unable to read SIM cards JSON file.');
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
                'SIM cards JSON file contains invalid data.',
                0,
                $e
            );
        }

        if (!is_array($data)) {
            throw new RuntimeException('Invalid SIM cards JSON structure.');
        }

        return $data;
    }

    // Save SIM cards to JSON
    private function saveSimcards(array $simcards): void
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
                array_values($simcards),
                JSON_PRETTY_PRINT |
                JSON_UNESCAPED_UNICODE |
                JSON_THROW_ON_ERROR
            );
        } catch (JsonException $e) {
            throw new RuntimeException('Unable to encode SIM card data.', 0, $e);
        }

        if (file_put_contents($path, $json, LOCK_EX) === false) {
            throw new RuntimeException('Unable to save SIM cards JSON file.');
        }
    }

    // Check whether SIM number already exists
    private function numberExists(
        array $simcards,
        string $number,
        ?int $excludeId = null
    ): bool {
        foreach ($simcards as $simcard) {

            if (!isset($simcard['number'], $simcard['id'])) {
                continue;
            }

            if (
                trim($simcard['number']) === trim($number) &&
                ($excludeId === null ||
                 (int) $simcard['id'] !== $excludeId)
            ) {
                return true;
            }
        }

        return false;
    }

    // 1. Display all SIM cards
    public function index()
    {
        $simcards = $this->readSimcards();

        return view('simcards.index', compact('simcards'));
    }

    // 2. Display create form
    public function create()
    {
        return view('simcards.create');
    }

    // 3. Store new SIM card
    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|string|max:30',
            'type' => 'required|in:Prepaid,Postpaid',
            'status' => 'required|in:Active,Inactive',
        ]);

        $validated['number'] = trim($validated['number']);

        $simcards = $this->readSimcards();

        if ($this->numberExists($simcards, $validated['number'])) {
            return back()
                ->withInput()
                ->withErrors([
                    'number' => 'This phone number already exists.',
                ]);
        }

        $ids = array_map(
            'intval',
            array_column($simcards, 'id')
        );

        $validated['id'] = empty($ids) ? 1 : max($ids) + 1;

        $simcards[] = $validated;

        $this->saveSimcards($simcards);

        return redirect()
            ->route('simcards.index')
            ->with('success', 'SIM card created successfully.');
    }

    // 4. Display one SIM card
    public function show(string $id)
    {
        $simcard = collect($this->readSimcards())
            ->firstWhere('id', (int) $id);

        abort_if($simcard === null, 404);

        return view('simcards.show', compact('simcard'));
    }

    // 5. Display edit form
    public function edit(string $id)
    {
        $simcard = collect($this->readSimcards())
            ->firstWhere('id', (int) $id);

        abort_if($simcard === null, 404);

        return view('simcards.edit', compact('simcard'));
    }

    // 6. Update SIM card
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'number' => 'required|string|max:30',
            'type' => 'required|in:Prepaid,Postpaid',
            'status' => 'required|in:Active,Inactive',
        ]);

        $validated['number'] = trim($validated['number']);

        $simcards = $this->readSimcards();

        if ($this->numberExists(
            $simcards,
            $validated['number'],
            (int) $id
        )) {
            return back()
                ->withInput()
                ->withErrors([
                    'number' => 'This phone number already exists.',
                ]);
        }

        $found = false;

        foreach ($simcards as &$simcard) {

            if (
                isset($simcard['id']) &&
                (int) $simcard['id'] === (int) $id
            ) {
                $simcard = array_merge(
                    $simcard,
                    $validated,
                    ['id' => (int) $id]
                );

                $found = true;
                break;
            }
        }

        unset($simcard);

        abort_if(!$found, 404);

        $this->saveSimcards($simcards);

        return redirect()
            ->route('simcards.index')
            ->with('success', 'SIM card updated successfully.');
    }

    // 7. Delete SIM card
    public function destroy(string $id)
    {
        $simcards = $this->readSimcards();

        $filtered = array_filter(
            $simcards,
            fn ($simcard) =>
                !isset($simcard['id']) ||
                (int) $simcard['id'] !== (int) $id
        );

        abort_if(
            count($filtered) === count($simcards),
            404
        );

        $this->saveSimcards($filtered);

        return redirect()
            ->route('simcards.index')
            ->with('success', 'SIM card deleted successfully.');
    }
}
