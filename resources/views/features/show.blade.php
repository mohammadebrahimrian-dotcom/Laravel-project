
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature Details | AWCC</title>
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
            <h1>Feature Details</h1>
            <p class="muted">View complete feature information.</p>
        </div>

        <a href="{{ route('features.index') }}" class="btn btn-secondary">
            Back to Features
        </a>
    </div>

    <div class="card">

        <div class="details">

            <div class="detail-item">
                <strong>ID</strong>
                {{ $feature['id'] }}
            </div>

            <div class="detail-item">
                <strong>Icon</strong>
                {{ $feature['icon'] ?? '—' }}
            </div>

            <div class="detail-item">
                <strong>Feature Title</strong>
                {{ $feature['title'] }}
            </div>

            <div class="detail-item">
                <strong>Description</strong>
                {{ $feature['description'] }}
            </div>

        </div>

        <hr style="margin: 25px 0; border: 1px solid #e4eaf2;">

        <h3>Feature Points</h3>

        <ul style="padding-left: 25px;">
            @forelse($feature['points'] ?? [] as $point)
                <li style="margin-bottom: 10px;">
                    {{ $point }}
                </li>
            @empty
                <li>No feature points available.</li>
            @endforelse
        </ul>

        <div style="margin-top: 25px;">
            <a href="{{ route('features.edit', $feature['id']) }}"
               class="btn btn-warning">
                Edit Feature
            </a>

            <a href="{{ route('features.index') }}"
               class="btn btn-secondary">
                Back
            </a>
        </div>

    </div>

</main>

<footer class="footer">
    AWCC Feature Management System
</footer>

</body>
</html>
