
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers | AWCC</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>
<body>
<nav class="navbar">
    <h2>AWCC Management</h2>
    <div>
        <a href="{{ url('/customers') }}">Website</a>
        <a href="{{ route('customers.index') }}">Customers</a>
        <a href="{{ route('simcards.index') }}">SIM Cards</a>
        <a href="{{ route('billing.index') }}">Billing</a>
    </div>
</nav>

<main class="container">
    <div class="page-heading">
        <div>
            <h1>Customers</h1>
            <p class="muted">View and manage customer records.</p>
        </div>
        <a class="btn btn-primary" href="{{ route('customers.create') }}">+ Add Customer</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Phone</th><th>Email</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{ $customer['id'] }}</td>
                        <td>{{ $customer['name'] }}</td>
                        <td>{{ $customer['phone'] }}</td>
                        <td>{{ $customer['email'] }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('customers.show', $customer['id']) }}">View</a>
                            <a class="btn btn-warning" href="{{ route('customers.edit', $customer['id']) }}">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5">No customers found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>

<footer class="footer">AWCC Customer Management System</footer>
</body>
</html>
