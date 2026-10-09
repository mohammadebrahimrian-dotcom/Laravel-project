
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIM Card Details | AWCC</title>
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
    <h1>SIM Card Details</h1>
    <p class="muted">Information for the selected SIM card.</p>

    <div class="card">
        <div class="details">
            <div class="detail-item"><strong>SIM Card ID</strong>{{ $simcard['id'] }}</div>
            <div class="detail-item"><strong>Phone Number</strong>{{ $simcard['number'] }}</div>
            <div class="detail-item"><strong>SIM Type</strong>{{ $simcard['type'] }}</div>
            <div class="detail-item"><strong>Status</strong>{{ $simcard['status'] }}</div>
        </div>

        <br>
        <a class="btn btn-warning" href="{{ route('simcards.edit', $simcard['id']) }}">Edit SIM Card</a>
        <a class="btn btn-secondary" href="{{ route('simcards.index') }}">Back to SIM Cards</a>
    </div>
</main>

<footer class="footer">AWCC SIM Card Management System</footer>
</body>
</html>
