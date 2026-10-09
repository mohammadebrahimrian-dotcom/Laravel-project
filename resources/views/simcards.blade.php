<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سیمکارتونه - AWCC سیستم</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

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
                    <li><a href="simcards.html">سیمکارتونه</a></li>
                    <li><a href="billing.html">بیل</a></li>
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
            <h1>سیمکارتونه</h1>
            <p>د افغان وایرلس ټول سیمکارتونو لیست</p>
        </div>
    </section>
    <!-- SIM Cards Table -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>سیمکارتونو لیست</h2>
                <p>د ټولو سیمکارتونو تفصیلي معلومات</p>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>آی ډی</th>
                            <th>سیمکارت شمېره</th>
                            <th>مالک نوم</th>
                            <th>حالت</th>
                            <th>رجسټر نیټه</th>
                            <th>بسته</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SIM001</td>
                            <td>0700123456</td>
                            <td>احمد خان</td>
                            <td><span class="simcard-status active">فعال</span></td>
                            <td>2026-01-15</td>
                            <td>اساسي</td>
                        </tr>
                        <tr>
                            <td>SIM002</td>
                            <td>0700234567</td>
                            <td> محمدی</td>
                            <td><span class="simcard-status active">فعال</span></td>
                            <td>2026-02-20</td>
                            <td>پرميوم</td>
                        </tr>
                        <tr>
                            <td>SIM003</td>
                            <td>0700345678</td>
                            <td>محمد علی</td>
                            <td><span class="simcard-status inactive">غیر فعال</span></td>
                            <td>2026-1-10</td>
                            <td>اساسي</td>
                        </tr>
                        <tr>
                            <td>SIM004</td>
                            <td>0700456789</td>
                            <td> احمد</td>
                            <td><span class="simcard-status active">فعال</span></td>
                            <td>2026-03-05</td>
                            <td>پرميوم</td>
                        </tr>
                        <tr>
                            <td>SIM005</td>
                            <td>0700567890</td>
                            <td>عبدالله </td>
                            <td><span class="simcard-status active">فعال</span></td>
                            <td>2026-01-28</td>
                            <td>اساسي</td>
                        </tr>
                        <tr>
                            <td>SIM006</td>
                            <td>0700678901</td>
                            <td> کریم</td>
                            <td><span class="simcard-status inactive">غیر فعال</span></td>
                            <td>2026-02-15</td>
                            <td>اساسي</td>
                        </tr>
                        <tr>
                            <td>SIM007</td>
                            <td>0700789012</td>
                            <td> فاروق</td>
                            <td><span class="simcard-status active">فعال</span></td>
                            <td>2026-04-10</td>
                            <td>پرميوم</td>
                        </tr>
                        <tr>
                            <td>SIM008</td>
                            <td>0700890123</td>
                            <td> حسن</td>
                            <td><span class="simcard-status active">فعال</span></td>
                            <td>2026-02-14</td>
                            <td>اساسي</td>
                        </tr>
                        <tr>
                            <td>SIM009</td>
                            <td>0700901234</td>
                            <td>یوسف </td>
                            <td><span class="simcard-status active">فعال</span></td>
                            <td>2026-03-22</td>
                            <td>اساسي</td>
                        </tr>
                        <tr>
                            <td>SIM010</td>
                            <td>0701012345</td>
                            <td> احمد</td>
                            <td><span class="simcard-status inactive">غیر فعال</span></td>
                            <td>2026-1-01</td>
                            <td>اساسي</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- SIM Cards Grid -->
    <section class="simcards-section">
        <div class="container">
            <div class="section-title">
                <h2>سیمکارتونو کارتونه</h2>
                <p>د سیمکارتونو ساده لید</p>
            </div>

            <div class="simcards-grid">
                <div class="simcard">
                    <div class="simcard-header">
                        <span class="simcard-icon">📱</span>
                        <span class="simcard-status active">فعال</span>
                    </div>
                    <div class="simcard-number">0700123456</div>
                    <div class="simcard-owner">احمد خان</div>
                </div>

                <div class="simcard">
                    <div class="simcard-header">
                        <span class="simcard-icon">📱</span>
                        <span class="simcard-status active">فعال</span>
                    </div>
                    <div class="simcard-number">0700234567</div>
                    <div class="simcard-owner"> محمدی</div>
                </div>

                <div class="simcard">
                    <div class="simcard-header">
                        <span class="simcard-icon">📱</span>
                        <span class="simcard-status inactive">غیر فعال</span>
                    </div>
                    <div class="simcard-number">0700345678</div>
                    <div class="simcard-owner">محمد علی</div>
                </div>

                <div class="simcard">
                    <div class="simcard-header">
                        <span class="simcard-icon">📱</span>
                        <span class="simcard-status active">فعال</span>
                    </div>
                    <div class="simcard-number">0700456789</div>
                    <div class="simcard-owner"> احمد</div>
                </div>

                <div class="simcard">
                    <div class="simcard-header">
                        <span class="simcard-icon">📱</span>
                        <span class="simcard-status active">فعال</span>
                    </div>
                    <div class="simcard-number">0700567890</div>
                    <div class="simcard-owner">عبدالله </div>
                </div>

                <div class="simcard">
                    <div class="simcard-header">
                        <span class="simcard-icon">📱</span>
                        <span class="simcard-status inactive">غیر فعال</span>
                    </div>
                    <div class="simcard-number">0700678901</div>
                    <div class="simcard-owner"> کریم</div>
                </div>

                <div class="simcard">
                    <div class="simcard-header">
                        <span class="simcard-icon">📱</span>
                        <span class="simcard-status active">فعال</span>
                    </div>
                    <div class="simcard-number">0700789012</div>
                    <div class="simcard-owner"> فاروق</div>
                </div>

                <div class="simcard">
                    <div class="simcard-header">
                        <span class="simcard-icon">📱</span>
                        <span class="simcard-status active">فعال</span>
                    </div>
                    <div class="simcard-number">0700890123</div>
                    <div class="simcard-owner"> حسن</div>
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
                    <a href="simcards.html">سیمکارتونه</a>
                </div>

                <div class="footer-section">
                    <h3>قانوني معلومات</h3>
                    <a href="#">د محرمیت پالیسي</a>
                    <a href="#">د کارونې شرایط</a>
                    <a href="#">د تایدی شرایط</a>
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