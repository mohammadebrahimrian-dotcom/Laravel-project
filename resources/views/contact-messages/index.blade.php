
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages | AWCC</title>
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
        <a href="{{ route('contact-messages.index') }}">Contact Messages</a>
    </div>
</nav>

<main class="container">
    <div class="page-heading">
        <div>
            <h1>Contact Messages</h1>
            <p class="muted">View and manage customer messages.</p>
        </div>
        <a class="btn btn-primary" href="{{ route('contact-messages.create') }}">
            + Add Message
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
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($messages as $message)
                    <tr>
                        <td>{{ $message['id'] }}</td>
                        <td>{{ $message['name'] }}</td>
                        <td>{{ $message['email'] }}</td>
                        <td>{{ $message['subject'] }}</td>
                        <td>{{ $message['status'] }}</td>
                        <td>
                            <a class="btn btn-primary"
                               href="{{ route('contact-messages.show', $message['id']) }}">
                                View
                            </a>

                            <a class="btn btn-warning"
                               href="{{ route('contact-messages.edit', $message['id']) }}">
                                Edit
                            </a>

                            <form action="{{ route('contact-messages.destroy', $message['id']) }}"
                                  method="POST"
                                  style="display:inline">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger"
                                        type="submit"
                                        onclick="return confirm('Delete this message?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No contact messages found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>

<footer class="footer">AWCC Contact Management</footer>
</body>
</html>
