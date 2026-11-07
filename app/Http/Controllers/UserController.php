<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JsonException;
use RuntimeException;

class UserController extends Controller
{
    // JSON file location
    private function filePath(): string
    {
        return storage_path('app/json/users.json');
    }

    // Read users from JSON
    private function readUsers(): array
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
                throw new RuntimeException('Unable to create users JSON file.');
            }
        }

        $content = file_get_contents($path);

        if ($content === false) {
            throw new RuntimeException('Unable to read users JSON file.');
        }

        try {
            $users = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            throw new RuntimeException('Users JSON file is invalid.', 0, $e);
        }

        if (!is_array($users) || !array_is_list($users)) {
            throw new RuntimeException('Users JSON must contain a list.');
        }

        return $users;
    }

    // Save users to JSON
    private function saveUsers(array $users): void
    {
        $path = $this->filePath();

        try {
            $json = json_encode(
                array_values($users),
                JSON_PRETTY_PRINT |
                JSON_UNESCAPED_UNICODE |
                JSON_THROW_ON_ERROR
            );
        } catch (JsonException $e) {
            throw new RuntimeException('Unable to encode users JSON.', 0, $e);
        }

        if (file_put_contents($path, $json, LOCK_EX) === false) {
            throw new RuntimeException('Unable to save users JSON file.');
        }
    }

    // Check duplicate email
    private function emailExists(
        array $users,
        string $email,
        ?int $excludeId = null
    ): bool {
        foreach ($users as $user) {

            if (!isset($user['email'], $user['id'])) {
                continue;
            }

            if (
                strtolower(trim($user['email'])) === strtolower(trim($email)) &&
                ($excludeId === null ||
                 (int) $user['id'] !== $excludeId)
            ) {
                return true;
            }
        }

        return false;
    }

    // 1. Display all users
    public function index()
    {
        $users = $this->readUsers();

        // Never expose old password hashes to views
        foreach ($users as &$user) {
            unset($user['password']);
        }

        unset($user);

        return view('users.index', compact('users'));
    }

    // 2. Show create form
    public function create()
    {
        return view('users.create');
    }

    // 3. Store new user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc|max:255',
            'phone' => 'required|string|max:30',
            'role' => 'required|in:Admin,Customer,Employee',
            'status' => 'required|in:Active,Inactive',
        ]);

        $users = $this->readUsers();

        $validated['email'] = strtolower(trim($validated['email']));
        $validated['name'] = trim($validated['name']);
        $validated['phone'] = trim($validated['phone']);

        if ($this->emailExists($users, $validated['email'])) {
            return back()
                ->withInput()
                ->withErrors([
                    'email' => 'This email already exists.',
                ]);
        }

        $ids = array_map(
            'intval',
            array_column($users, 'id')
        );

        $validated['id'] = empty($ids) ? 1 : max($ids) + 1;

        $users[] = $validated;

        $this->saveUsers($users);

        return redirect()
            ->route('users.index')
            ->with('success', 'User created successfully.');
    }

    // 4. Display one user
    public function show(string $id)
    {
        $user = collect($this->readUsers())
            ->firstWhere('id', (int) $id);

        abort_if($user === null, 404);

        unset($user['password']);

        return view('users.show', compact('user'));
    }

    // 5. Show edit form
    public function edit(string $id)
    {
        $user = collect($this->readUsers())
            ->firstWhere('id', (int) $id);

        abort_if($user === null, 404);

        unset($user['password']);

        return view('users.edit', compact('user'));
    }

    // 6. Update user
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc|max:255',
            'phone' => 'required|string|max:30',
            'role' => 'required|in:Admin,Customer,Employee',
            'status' => 'required|in:Active,Inactive',
        ]);

        $users = $this->readUsers();

        $validated['email'] = strtolower(trim($validated['email']));
        $validated['name'] = trim($validated['name']);
        $validated['phone'] = trim($validated['phone']);

        if ($this->emailExists(
            $users,
            $validated['email'],
            (int) $id
        )) {
            return back()
                ->withInput()
                ->withErrors([
                    'email' => 'This email already exists.',
                ]);
        }

        $found = false;

        foreach ($users as &$user) {

            if (
                isset($user['id']) &&
                (int) $user['id'] === (int) $id
            ) {
                $user = array_merge(
                    $user,
                    $validated,
                    ['id' => (int) $id]
                );

                $found = true;
                break;
            }
        }

        unset($user);

        abort_if(!$found, 404);

        $this->saveUsers($users);

        return redirect()
            ->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    // 7. Delete user
    public function destroy(string $id)
    {
        $users = $this->readUsers();

        $filtered = array_filter(
            $users,
            fn ($user) =>
                !isset($user['id']) ||
                (int) $user['id'] !== (int) $id
        );

        abort_if(
            count($filtered) === count($users),
            404
        );

        $this->saveUsers($filtered);

        return redirect()
            ->route('users.index')
            ->with('success', 'User deleted successfully.');
    }
}
