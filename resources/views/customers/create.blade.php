
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer | AWCC</title>
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
    <h1>Add Customer</h1>
    <p class="muted">Enter the customer's information.</p>

    <div class="card">
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Customer Name</label>
                <input id="name" type="text" name="name" placeholder="Enter full name" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input id="phone" type="tel" name="phone" placeholder="Enter phone number" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" name="email" placeholder="Enter email address" required>
            </div>

            <button class="btn btn-success" type="submit">Save Customer</button>
            <a class="btn btn-secondary" href="{{ route('customers.index') }}">Cancel</a>
        </form>
    </div>
</main>

<footer class="footer">AWCC Customer Management System</footer>
</body>
</html>
