<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AWCC - د مخابراتي خدماتو سیستم</title>
<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <head>
    <!-- ستاسو د resources/css/app.css فایل د نښلولو لپاره -->
    @vite(['resources/css/app.css'])

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>


</head>
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{--primary-blue:#1e3a5f;--secondary-blue:#2c2d82;--accent-blue:#3182ce;--light-blue:#ebf8ff;--white:#fff;--light-gray:#f7fafc;--medium-gray:#e2e8f0;--dark-gray:#4a5568;--text-dark:#2d3748;--success-green:#48bb78;--warning-orange:#ed8936;--danger-red:#f56565;--spacing-xs:.5rem;--spacing-sm:1rem;--spacing-md:1.5rem;--spacing-lg:2rem;--spacing-xl:3rem;--radius-sm:4px;--radius-md:8px;--radius-lg:12px;--radius-xl:20px;--shadow-sm:0 1px 3px rgba(0,0,0,.1);--shadow-md:0 4px 6px rgba(0,0,0,.1);--shadow-lg:0 10px 25px rgba(0,0,0,.15);--transition:all .3s ease}
html{scroll-behavior:smooth}
body{font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;line-height:1.6;color:var(--text-dark);background:var(--light-gray);font-size:18px}
.container{max-width:1200px;margin:0 auto;padding:0 var(--spacing-md)}
header{background:linear-gradient(135deg,var(--primary-blue),var(--secondary-blue));color:var(--white);padding:var(--spacing-sm) 0;position:sticky;top:0;z-index:1000;box-shadow:var(--shadow-md)}
.header-container{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:var(--spacing-sm)}
.logo{display:flex;align-items:center;gap:var(--spacing-xs);font-size:1.8rem;font-weight:700;text-decoration:none;color:var(--white)}
.logo-icon{font-size:2rem}
nav{display:flex;align-items:center;gap:var(--spacing-md)}
.nav-links{display:flex;list-style:none;gap:var(--spacing-md);flex-wrap:wrap}
.nav-links a{color:var(--white);text-decoration:none;padding:var(--spacing-xs) var(--spacing-sm);border-radius:var(--radius-md);transition:var(--transition);font-weight:500;font-size:1.1rem}
.nav-links a:hover{background:rgba(255,255,255,.2);transform:translateY(-2px)}
.nav-buttons{display:flex;gap:var(--spacing-sm)}
.btn{padding:var(--spacing-xs) var(--spacing-md);border-radius:var(--radius-md);text-decoration:none;font-weight:600;transition:var(--transition);display:inline-block;cursor:pointer;border:none;font-size:1.1rem}
.btn-primary{background:var(--accent-blue);color:var(--white)}
.btn-primary:hover{background:var(--secondary-blue);transform:translateY(-2px);box-shadow:var(--shadow-md)}
.btn-secondary{background:transparent;color:var(--white);border:2px solid var(--white)}
.btn-secondary:hover{background:var(--white);color:var(--primary-blue)}
.btn-highlight{background:var(--success-green);color:var(--white)}
.btn-highlight:hover{background:#38a169;transform:translateY(-2px);box-shadow:var(--shadow-md)}
.mobile-menu-toggle{display:none;flex-direction:column;gap:4px;cursor:pointer;padding:var(--spacing-xs)}
.mobile-menu-toggle span{width:25px;height:3px;background:var(--white);border-radius:2px}
#menu-toggle{display:none}
.hero{background:linear-gradient(135deg,var(--primary-blue),var(--secondary-blue));color:var(--white);padding:var(--spacing-xl) 0;text-align:center;position:relative;overflow:hidden}
.hero::before{content:'';position:absolute;top:0;left:0;right:0;bottom:0;background:url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="2"/></svg>');background-size:100px 100px;opacity:.3}
.hero-content{position:relative;z-index:1;max-width:800px;margin:0 auto}
.hero h1{font-size:2.5rem;margin-bottom:var(--spacing-md);line-height:1.3}
.hero p{font-size:1.2rem;margin-bottom:var(--spacing-lg);opacity:.9}
.hero-illustration{background:rgba(255,255,255,.1);border-radius:var(--radius-xl);padding:var(--spacing-xl);margin-top:var(--spacing-lg);display:flex;justify-content:center;align-items:center;gap:var(--spacing-lg);flex-wrap:wrap}
.illustration-item{display:flex;flex-direction:column;align-items:center;gap:var(--spacing-xs);padding:var(--spacing-md);background:rgba(255,255,255,.1);border-radius:var(--radius-lg);min-width:120px}
.illustration-icon{font-size:2.5rem}
.illustration-text{font-size:.9rem;font-weight:500}
.features,.customers-section,.simcards-section,.billing-section,.modules-section,.objectives-section,.demo-section,.testimonials-section,.faq-section{padding:var(--spacing-xl) 0}
.features,.simcards-section,.modules-section,.testimonials-section{background:var(--white)}
.customers-section,.billing-section,.demo-section,.faq-section{background:var(--light-gray)}
.section-title{text-align:center;margin-bottom:var(--spacing-xl)}
.section-title h2{font-size:2.5rem;color:var(--primary-blue);margin-bottom:var(--spacing-xs)}
.section-title p{color:var(--dark-gray);font-size:1.3rem}
.features-grid,.customers-grid,.simcards-grid,.billing-grid,.modules-grid,.objectives-grid,.demo-grid,.testimonials-grid{display:grid;gap:var(--spacing-md)}
.features-grid,.billing-grid,.objectives-grid,.demo-grid,.testimonials-grid{grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:var(--spacing-lg)}
.customers-grid{grid-template-columns:repeat(auto-fit,minmax(280px,1fr))}
.simcards-grid{grid-template-columns:repeat(auto-fit,minmax(250px,1fr))}
.modules-grid{grid-template-columns:repeat(auto-fit,minmax(180px,1fr))}
.feature-card,.customer-card,.billing-card,.module-card,.demo-box,.testimonial-card,.contact-card,.feature-detail{background:var(--white);padding:var(--spacing-md);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);transition:var(--transition)}
.feature-card{background:var(--light-gray);padding:var(--spacing-lg);text-align:center;border:2px solid transparent}
.feature-card:hover,.demo-box:hover,.contact-card:hover,.feature-detail:hover{transform:translateY(-5px);box-shadow:var(--shadow-lg)}
.feature-card:hover{border-color:var(--accent-blue)}
.customer-card{border-left:4px solid var(--accent-blue)}
.customer-card:hover,.billing-card:hover{transform:translateY(-3px);box-shadow:var(--shadow-md)}
.simcard{background:linear-gradient(135deg,var(--primary-blue),var(--secondary-blue));color:var(--white);padding:var(--spacing-md);border-radius:var(--radius-lg);position:relative;overflow:hidden;transition:var(--transition)}
.simcard:hover{transform:scale(1.02);box-shadow:var(--shadow-lg)}
.simcard::before{content:'';position:absolute;top:-20px;right:-20px;width:80px;height:80px;background:rgba(255,255,255,.1);border-radius:50%}
.simcard-header,.customer-header,.billing-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:var(--spacing-sm)}
.billing-header{margin-bottom:var(--spacing-md);padding-bottom:var(--spacing-sm);border-bottom:2px solid var(--medium-gray)}
.feature-icon,.module-icon,.contact-icon,.feature-detail-icon{font-size:2.5rem;margin-bottom:var(--spacing-sm)}
.feature-detail-icon{font-size:3rem}
.feature-card h3,.module-card h3,.contact-card h3,.feature-detail h3{color:var(--primary-blue);margin-bottom:var(--spacing-xs)}
.feature-card h3{font-size:1.3rem}
.module-card h3{font-size:1rem}
.feature-detail h3{font-size:1.3rem;margin-bottom:var(--spacing-sm)}
.feature-card p,.contact-card p,.feature-detail p{color:var(--dark-gray)}
.feature-card p{font-size:.95rem}
.feature-detail p{margin-bottom:var(--spacing-sm)}
.customer-name,.billing-customer{font-size:1.4rem;font-weight:600;color:var(--primary-blue)}
.customer-status,.billing-status,.simcard-status{padding:4px 12px;border-radius:var(--radius-xl);font-size:1rem;font-weight:600}
.simcard-status{padding:4px 10px;font-size:.75rem}
.status-active,.billing-status.paid{background:#c6f6d5;color:#22543d}
.status-blocked,.billing-status.overdue{background:#fed7d7;color:#742a2a}
.billing-status.pending{background:#feebc8;color:#744210}
.simcard-status.active{background:var(--success-green)}
.simcard-status.inactive{background:var(--danger-red)}
.customer-info{display:flex;flex-direction:column;gap:var(--spacing-xs)}
.customer-info-item{display:flex;align-items:center;gap:var(--spacing-xs);color:var(--dark-gray);font-size:1.1rem}
.customer-info-item span:first-child{font-weight:600;color:var(--text-dark)}
.simcard-icon{font-size:2rem}
.simcard-number{font-size:1.1rem;font-weight:600;margin-bottom:var(--spacing-xs);letter-spacing:1px}
.simcard-owner{font-size:.9rem;opacity:.9}
.billing-details{display:grid;grid-template-columns:repeat(2,1fr);gap:var(--spacing-sm)}
.billing-item{display:flex;flex-direction:column;gap:4px}
.billing-label{font-size:.85rem;color:var(--dark-gray)}
.billing-value{font-size:1.1rem;font-weight:600;color:var(--text-dark)}
.billing-value.amount{color:var(--primary-blue)}
.billing-value.balance{color:var(--success-green)}
.module-card{background:linear-gradient(135deg,var(--light-blue),var(--white));border:2px solid var(--medium-gray);text-align:center}
.module-card:hover{transform:translateY(-5px);border-color:var(--accent-blue);box-shadow:var(--shadow-md)}
.objectives-section{background:linear-gradient(135deg,var(--primary-blue),var(--secondary-blue));color:var(--white)}
.objective-card{background:rgba(255,255,255,.1);padding:var(--spacing-lg);border-radius:var(--radius-lg);backdrop-filter:blur(10px)}
.objective-icon{font-size:2.5rem;margin-bottom:var(--spacing-sm)}
.objective-card h3{margin-bottom:var(--spacing-xs);font-size:1.3rem}
.objective-card p{opacity:.9;font-size:.95rem}
.demo-grid{margin-bottom:var(--spacing-lg)}
.demo-preview{height:200px;background:linear-gradient(135deg,var(--primary-blue),var(--secondary-blue));display:flex;align-items:center;justify-content:center;color:var(--white);font-size:3rem}
.demo-content{padding:var(--spacing-md)}
.demo-content h3{color:var(--primary-blue);margin-bottom:var(--spacing-xs)}
.demo-content p{color:var(--dark-gray);font-size:.9rem}
.demo-button{text-align:center}
.testimonial-card{background:var(--light-gray);padding:var(--spacing-lg);position:relative}
.testimonial-card::before{content:'"';position:absolute;top:10px;left:20px;font-size:4rem;color:var(--accent-blue);opacity:.3;font-family:Georgia,serif}
.testimonial-text{font-style:italic;color:var(--dark-gray);margin-bottom:var(--spacing-md);position:relative;z-index:1}
.testimonial-author{display:flex;align-items:center;gap:var(--spacing-sm)}
.author-avatar{width:50px;height:50px;background:linear-gradient(135deg,var(--primary-blue),var(--secondary-blue));border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--white);font-size:1.5rem}
.author-info h4{color:var(--primary-blue);font-size:1rem}
.author-info p{color:var(--dark-gray);font-size:.85rem}
.faq-list{max-width:800px;margin:0 auto}
.faq-item{background:var(--white);margin-bottom:var(--spacing-sm);border-radius:var(--radius-md);overflow:hidden;box-shadow:var(--shadow-sm)}
.faq-question{padding:var(--spacing-md);font-weight:600;color:var(--primary-blue);display:flex;justify-content:space-between;align-items:center;cursor:pointer}
.faq-question::after{content:'+';font-size:1.5rem;color:var(--accent-blue)}
.faq-answer{padding:0 var(--spacing-md) var(--spacing-md);color:var(--dark-gray);line-height:1.7}
footer{background:linear-gradient(135deg,var(--primary-blue),var(--secondary-blue));color:var(--white);padding:var(--spacing-xl) 0 var(--spacing-md)}
.footer-content{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg);margin-bottom:var(--spacing-lg)}
.footer-section h3{margin-bottom:var(--spacing-md);font-size:1.4rem}
.footer-section p,.footer-section a{color:rgba(255,255,255,.8);text-decoration:none;display:block;margin-bottom:var(--spacing-xs);transition:var(--transition);font-size:1.1rem}
.footer-section a:hover{color:var(--white);padding-left:5px}
.social-links{display:flex;gap:var(--spacing-sm);margin-top:var(--spacing-sm)}
.social-link{width:40px;height:40px;background:rgba(255,255,255,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.2rem;transition:var(--transition)}
.social-link:hover{background:var(--accent-blue);transform:translateY(-3px)}
.footer-bottom{text-align:center;padding-top:var(--spacing-md);border-top:1px solid rgba(255,255,255,.2)}
.footer-bottom p{color:rgba(255,255,255,.7);font-size:1.1rem}
.page-header{background:linear-gradient(135deg,var(--primary-blue),var(--secondary-blue));color:var(--white);padding:var(--spacing-xl) 0;text-align:center}
.page-header h1{font-size:3rem;margin-bottom:var(--spacing-xs)}
.page-header p{font-size:1.3rem;opacity:.9}
.table-container{overflow-x:auto;background:var(--white);border-radius:var(--radius-lg);box-shadow:var(--shadow-md);margin:var(--spacing-lg) 0}
table{width:100%;border-collapse:collapse}
thead{background:linear-gradient(135deg,var(--primary-blue),var(--secondary-blue));color:var(--white)}
th,td{padding:var(--spacing-sm) var(--spacing-md);text-align:left;font-size:1rem}
th{font-weight:600;text-transform:uppercase;font-size:1rem;letter-spacing:.5px}
tbody tr{border-bottom:1px solid var(--medium-gray);transition:var(--transition)}
tbody tr:hover{background:var(--light-blue)}
tbody tr:last-child{border-bottom:none}
.form-container{max-width:600px;margin:0 auto;background:var(--white);padding:var(--spacing-xl);border-radius:var(--radius-lg);box-shadow:var(--shadow-md)}
.form-group{margin-bottom:var(--spacing-md)}
.form-group label{display:block;margin-bottom:var(--spacing-xs);font-weight:600;color:var(--primary-blue)}
.form-group input,.form-group select,.form-group textarea{width:100%;padding:var(--spacing-sm);border:2px solid var(--medium-gray);border-radius:var(--radius-md);font-size:1rem;transition:var(--transition);font-family:inherit}
.form-group input:focus,.form-group select:focus,.form-group textarea:focus{outline:none;border-color:var(--accent-blue);box-shadow:0 0 0 3px rgba(49,130,206,.1)}
.form-group textarea{resize:vertical;min-height:120px}
.contact-info{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg);margin-top:var(--spacing-lg)}
.features-list{display:grid;grid-template-columns:repeat(auto-fit,minmax(350px,1fr));gap:var(--spacing-lg);margin-top:var(--spacing-lg)}
.feature-detail ul{list-style:none;padding-left:0}
.feature-detail ul li{padding:var(--spacing-xs) 0;color:var(--dark-gray);display:flex;align-items:center;gap:var(--spacing-xs)}
.feature-detail ul li::before{content:'✓';color:var(--success-green);font-weight:700}
.login-container{min-height:calc(100vh - 200px);display:flex;align-items:center;justify-content:center;padding:var(--spacing-xl)}
.login-box{background:var(--white);padding:var(--spacing-xl);border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);width:100%;max-width:450px}
.login-header{text-align:center;margin-bottom:var(--spacing-lg)}
.login-header h1{color:var(--primary-blue);margin-bottom:var(--spacing-xs)}
.login-header p{color:var(--dark-gray)}
.login-form .form-group{margin-bottom:var(--spacing-md)}
.login-form .btn{width:100%;padding:var(--spacing-sm);font-size:1.1rem}
.login-footer{text-align:center;margin-top:var(--spacing-md);padding-top:var(--spacing-md);border-top:1px solid var(--medium-gray)}
.login-footer a{color:var(--accent-blue);text-decoration:none}
.login-footer a:hover{text-decoration:underline}
@media(max-width:1024px){.nav-links{gap:var(--spacing-sm)}.nav-links a{font-size:.9rem;padding:var(--spacing-xs)}.nav-buttons .btn{font-size:.9rem;padding:var(--spacing-xs) var(--spacing-sm)}}
@media(max-width:992px){.hero h1{font-size:2rem}.hero p{font-size:1rem}.section-title h2{font-size:1.75rem}.features-grid,.customers-grid,.simcards-grid,.billing-grid,.modules-grid,.objectives-grid,.demo-grid,.testimonials-grid{grid-template-columns:repeat(auto-fit,minmax(250px,1fr))}}
@media(max-width:768px){.mobile-menu-toggle{display:flex}.header-container{flex-wrap:nowrap}nav{position:absolute;top:70px;right:0;width:100%;background:linear-gradient(135deg,var(--primary-blue),var(--secondary-blue));flex-direction:column;align-items:flex-start;padding:var(--spacing-md);display:none}.nav-links{flex-direction:column;width:100%;gap:var(--spacing-sm)}.nav-links li{width:100%}.nav-links a{display:block;width:100%;padding:var(--spacing-sm)}.nav-buttons{flex-direction:column;width:100%;margin-top:var(--spacing-sm)}.nav-buttons .btn{width:100%;text-align:center}#menu-toggle:checked~nav{display:flex}.hero{padding:var(--spacing-lg) 0}.hero h1{font-size:1.75rem}.hero-illustration{flex-direction:column}.illustration-item{width:100%}.features,.customers-section,.simcards-section,.billing-section,.modules-section,.objectives-section,.demo-section,.testimonials-section,.faq-section{padding:var(--spacing-lg) 0}.section-title h2{font-size:1.5rem}.features-grid,.customers-grid,.simcards-grid,.billing-grid,.modules-grid,.objectives-grid,.demo-grid,.testimonials-grid,.features-list{grid-template-columns:1fr}.billing-details{grid-template-columns:1fr}.footer-content{grid-template-columns:1fr;text-align:center}.social-links{justify-content:center}.page-header h1{font-size:2rem}table{font-size:.85rem}th,td{padding:var(--spacing-xs) var(--spacing-sm)}.form-container{padding:var(--spacing-md)}.login-box{padding:var(--spacing-md)}}
@media(max-width:480px){.container{padding:0 var(--spacing-sm)}.hero h1{font-size:1.5rem}.btn{padding:var(--spacing-xs) var(--spacing-sm);font-size:.9rem}.feature-card,.customer-card,.billing-card,.contact-card,.feature-detail{padding:var(--spacing-sm)}.customer-header,.billing-header{flex-direction:column;align-items:flex-start;gap:var(--spacing-xs)}}
.text-center{text-align:center}.text-left{text-align:left}.text-right{text-align:right}.mt-sm{margin-top:var(--spacing-sm)}.mt-md{margin-top:var(--spacing-md)}.mt-lg{margin-top:var(--spacing-lg)}.mb-sm{margin-bottom:var(--spacing-sm)}.mb-md{margin-bottom:var(--spacing-md)}.mb-lg{margin-bottom:var(--spacing-lg)}.hidden{display:none}.visible{display:block}.section-title-white h2{color:var(--white)}.section-title-white p{color:rgba(255,255,255,.9)}


</style>

<body>


<header>
<div class="container header-container">
<a href="index.html" class="logo">
<span class="logo-icon"><img src="wifi-signal_4009138.png" alt=""width="40px"></span>
<span>AWCC سیستم</span>
</a>
<input type="checkbox" id="menu-toggle">
<label for="menu-toggle" class="mobile-menu-toggle">
<span></span><span></span><span></span>
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

<section class="hero">
<div class="container hero-content">
<h1>افغان وایرلس نیټورک شبکه</h1>
<p>دا سیستم د افغان وایرلس مخابراتي شرکت لپاره د مشتریانو، سیمکارتونو، غوښتنلیکونو، میسجونه، انټرنیټ ډیټا، او بیل مدیریت لپاره یوشه حل وړاندی کوي.</p>
<div class="hero-illustration">
<div class="illustration-item"><span class="illustration-icon">👨🏼‍🤝‍👨🏽</span><span class="illustration-text">مشتریان</span></div>
<div class="illustration-item"><span class="illustration-icon">📱</span><span class="illustration-text">سیمکارتونه</span></div>
<div class="illustration-item"><span class="illustration-icon">📞</span><span class="illustration-text">غوښتنلیکونه</span></div>
<div class="illustration-item"><span class="illustration-icon">💬</span><span class="illustration-text">میسجونه</span></div>
<div class="illustration-item"><span class="illustration-icon">🌐</span><span class="illustration-text">انټرنیټ</span></div>
<div class="illustration-item"><span class="illustration-icon">💰</span><span class="illustration-text">بیلونه</span></div>
</div>
</div>
</section>


<section class="features">
<div class="container">
<div class="section-title">
<h2>اساسي ځانګړتیاوې</h2>
<p>زموږ سیستم ټولنې مخابراتي خدماتو لپاره یو شه حل وړاندی کوي</p>
</div>
<div class="features-grid">
<div class="feature-card"><div class="feature-icon">👨🏼‍🤝‍👨🏽</div><h3>د مشتریانو مدیریت</h3><p>د ټولو مشتریانو معلومات، حالت، او حسابونه آسانه مدیریت کړئ.</p></div>
<div class="feature-card"><div class="feature-icon">📱</div><h3>د سیمکارتونو مدیریت</h3><p>سیمکارتونه راجسټر کړئ، فعال او غیر فعال کړئ، اوپه هر څه یی سمبال کړئ.</p></div>
<div class="feature-card"><div ><img src="icons8-call-50.png" alt=""width="50px"></div><h3>د غوښتنلیکونو تعقیب</h3><p>د ټولو غوښتنلیکونو ریکارډونه وګورئ او تحلیل کړئ.</p></div>
<div class="feature-card"><div class="feature-icon">💌</div><h3>د میسجونومدیریت</h3><p>میسجونه راولیږئ، وګورئ، او مدیریت کړئ.</p></div>
<div class="feature-card"><div class="feature-icon">🌐</div><h3>انټرنیټ ډیټا بسته</h3><p>د انټرنیټ ډیټا بسته ایجاد کړئ، تخصیص کړئ، او مدیریت کړئ.</p></div>
<div class="feature-card"><div class="feature-icon">💵</div><h3>بیل سیستم</h3><p>بیل فکتورې ایجاد کړئ، تادیاتو تعقیب کړئ، او حسابونه سمبال کړئ.</p></div>
</div>
</div>
</section>


<section class="customers-section">
 <div class="container">
<div class="section-title">
<h2>اخیراضافه شوي مشتریان</h2>
<p>د افغان وایرلس مشتریانو لیست</p>
</div>
<div class="customers-grid">
<div class="customer-card">
<div class="customer-header"><span class="customer-name">احمد خان</span><span class="customer-status status-active">فعال</span></div>
<div class="customer-info">
<div class="customer-info-item"><span>تلیفون:</span><span>0700123456</span></div>
<div class="customer-info-item"><span>بیلانس:</span><span>1,500 افغانی</span></div>
</div>
</div>
<div class="customer-card">
<div class="customer-header"><span class="customer-name"> محمدی</span><span class="customer-status status-active">فعال</span></div>
<div class="customer-info">
<div class="customer-info-item"><span>تلیفون:</span><span>0700234567</span></div>
<div class="customer-info-item"><span>بیلانس:</span><span>2,300 افغانی</span></div>
</div>
</div>
<div class="customer-card">
<div class="customer-header"><span class="customer-name"> علی</span><span class="customer-status status-blocked">بلاک شوی</span></div>
<div class="customer-info">
<div class="customer-info-item"><span>تلیفون:</span><span>0700345678</span></div>
<div class="customer-info-item"><span>بیلانس:</span><span>0 افغانی</span></div>
</div>
</div>
</section>


<section class="simcards-section">
<div class="container">
<div class="section-title">
<h2>سیمکارتونه</h2>
<p>د افغان وایرلس سیمکارتونو لیست</p>
</div>
<div class="simcards-grid">
<div class="simcard"><div class="simcard-header"><span class="simcard-icon">📱</span><span class="simcard-status active">فعال</span></div><div class="simcard-number">0700123456</div><div class="simcard-owner">احمد خان</div></div>
<div class="simcard"><div class="simcard-header"><span class="simcard-icon">📱</span><span class="simcard-status active">فعال</span></div><div class="simcard-number">0700234567</div><div class="simcard-owner"> محمدی</div></div>
<div class="simcard"><div class="simcard-header"><span class="simcard-icon">📱</span><span class="simcard-status inactive">غیر فعال</span></div><div class="simcard-number">0700345678</div><div class="simcard-owner">محمد علی</div></div>
<div class="simcard"><div class="simcard-header"><span class="simcard-icon">📱</span><span class="simcard-status active">فعال</span></div><div class="simcard-number">0700456789</div><div class="simcard-owner"> احمد</div></div>
<div class="simcard"><div class="simcard-header"><span class="simcard-icon">📱</span><span class="simcard-status active">فعال</span></div><div class="simcard-number">0700567890</div><div class="simcard-owner">عبدالله</div></div>
<div class="simcard"><div class="simcard-header"><span class="simcard-icon">📱</span><span class="simcard-status inactive">غیر فعال</span></div><div class="simcard-number">0700678901</div><div class="simcard-owner"> کریم</div></div>
<div class="simcard"><div class="simcard-header"><span class="simcard-icon">📱</span><span class="simcard-status active">فعال</span></div><div class="simcard-number">0700567890</div><div class="simcard-owner">خان</div></div>
<div class="simcard"><div class="simcard-header"><span class="simcard-icon">📱</span><span class="simcard-status inactive">غیر فعال</span></div><div class="simcard-number">0700678901</div><div class="simcard-owner"> جانان</div></div>
</div>
</div>
</section>


<section class="billing-section">
 <div class="container">
<div class="section-title">
<h2>بیل معلومات</h2>
<p>د مشتریانو بیل فکتور</p>
</div>
<div class="billing-grid">
<div class="billing-card">
<div class="billing-header"><span class="billing-customer">احمد خان</span><span class="billing-status paid">تاید شوی</span></div>
<div class="billing-details">
<div class="billing-item"><span class="billing-label">تایدکس</span><span class="billing-value amount">1,500 افغانی</span></div>
<div class="billing-item"><span class="billing-label">بیلانس</span><span class="billing-value balance">0 افغانی</span></div>
</div>
</div>
<div class="billing-card">
<div class="billing-header"><span class="billing-customer"> محمدی</span><span class="billing-status pending">پاتې</span></div>
<div class="billing-details">
<div class="billing-item"><span class="billing-label">تایدکس</span><span class="billing-value amount">2,300 افغانی</span></div>
<div class="billing-item"><span class="billing-label">بیلانس</span><span class="billing-value balance">2,300 افغانی</span></div>
</div>
</div>
<div class="billing-card">
<div class="billing-header"><span class="billing-customer">محمد </span><span class="billing-status overdue">د وخت تیر</span></div>
<div class="billing-details">
<div class="billing-item"><span class="billing-label">تایدکس</span><span class="billing-value amount">500 افغانی</span></div>
<div class="billing-item"><span class="billing-label">بیلانس</span><span class="billing-value balance">500 افغانی</span></div>
</div>
</div>
</section>


<section class="modules-section">
<div class="container">
<div class="section-title">
<h2>سیستم ماډلونه</h2>
<p>د سیستم ټولې اصلي برخې</p>
</div>
<div class="modules-grid">
<div class="module-card"><div class="module-icon">👨🏼‍🤝‍👨🏽</div><h3>مشتری ماډل</h3></div>
<div class="module-card"><div class="module-icon">📱</div><h3>سیمکارت ماډل</h3></div>
<div class="module-card"><div class="module-icon">📞</div><h3>غږ ماډل</h3></div>
<div class="module-card"><div class="module-icon">💌</div><h3>میسجونه ماډل</h3></div>
<div class="module-card"><div class="module-icon">🌐</div><h3>ډیټا ماډل</h3></div>
<div class="module-card"><div class="module-icon">💵</div><h3>بیل ماډل</h3></div>
</div>
</div>
</section>


<section class="objectives-section">
<div class="container">
<div class="section-title section-title-white">
<h2>د سیستم موخې</h2>
<p>زموږ سیستم دا اهداف لري</p>
</div>
<div class="objectives-grid">
<div class="objective-card"><div class="objective-icon">📺</div><h3>د ټولو خدماتو اتوماتیزیشن</h3><p>د مخابراتي خدماتو ټولو برخو اتوماتیک او منظم مدیریت.</p></div>
<div class="objective-card"><div class="objective-icon">🛃</div><h3>د مشتری تجربه بهترول</h3><p>مشتریانو ته ښه خدمت او آسانه سیستم وړاندی کول.</p></div>
<div class="objective-card"><div class="objective-icon">📊</div><h3>چټک راپور او نظارت</h3><p>د ټولو فعالیتونو تفصیلي راپورونه او نظارت.</p></div>
</div>
</div>
</section>


<section class="demo-section">
<div class="container">
<div class="section-title">
<h2>سیستم جوړیشت</h2>
<p>زموږ سیستم یوه جوړیشت وګورئ</p>
</div>
<div class="demo-grid">
<div class="demo-box"><div class="demo-preview">📱</div><div class="demo-content"><h3>مشتری پوروپایل</h3><p>د مشتریانو لپاره آسان او کارپوه مرکز.</p></div></div>
<div class="demo-box"><div class="demo-preview">📊</div><div class="demo-content"><h3>ادارې دشبورډ</h3><p>د ادارې لپاره شه دشبورډ.</p></div></div>
<div class="demo-box"><div class="demo-preview">💵</div><div class="demo-content"><h3>بیل سیستم</h3><p>د بیل آسان او چټک سیستم.</p></div></div>
</div>
<div class="demo-button"><a href="features.html" class="btn btn-primary">جوړیشت وګورئ</a></div>
</div>
</section>


<section class="testimonials-section">
<div class="container">
<div class="section-title">
<h2>مشتریانو نظرونه</h2>
<p>زموږ مشتریانو تجربې</p>
</div>
<div class="testimonials-grid">
<div class="testimonial-card">
<p class="testimonial-text">دا سیستم زما د مخابراتي کارونو لپاره ډیره آسانه کړې. زه اوس ټول مشتریانو معلومات په آسانۍ سره سمبال کوم</p>
<div class="testimonial-author"><div class="author-avatar">👨‍🏫</div><div class="author-info"><h4>احمد خان</h4><p>مشتری</p></div></div>
</div>
<div class="testimonial-card">
<p class="testimonial-text">د بیل سیستم ډیره چټکه او منظمې. زه په آسانۍ سره فکتورې ایجاد کوم او تادیاتو تعقیب کوم.</p>
 <div class="testimonial-author"><div class="author-avatar">👨‍🏫</div><div class="author-info"><h4> محمدی</h4><p>مشتری</p></div></div>
</div>
<div class="testimonial-card">
<p class="testimonial-text">دا سیستم زموږ د شرکت لپاره ډیره ګټوره دی .او ټول خدماتو اتوماتیک او منظم شوي.</p>
<div class="testimonial-author"><div class="author-avatar">👨‍🏫</div><div class="author-info"><h4>محمد علی</h4><p>شرکت مدیر</p></div></div>
 </div>
</div>
</div>
</section>


<section class="faq-section">
<div class="container">
<div class="section-title">
 <h2>پوښتل شوي پوښتنې</h2>
 <p>د عامو پوښنو ځوابونه</p>
</div>
<div class="faq-list">
<div class="faq-item"><div class="faq-question">ایا زموږ معلومات خوندي دي؟</div><div class="faq-answer">هو، زموږ سیستم ټولو معلوماتو خوندي او کرپټ شوي ساتي. موږ د امنیت لپاره پرمختللي ټیکنالوژي کاروو.</div></div>
<div class="faq-item"><div class="faq-question">ایا زه کولای شم هر وخت بشپړ کړم؟</div><div class="faq-answer">هو، تاسو کولای شئ هر وخت خپل اشتراک بشپړ کړئ. هیڅ د درېځو یا جریمه نشته.</div></div>
<div class="faq-item"><div class="faq-question">ایا سیستم باور وړ دی؟</div><div class="faq-answer">هو، زموږ سیستم 99.9% د وخت فعالیت لري. موږ د 24/7 ملاتړ ټیم لرو.</div></div>
</div>
</div>
</section>


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
<a href="#">د اړیکې معلومات</a>
</div>
<div class="footer-section">
<h3>ټولې اړیکی</h3>
<div class="social-links">
<a href="#" class="Facebook"><img src="facebook.png" alt=""width="40px"></a>
<a href="#" class="Twitter"><img src="icons8-twitter-50.png" alt=""width="40px"></a>
<a href="#" class="Instagram"><img src="instagram.png" alt=""width="40px"></a>
<a href="#" class="LinkedIn"><img src="3d-linkedin-logo-icon-isolated-on-transparent-background-free-png.png" alt=""width="40px"></a>
</div>
</div>
<div class="footer-bottom">
<p>© 2026 د افغان وایرلس مخابراتي شرکت. ټول حقونه خوندي دي.</p>
</div>
</div>
</footer>
</footer>
</body>
</html>
