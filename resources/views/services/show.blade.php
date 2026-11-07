
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Details | AWCC</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>
<body>
<main class="container">
    <h1>Service Details</h1>

    <div class="card">
        <p><strong>ID:</strong> {{ $service['id'] }}</p>
        <p><strong>Name:</strong> {{ $service['name'] }}</p>
        <p><strong>Description:</strong> {{ $service['description'] }}</p>
        <p><strong>Price:</strong> {{ number_format($service['price'], 2) }} AFN</p>
        <p><strong>Status:</strong> {{ $service['status'] }}</p>

        <a class="btn btn-warning"
           href="{{ route('services.edit', $service['id']) }}">Edit</a>

        <a class="btn btn-primary"
           href="{{ route('services.index') }}">Back to Services</a>
    </div>
</main>
</body>
</html>
