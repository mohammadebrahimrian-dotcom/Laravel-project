
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact Message | AWCC</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>
<body>
<main class="container">
    <h1>Edit Contact Message</h1>

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
        <form action="{{ route('contact-messages.update', $message['id']) }}"
              method="POST">
            @csrf
            @method('PUT')

            <p>
                <label>Name</label><br>
                <input type="text" name="name"
                       value="{{ old('name', $message['name']) }}" required>
            </p>

            <p>
                <label>Email</label><br>
                <input type="email" name="email"
                       value="{{ old('email', $message['email']) }}" required>
            </p>

            <p>
                <label>Subject</label><br>
                <input type="text" name="subject"
                       value="{{ old('subject', $message['subject']) }}" required>
            </p>

            <p>
                <label>Message</label><br>
                <textarea name="message" required>{{ old('message', $message['message']) }}</textarea>
            </p>

            <p>
                <label>Status</label><br>
                <select name="status" required>
                    <option value="New" {{ old('status', $message['status']) == 'New' ? 'selected' : '' }}>New</option>
                    <option value="Read" {{ old('status', $message['status']) == 'Read' ? 'selected' : '' }}>Read</option>
                    <option value="Replied" {{ old('status', $message['status']) == 'Replied' ? 'selected' : '' }}>Replied</option>
                </select>
            </p>

            <button class="btn btn-primary" type="submit">Update Message</button>
            <a class="btn" href="{{ route('contact-messages.index') }}">Cancel</a>
        </form>
    </div>
</main>
</body>
</html>
