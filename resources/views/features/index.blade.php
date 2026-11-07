
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features | AWCC</title>
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
            <h1>Features</h1>
            <p class="muted">View and manage website features.</p>
        </div>

        <a class="btn btn-primary"
           href="{{ route('features.create') }}">
            + Add Feature
        </a>
    </div>

    @if(session('success'))
        <div class="card">
            <span class="badge">{{ session('success') }}</span>
        </div>
    @endif

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Points</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($features as $feature)
                    <tr>
                        <td>{{ $feature['id'] }}</td>
                        <td>{{ $feature['icon'] ?? '—' }}</td>
                        <td>{{ $feature['title'] }}</td>
                        <td>{{ $feature['description'] }}</td>
                        <td>
                            {{ is_array($feature['points'] ?? null)
                                ? implode(', ', $feature['points'])
                                : ($feature['points'] ?? '—') }}
                        </td>

                        <td>
                            <a class="btn btn-primary"
                               href="{{ route('features.show', $feature['id']) }}">
                                View
                            </a>

                            <a class="btn btn-warning"
                               href="{{ route('features.edit', $feature['id']) }}">
                                Edit
                            </a>

                            <form action="{{ route('features.destroy', $feature['id']) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this feature?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No features found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</main>

<footer class="footer">
    AWCC Feature Management System
</footer>

</body>
</html>
