
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Details | AWCC</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>
<body>
<nav class="navbar">
    <h2>AWCC Management</h2>
    <div>
        <a href="{{ route('customers.index') }}">Customers</a>
        <a href="{{ route('simcards.index') }}">SIM Cards</a>
        <a href="{{ route('billing.index') }}">Billing</a>
    </div>
</nav>

<main class="container">
    <h1>Billing Details</h1>
    <p class="muted">Information for the selected billing record.</p>

    <div class="card">
        <div class="details">
            <div class="detail-item">
                <strong>Bill ID</strong>
                {{ $bill['id'] }}
            </div>
            <div class="detail-item">
                <strong>Customer Name</strong>
                {{ $bill['customer'] }}
            </div>
            <div class="detail-item">
                <strong>Amount</strong>
                {{ number_format($bill['amount'], 2) }} AFN
            </div>
            <div class="detail-item">
                <strong>Payment Status</strong>
                <span class="badge">{{ $bill['status'] }}</span>
            </div>
        </div>

        <br>
        <a class="btn btn-warning" href="{{ route('billing.edit', $bill['id']) }}">Edit Bill</a>
        <a class="btn btn-secondary" href="{{ route('billing.index') }}">Back to Billing</a>
    </div>
</main>

<footer class="footer">AWCC Billing Management System</footer>
</body>
</html>
