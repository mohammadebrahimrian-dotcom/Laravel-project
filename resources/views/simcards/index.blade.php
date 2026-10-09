
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIM Cards | AWCC</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>
<body>
<nav class="navbar">
    <h2>AWCC Management</h2>
    <div>
        <a href="{{ url('/simcards') }}">Website</a>
        <a href="{{ route('customers.index') }}">Customers</a>
        <a href="{{ route('simcards.index') }}">SIM Cards</a>
        <a href="{{ route('billing.index') }}">Billing</a>
    </div>
</nav>

<main class="container">
    <div class="page-heading">
        <div>
            <h1>SIM Cards</h1>
            <p class="muted">View and manage SIM card records.</p>
        </div>
        <a class="btn btn-primary" href="{{ route('simcards.create') }}">+ Add SIM Card</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th><th>Phone Number</th><th>Type</th><th>Status</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($simcards as $simcard)
                    <tr>
                        <td>{{ $simcard['id'] }}</td>
                        <td>{{ $simcard['number'] }}</td>
                        <td>{{ $simcard['type'] }}</td>
                        <td><span class="badge">{{ $simcard['status'] }}</span></td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('simcards.show', $simcard['id']) }}">View</a>
                            <a class="btn btn-warning" href="{{ route('simcards.edit', $simcard['id']) }}">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5">No SIM cards found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>

<footer class="footer">AWCC SIM Card Management System</footer>
</body>
</html>
