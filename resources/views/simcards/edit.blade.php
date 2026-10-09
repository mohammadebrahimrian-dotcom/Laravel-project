
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit SIM Card | AWCC</title>
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
    <h1>Edit SIM Card</h1>
    <p class="muted">Update the SIM card information.</p>

    <div class="card">
        <form action="{{ route('simcards.update', $simcard['id']) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="number">Phone Number</label>
                <input id="number" type="tel" name="number" value="{{ $simcard['number'] }}" required>
            </div>

            <div class="form-group">
                <label for="type">SIM Card Type</label>
                <select id="type" name="type" required>
                    <option value="Prepaid" {{ $simcard['type'] === 'Prepaid' ? 'selected' : '' }}>Prepaid</option>
                    <option value="Postpaid" {{ $simcard['type'] === 'Postpaid' ? 'selected' : '' }}>Postpaid</option>
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="Active" {{ $simcard['status'] === 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ $simcard['status'] === 'Inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button class="btn btn-success" type="submit">Update SIM Card</button>
            <a class="btn btn-secondary" href="{{ route('simcards.index') }}">Cancel</a>
        </form>
    </div>
</main>

<footer class="footer">AWCC SIM Card Management System</footer>
</body>
</html>
