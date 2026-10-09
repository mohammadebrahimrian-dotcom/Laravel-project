
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Bill | AWCC</title>
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
    <h1>Create Billing Record</h1>
    <p class="muted">Enter the customer's billing information.</p>

    <div class="card">
        <form action="{{ route('billing.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="customer">Customer Name</label>
                <input id="customer" type="text" name="customer" placeholder="Enter customer name" required>
            </div>

            <div class="form-group">
                <label for="amount">Amount (AFN)</label>
                <input id="amount" type="number" name="amount" min="0" step="0.01" placeholder="Enter amount" required>
            </div>

            <div class="form-group">
                <label for="status">Payment Status</label>
                <select id="status" name="status" required>
                    <option value="">Select payment status</option>
                    <option value="Paid">Paid</option>
                    <option value="Pending">Pending</option>
                </select>
            </div>

            <button class="btn btn-success" type="submit">Save Bill</button>
            <a class="btn btn-secondary" href="{{ route('billing.index') }}">Cancel</a>
        </form>
    </div>
</main>

<footer class="footer">AWCC Billing Management System</footer>
</body>
</html>
