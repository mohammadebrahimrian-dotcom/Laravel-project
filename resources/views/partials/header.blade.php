

<header class="main-header">
    <div class="container header-container">

        <a href="{{ url('/index') }}" class="logo">
            <span class="logo-icon">
                <img src="{{ asset('wifi-signal_4009138.png') }}" alt="AWCC" width="40">
            </span>
            <span>AWCC سیستم</span>
        </a>

        <input type="checkbox" id="menu-toggle">

        <label for="menu-toggle" class="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <nav class="main-nav">
            <ul class="nav-links">
                <li><a href="{{ url('/index') }}">کور پاڼه</a></li>
                <li><a href="{{ url('/features') }}">ځانګړتیاوې</a></li>
                <li><a href="{{ url('/customers') }}">مشتریان</a></li>
                <li><a href="{{ url('/simcards') }}">سیمکارتونه</a></li>
                <li><a href="{{ url('/billing') }}">بیل</a></li>
                <li><a href="{{ url('/contact') }}">اړیکه</a></li>
            </ul>

            <div class="nav-buttons">
                <a href="{{ url('/login') }}" class="btn btn-secondary">ننوتل</a>
                <a href="{{ url('/login') }}" class="btn btn-highlight">نوم لیکنه</a>
            </div>
        </nav>

    </div>
</header>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function () {
            mainNav.classList.toggle('active');
        });
    }
});
</script>
