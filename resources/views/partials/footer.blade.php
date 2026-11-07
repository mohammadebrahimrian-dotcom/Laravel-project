
<footer class="main-footer">
    <div class="container footer-container">

        <!-- د AWCC پېژندنه -->
        <div class="footer-section">
            <h3>د AWCC سیستم</h3>
            <p>
                افغان وایرلس د مخابراتي خدماتو وړاندې کوونکی شرکت دی
                چې خپلو مشتریانو ته د اړیکو او انټرنېټ بېلابېل خدمات وړاندې کوي.
            </p>
        </div>

        <!-- مهم لینکونه -->
        <div class="footer-section">
            <h3>مهم لینکونه</h3>
            <ul>
                <li><a href="{{ url('/index') }}">کور پاڼه</a></li>
                <li><a href="{{ url('/features') }}">ځانګړتیاوې</a></li>
                <li><a href="{{ url('/customers') }}">مشتریان</a></li>
                <li><a href="{{ url('/simcards') }}">سیمکارتونه</a></li>
                <li><a href="{{ url('/billing') }}">بیل</a></li>
                <li><a href="{{ url('/contact') }}">اړیکه</a></li>
            </ul>
        </div>

        <!-- خدمات -->
        <div class="footer-section">
            <h3>زموږ خدمات</h3>
            <ul>
                <li>د انټرنېټ خدمات</li>
                <li>د غږیزو اړیکو خدمات</li>
                <li>د SMS خدمات</li>
                <li>د سیمکارتونو مدیریت</li>
                <li>د بیلونو مدیریت</li>
            </ul>
        </div>

        <!-- د اړیکو معلومات -->
        <div class="footer-section">
            <h3>له موږ سره اړیکه</h3>
            <p>پته: کابل، افغانستان</p>
            <p>ټیلیفون: 0700123456</p>
            <p>Email: info@awcc.af</p>

            <div class="footer-social">
                <a href="#" aria-label="Facebook">
                    <img src="{{ asset('facebook.png') }}" alt="Facebook">
                </a>
                <a href="#" aria-label="Twitter">
                    <img src="{{ asset('icons8-twitter-50.png') }}" alt="Twitter">
                </a>
                <a href="#" aria-label="Instagram">
                    <img src="{{ asset('instagram.png') }}" alt="Instagram">
                </a>
                <a href="#" aria-label="LinkedIn">
                    <img src="{{ asset('3d-linkedin-logo-icon-isolated-on-transparent-background-free-png.png') }}" alt="LinkedIn">
                </a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© {{ date('Y') }} د AWCC سیستم. ټول حقوق خوندي دي.</p>
    </div>
</footer>
