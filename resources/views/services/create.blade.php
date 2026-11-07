
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Service | AWCC</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>
<body>
<main class="container">
    <h1>Add New Service</h1>

    @if ($errors->any())
        <div class="card">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <form action="{{ route('services.store') }}" method="POST">
            @csrf

            <p>
                <label>Service Name</label><br>
                <input type="text" name="name"
                       value="{{ old('name') }}" required>
            </p>

            <p>
                <label>Description</label><br>
                <textarea name="description" required>{{ old('description') }}</textarea>
            </p>

            <p>
                <label>Price (AFN)</label><br>
                <input type="number" name="price" min="0" step="0.01"
                       value="{{ old('price') }}" required>
            </p>

            <p>
                <label>Status</label><br>
                <select name="status" required>
                    <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </p>

            <button class="btn btn-primary" type="submit">Save Service</button>
            <a class="btn" href="{{ route('services.index') }}">Cancel</a>
        </form>
    </div>
</main>
</body>
</html>
