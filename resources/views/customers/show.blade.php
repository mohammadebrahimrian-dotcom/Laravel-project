
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details | AWCC</title>
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
    <h1>Customer Details</h1>
    <p class="muted">Information for the selected customer.</p>

    <div class="card">
        <div class="details">
            <div class="detail-item"><strong>Customer ID</strong>{{ $customer['id'] }}</div>
            <div class="detail-item"><strong>Full Name</strong>{{ $customer['name'] }}</div>
            <div class="detail-item"><strong>Phone Number</strong>{{ $customer['phone'] }}</div>
            <div class="detail-item"><strong>Email Address</strong>{{ $customer['email'] }}</div>
        </div>

        <br>
        <a class="btn btn-warning" href="{{ route('customers.edit', $customer['id']) }}">Edit Customer</a>
        <a class="btn btn-secondary" href="{{ route('customers.index') }}">Back to Customers</a>
    </div>
</main>

<footer class="footer">AWCC Customer Management System</footer>
</body>
</html>
