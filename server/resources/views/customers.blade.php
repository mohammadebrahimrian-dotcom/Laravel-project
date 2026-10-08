<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشتریان - AWCC سیستم</title>
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

            <!--  Hidden Checkbox -->
            <input type="checkbox" id="menu-toggle">

            <!--  Hamburger -->
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
            <h1>مشتریان</h1>
            <p>د افغان وایرلس ټول مشتریانو لیست</p>
        </div>
    </section>
    <!-- Customers Table -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>مشتریانو لیست</h2>
                <p>د ټولو مشتریانو تفصیلي معلومات</p>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>آی ډی</th>
                            <th>نوم</th>
                            <th>تلیفون شمېره</th>
                            <th>حالت</th>
                            <th>استعمال</th>
                            <th>بیلانس</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>احمد خان</td>
                            <td>0700123456</td>
                            <td><span class="customer-status status-active">فعال</span></td>
                            <td>1.2 GB</td>
                            <td>1,500 افغانی</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td> محمدی</td>
                            <td>0700234567</td>
                            <td><span class="customer-status status-active">فعال</span></td>
                            <td>2.5 GB</td>
                            <td>2,300 افغانی</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>محمد علی</td>
                            <td>0700345678</td>
                            <td><span class="customer-status status-blocked">بلاک شوی</span></td>
                            <td>0 GB</td>
                            <td>0 افغانی</td>
                        </tr>
                        <tr>
                            <td>004</td>
                            <td> احمد</td>
                            <td>0700456789</td>
                            <td><span class="customer-status status-active">فعال</span></td>
                            <td>3.1 GB</td>
                            <td>3,200 افغانی</td>
                        </tr>
                        <tr>
                            <td>005</td>
                            <td>عبدالله </td>
                            <td>0700567890</td>
                            <td><span class="customer-status status-active">فعال</span></td>
                            <td>1.8 GB</td>
                            <td>1,800 افغانی</td>
                        </tr>
                        <tr>
                            <td>006</td>
                            <td> کریم</td>
                            <td>0700678901</td>
                            <td><span class="customer-status status-blocked">بلاک شوی</span></td>
                            <td>0 GB</td>
                            <td>0 افغانی</td>
                        </tr>
                        <tr>
                            <td>007</td>
                            <td> فاروق</td>
                            <td>0700789012</td>
                            <td><span class="customer-status status-active">فعال</span></td>
                            <td>4.2 GB</td>
                            <td>4,500 افغانی</td>
                        </tr>
                        <tr>
                            <td>008</td>
                            <td> حسن</td>
                            <td>0700890123</td>
                            <td><span class="customer-status status-active">فعال</span></td>
                            <td>2.0 GB</td>
                            <td>2,100 افغانی</td>
                        </tr>
                        <tr>
                            <td>009</td>
                            <td>یوسف </td>
                            <td>0700901234</td>
                            <td><span class="customer-status status-active">فعال</span></td>
                            <td>1.5 GB</td>
                            <td>1,600 افغانی</td>
                        </tr>
                        <tr>
                            <td>010</td>
                            <td> علی</td>
                            <td>0701012345</td>
                            <td><span class="customer-status status-blocked">بلاک شوی</span></td>
                            <td>0 GB</td>
                            <td>0 افغانی</td>
                        </tr>
                    </tbody>
                </table>
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
                    <a href="#">د تایدشرایط</a>
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