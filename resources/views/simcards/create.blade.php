
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add SIM Card | AWCC</title>
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
    <h1>Add SIM Card</h1>
    <p class="muted">Enter the SIM card details.</p>

    <div class="card">
        <form action="{{ route('simcards.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="number">Phone Number</label>
                <input id="number" type="tel" name="number" placeholder="Enter SIM number" required>
            </div>

            <div class="form-group">
                <label for="type">SIM Card Type</label>
                <select id="type" name="type" required>
                    <option value="">Select type</option>
                    <option value="Prepaid">Prepaid</option>
                    <option value="Postpaid">Postpaid</option>
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="">Select status</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>

            <button class="btn btn-success" type="submit">Save SIM Card</button>
            <a class="btn btn-secondary" href="{{ route('simcards.index') }}">Cancel</a>
        </form>
    </div>
</main>

<footer class="footer">AWCC SIM Card Management System</footer>
</body>
</html>
