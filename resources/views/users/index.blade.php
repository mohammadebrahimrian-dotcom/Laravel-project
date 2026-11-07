
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
   
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Users Management</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('users.create') }}">Add New User</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['phone'] }}</td>
                    <td>{{ $user['role'] }}</td>
                    <td>{{ $user['status'] }}</td>
                    <td>
                        <a href="{{ route('users.show', $user['id']) }}">View</a>
                        |
                        <a href="{{ route('users.edit', $user['id']) }}">Edit</a>
                        |
                        <form action="{{ route('users.destroy', $user['id']) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Delete this user?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
