<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JsonException;
use RuntimeException;

class ContactMessageController extends Controller
{
    // JSON file location
    private function filePath(): string
    {
        return storage_path('app/json/contact_messages.json');
    }

    // Read messages from JSON
    private function readMessages(): array
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
                throw new RuntimeException('Unable to create contact messages file.');
            }
        }

        $content = file_get_contents($path);

        if ($content === false) {
            throw new RuntimeException('Unable to read contact messages file.');
        }

        try {
            $messages = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            throw new RuntimeException('Contact messages JSON file is invalid.', 0, $e);
        }

        if (!is_array($messages) || !array_is_list($messages)) {
            throw new RuntimeException('Contact messages JSON must contain a list.');
        }

        return $messages;
    }

    // Save messages to JSON
    private function saveMessages(array $messages): void
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
                array_values($messages),
                JSON_PRETTY_PRINT |
                JSON_UNESCAPED_UNICODE |
                JSON_THROW_ON_ERROR
            );
        } catch (JsonException $e) {
            throw new RuntimeException('Unable to encode contact messages JSON.', 0, $e);
        }

        if (file_put_contents($path, $json, LOCK_EX) === false) {
            throw new RuntimeException('Unable to save contact messages.');
        }
    }

    // 1. Display all messages
    public function index()
    {
        $messages = $this->readMessages();

        return view('contact-messages.index', compact('messages'));
    }

    // 2. Show create form
    public function create()
    {
        return view('contact-messages.create');
    }

    // 3. Save new message
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'status' => 'required|in:New,Read,Replied',
        ]);

        $validated['name'] = trim($validated['name']);
        $validated['email'] = strtolower(trim($validated['email']));
        $validated['subject'] = trim($validated['subject']);
        $validated['message'] = trim($validated['message']);

        $messages = $this->readMessages();

        $ids = array_map('intval', array_column($messages, 'id'));

        $validated['id'] = empty($ids) ? 1 : max($ids) + 1;

        $messages[] = $validated;

        $this->saveMessages($messages);

        return redirect()
            ->route('contact-messages.index')
            ->with('success', 'Contact message created successfully.');
    }

    // 4. Display one message
    public function show(string $id)
    {
        $message = collect($this->readMessages())
            ->firstWhere('id', (int) $id);

        abort_if($message === null, 404);

        return view('contact-messages.show', compact('message'));
    }

    // 5. Show edit form
    public function edit(string $id)
    {
        $message = collect($this->readMessages())
            ->firstWhere('id', (int) $id);

        abort_if($message === null, 404);

        return view('contact-messages.edit', compact('message'));
    }

    // 6. Update message
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'status' => 'required|in:New,Read,Replied',
        ]);

        $validated['name'] = trim($validated['name']);
        $validated['email'] = strtolower(trim($validated['email']));
        $validated['subject'] = trim($validated['subject']);
        $validated['message'] = trim($validated['message']);

        $messages = $this->readMessages();
        $found = false;

        foreach ($messages as &$item) {
            if (isset($item['id']) && (int) $item['id'] === (int) $id) {
                $item = array_merge($item, $validated, [
                    'id' => (int) $id,
                ]);

                $found = true;
                break;
            }
        }

        unset($item);

        abort_if(!$found, 404);

        $this->saveMessages($messages);

        return redirect()
            ->route('contact-messages.index')
            ->with('success', 'Contact message updated successfully.');
    }

    // 7. Delete message
    public function destroy(string $id)
    {
        $messages = $this->readMessages();

        $filtered = array_filter(
            $messages,
            fn ($item) =>
                !isset($item['id']) ||
                (int) $item['id'] !== (int) $id
        );

        abort_if(count($filtered) === count($messages), 404);

        $this->saveMessages($filtered);

        return redirect()
            ->route('contact-messages.index')
            ->with('success', 'Contact message deleted successfully.');
    }
}
