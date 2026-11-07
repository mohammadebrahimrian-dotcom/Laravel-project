
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Feature | AWCC</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>
<body>

<nav class="navbar">
    <h2>AWCC Management</h2>
    <div>
        <a href="{{ url('/features') }}">Website</a>
        <a href="{{ route('customers.index') }}">Customers</a>
        <a href="{{ route('simcards.index') }}">SIM Cards</a>
        <a href="{{ route('billing.index') }}">Billing</a>
        <a href="{{ route('features.index') }}">Features</a>
    </div>
</nav>

<main class="container">

    <div class="page-heading">
        <div>
            <h1>Add New Feature</h1>
            <p class="muted">Create a new website feature.</p>
        </div>

        <a href="{{ route('features.index') }}" class="btn btn-secondary">
            Back to Features
        </a>
    </div>

    <div class="card">

        <form action="{{ route('features.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Feature Title</label>
                <input type="text" id="title" name="title"
                       value="{{ old('title') }}"
                       placeholder="Enter feature title" required>
                @error('title')
                    <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description"
                          rows="4" placeholder="Enter description"
                          required>{{ old('description') }}</textarea>
                @error('description')
                    <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="icon">Icon</label>
                <input type="text" id="icon" name="icon"
                       value="{{ old('icon') }}"
                       placeholder="Example: 📱">
                @error('icon')
                    <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="points">Feature Points</label>
                <textarea id="points" name="points" rows="5"
                          placeholder="Enter each point on a new line"
                          required>{{ old('points') }}</textarea>
                <small class="muted">Write each point on a separate line.</small>
                @error('points')
                    <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">
                Save Feature
            </button>

            <a href="{{ route('features.index') }}" class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>

</main>

<footer class="footer">
    AWCC Feature Management System
</footer>

</body>
</html>
