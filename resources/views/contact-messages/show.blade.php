
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Details | AWCC</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>
<body>
<main class="container">
    <h1>Contact Message Details</h1>

    <div class="card">
        <p><strong>ID:</strong> {{ $message['id'] }}</p>
        <p><strong>Name:</strong> {{ $message['name'] }}</p>
        <p><strong>Email:</strong> {{ $message['email'] }}</p>
        <p><strong>Subject:</strong> {{ $message['subject'] }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $message['message'] }}</p>
        <p><strong>Status:</strong> {{ $message['status'] }}</p>

        <a class="btn btn-warning"
           href="{{ route('contact-messages.edit', $message['id']) }}">
            Edit
        </a>

        <a class="btn btn-primary"
           href="{{ route('contact-messages.index') }}">
            Back to Messages
        </a>
    </div>
</main>
</body>
</html>
