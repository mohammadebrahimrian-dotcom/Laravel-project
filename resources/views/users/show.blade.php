
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>User Details</h1>

    <p><strong>ID:</strong> {{ $user['id'] }}</p>
    <p><strong>Name:</strong> {{ $user['name'] }}</p>
    <p><strong>Email:</strong> {{ $user['email'] }}</p>
    <p><strong>Phone:</strong> {{ $user['phone'] }}</p>
    <p><strong>Role:</strong> {{ $user['role'] }}</p>
    <p><strong>Status:</strong> {{ $user['status'] }}</p>

    <a href="{{ route('users.edit', $user['id']) }}">Edit User</a>
    |
    <a href="{{ route('users.index') }}">Back to Users</a>
</body>
</html>
