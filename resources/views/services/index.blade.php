
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | AWCC</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>
<body>
<nav class="navbar">
    <h2>AWCC Management</h2>
    <div>
        <a href="{{ route('customers.index') }}">Customers</a>
        <a href="{{ route('simcards.index') }}">SIM Cards</a>
        <a href="{{ route('billing.index') }}">Billing</a>
        <a href="{{ route('services.index') }}">Services</a>
    </div>
</nav>

<main class="container">
    <div class="page-heading">
        <div>
            <h1>AWCC Services</h1>
            <p class="muted">View and manage services.</p>
        </div>
        <a class="btn btn-primary" href="{{ route('services.create') }}">
            + Add Service
        </a>
    </div>

    @if (session('success'))
        <div class="card">{{ session('success') }}</div>
    @endif

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price (AFN)</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                    <tr>
                        <td>{{ $service['id'] }}</td>
                        <td>{{ $service['name'] }}</td>
                        <td>{{ $service['description'] }}</td>
                        <td>{{ number_format($service['price'], 2) }}</td>
                        <td>{{ $service['status'] }}</td>
                        <td>
                            <a class="btn btn-primary"
                               href="{{ route('services.show', $service['id']) }}">
                                View
                            </a>

                            <a class="btn btn-warning"
                               href="{{ route('services.edit', $service['id']) }}">
                                Edit
                            </a>

                            <form action="{{ route('services.destroy', $service['id']) }}"
                                  method="POST"
                                  style="display:inline">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger"
                                        type="submit"
                                        onclick="return confirm('Delete this service?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No services found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>

<footer class="footer">AWCC Services Management</footer>
</body>
</html>
