
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing | AWCC</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>
<body>
<nav class="navbar">
    <h2>AWCC Management</h2>
    <div>
        <a href="{{ url('/billing') }}">Website</a>
        <a href="{{ route('customers.index') }}">Customers</a>
        <a href="{{ route('simcards.index') }}">SIM Cards</a>
        <a href="{{ route('billing.index') }}">Billing</a>
    </div>
</nav>

<main class="container">
    <div class="page-heading">
        <div>
            <h1>Billing Records</h1>
            <p class="muted">View and manage customer bills.</p>
        </div>
        <a class="btn btn-primary" href="{{ route('billing.create') }}">+ Add Bill</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>Bill ID</th><th>Customer</th><th>Amount (AFN)</th><th>Status</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bills as $bill)
                    <tr>
                        <td>{{ $bill['id'] }}</td>
                        <td>{{ $bill['customer'] }}</td>
                        <td>{{ number_format($bill['amount'], 2) }}</td>
                        <td><span class="badge">{{ $bill['status'] }}</span></td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('billing.show', $bill['id']) }}">View</a>
                            <a class="btn btn-warning" href="{{ route('billing.edit', $bill['id']) }}">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5">No billing records found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>

<footer class="footer">AWCC Billing Management System</footer>
</body>
</html>
