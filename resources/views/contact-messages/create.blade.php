
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact Message | AWCC</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>
<body>
<main class="container">
    <h1>Add Contact Message</h1>

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
        <form action="{{ route('contact-messages.store') }}" method="POST">
            @csrf

            <p>
                <label>Name</label><br>
                <input type="text" name="name"
                       value="{{ old('name') }}" required>
            </p>

            <p>
                <label>Email</label><br>
                <input type="email" name="email"
                       value="{{ old('email') }}" required>
            </p>

            <p>
                <label>Subject</label><br>
                <input type="text" name="subject"
                       value="{{ old('subject') }}" required>
            </p>

            <p>
                <label>Message</label><br>
                <textarea name="message" required>{{ old('message') }}</textarea>
            </p>

            <p>
                <label>Status</label><br>
                <select name="status" required>
                    <option value="New" {{ old('status', 'New') == 'New' ? 'selected' : '' }}>New</option>
                    <option value="Read" {{ old('status') == 'Read' ? 'selected' : '' }}>Read</option>
                    <option value="Replied" {{ old('status') == 'Replied' ? 'selected' : '' }}>Replied</option>
                </select>
            </p>

            <button class="btn btn-primary" type="submit">Save Message</button>
            <a class="btn" href="{{ route('contact-messages.index') }}">Cancel</a>
        </form>
    </div>
</main>
</body>
</html>
