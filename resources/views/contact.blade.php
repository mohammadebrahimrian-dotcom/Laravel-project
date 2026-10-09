<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اړیکه - AWCC سیستم</title>
 <link rel="stylesheet" href="{{ asset('css/style.css') }}"></head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="index.html" class="logo">
                <span class="logo-icon">📡</span>
                <span>AWCC سیستم</span>
            </a>
            <!-- ✅ Hidden Checkbox -->
            <input type="checkbox" id="menu-toggle">

            <!-- ✅ Hamburger -->
            <label for="menu-toggle" class="mobile-menu-toggle">
<span></span>
<span></span>
<span></span>
</label>

            <nav>
                <ul class="nav-links">
                    <li><a href="index.html">کور پاڼه</a></li>
                    <li><a href="features.html">ځانګړتیاوې</a></li>
                    <li><a href="customers.html">مشتریان</a></li>
                    <li><a href="simcards.html">سیم کارتونه</a></li>
                    <li><a href="billing.html">بیلنګ</a></li>
                    <li><a href="contact.html">اړیکه</a></li>
                </ul>
                <div class="nav-buttons">
                    <a href="#" class="btn btn-secondary">ننوتل</a>
                    <a href="#" class="btn btn-highlight">نوم لیکنه</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Page Header -->

    <section class="page-header">
        <div class="container">
            <h1>اړیکه</h1>
            <p>موږ سره اړیکه ونیسئ</p>
        </div>
    </section>

    <!-- Contact Form -->

    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>اړیکه فورمه</h2>
                <p>خپل پیغام موږ ته ولیږئ</p>
            </div>

            <div class="form-container">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">نوم</label>
                        <input type="text" id="name" name="name" placeholder="خپل نوم ولیکئ" required>
                    </div>

                    <div class="form-group">
                        <label for="email">بریښنالیک</label>
                        <input type="email" id="email" name="email" placeholder="خپل بریښنالیک ولیکئ" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">تلیفون شمېره</label>
                        <input type="tel" id="phone" name="phone" placeholder="خپل تلیفون شمېره ولیکئ">
                    </div>

                    <div class="form-group">
                        <label for="subject">موضوع</label>
                        <select id="subject" name="subject" required>
<option value="">موضوع وټاکئ</option>
<option value="general">عمومي پوښتنه</option>
<option value="support">تکنیکي ملاتړ</option>
<option value="billing">بیلنګ تړل</option>
<option value="complaint">شکایت</option>
<option value="suggestion">غوره توب</option>
</select>
                    </div>

                    <div class="form-group">
                        <label for="message">پیغام</label>
                        <textarea id="message" name="message" placeholder="خپل پیغام ولیکئ" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">پیغام ولیږئ</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Contact Info -->

    <section class="customers-section">
        <div class="container">
            <div class="section-title">
                <h2>د اړیکې معلومات</h2>
                <p>د اړیکې نورې لارې</p>
            </div>
            <div class="contact-info">
                <div class="contact-card">
                    <div class="contact-icon">📶</div>
                    <h3>ادرس</h3>
                    <p>کابل، افغانستان</p>
                    <p>د افغان وایرلس مرکز</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">📞</div>
                    <h3>تلیفون</h3>
                    <p>0700123456</p>
                    <p>0700234567</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">✉️</div>
                    <h3>بریښنالیک</h3>
                    <p>info@awcc.af</p>
                    <p>support@awcc.af</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">⏰</div>
                    <h3>د کار وخت</h3>
                    <p>شنبه - پنجشنبه</p>
                    <p>8:00 - 5:00</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>د اړیکې معلومات</h3>
                    <p>📶 کابل، افغانستان</p>
                    <p>📞 0700123456</p>
                    <p>✉️ info@awcc.af</p>
                </div>

                <div class="footer-section">
                    <h3>تړل شوي لینکونه</h3>
                    <a href="index.html">کور پاڼه</a>
                    <a href="features.html">ځانګړتیاوې</a>
                    <a href="customers.html">مشتریان</a>
                    <a href="simcards.html">سیم کارتونه</a>
                </div>
                <div class="footer-section">
                    <h3>قانوني معلومات</h3>
                    <a href="#">د محرمیت پالیسي</a>
                    <a href="#">د کارونې شرایط</a>
                    <a href="#">د تادیې شرایط</a>
                </div>

                <div class="footer-section">
                    <h3>ټولې اړیکی</h3>
                    <div class="social-links">
                        <a href="#" class="Facebook"><img src="facebook.png" alt="" width="40px"></a>
                        <a href="#" class="Twitter"><img src="icons8-twitter-50.png" alt="" width="40px"></a>
                        <a href="#" class="Instagram"><img src="instagram.png" alt="" width="40px"></a>
                        <a href="#" class="LinkedIn"><img src="3d-linkedin-logo-icon-isolated-on-transparent-background-free-png.png" alt="" width="40px"></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2026 د افغان وایرلس مخابراتي شرکت. ټول حقونه خوندي دي.</p>
            </div>
        </div>
    </footer>
</body>

</html>