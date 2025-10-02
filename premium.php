<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GX Bot - Premium</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .app-btn {
            width: 100px;
            height: 100px;
            border-radius: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            font-weight: bold;
            color: #fff;
            font-size: 0.9rem;
            transition: 0.3s;
        }
        .app-btn i {
            font-size: 2.2rem;
            margin-bottom: 8px;
        }
        .telegram {
            background-color: #0088cc;
        }
        .discord {
            background-color: #5865F2;
        }
        .app-btn:hover {
            transform: scale(1.1);
        }
    </style>
    <!-- أيقونات Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Premium Container -->
    <div class="premium-container">
        <div class="premium-header">
            <h1>⭐ GX Bot Premium</h1>
            <p style="color: #b9bbbe; font-size: 1.3rem;">احصل على ميزات إضافية حصرية</p>
        </div>

        <div class="pricing-cards">
            <!-- Free Plan -->
            <div class="pricing-card">
                <div class="plan-name">Free</div>
                <div class="plan-price">مجاني</div>
                <div class="plan-period">للأبد</div>
                <ul class="plan-features">
                    <li>دخول روم صوتي عادي</li>
                    <li>الميزات الأساسية للبوت</li>
                    <li>نظام تيكت وتقديمات عادي</li>
                    <li>نظام تقديمات واحد رولا او لرتبه بشكل تلقائي</li>
                </ul>
                <a href="#" class="btn-secondary">استخدم مجاناً</a>
            </div>

            <!-- Premium Plan -->
            <div class="pricing-card featured">
                <div class="plan-name">👑 Premium</div>
                <div class="plan-price">$3.00</div>
                <div class="plan-period">شهرياً</div>
                <ul class="plan-features">
                    <li>تحميل إيموجات للسيرفر من ملف</li>
                    <li>مسح جميع الإيموجات في السيرفر</li>
                    <li>حذف رولات أو رومات (فردي أو الكل معاً)</li>
                    <li>مراقبة الأعضاء بشكل كامل</li>
                    <li>ميزة عرض بانر عضو</li>
                    <li>فك باند عن جميع السيرفرات</li>
                    <li>نظام تيكت وتقديمات متطور</li>
                    <li>نظام جيف أوي احترافي</li>
                    <li>نظام تقديمات مع رولات تلقائية (إضافة/إزالة)</li>
                    <li>دخول روم صوتي تلقائي</li>
                    <li>جميع الأوامر محسّنة عن النسخة العادية</li>
                    <li>توسع أكبر ومزايا إضافية حصرية</li>
                </ul>
                <!-- أزرار التواصل -->
                <div class="contact-buttons">
                    <a href="https://t.me/AmrAyman97" class="app-btn telegram" target="_blank">
                        <i class="fab fa-telegram"></i>
                        تلجرام
                    </a>
                    <a href="https://discord.gg/g43V2Q62KP" class="app-btn discord" target="_blank">
                        <i class="fab fa-discord"></i>
                        ديسكورد
                    </a>
                </div>
            </div>
        </div>

        <div class="premium-benefits">
            <h2 class="section-title">لماذا Premium؟ 💎</h2>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">🎨</div>
                    <div class="benefit-title">تخصيص كامل</div>
                    <div class="benefit-desc">عدل كل شيء ليناسب سيرفرك</div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">🔒</div>
                    <div class="benefit-title">حماية متقدمة</div>
                    <div class="benefit-desc">أدوات حماية قوية ضد التهديدات</div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">📊</div>
                    <div class="benefit-title">إدارة شاملة</div>
                    <div class="benefit-desc">تحكم كامل في السيرفر</div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">⚡</div>
                    <div class="benefit-title">ميزات حصرية</div>
                    <div class="benefit-desc">وظائف لا تتوفر في النسخة المجانية</div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">🎭</div>
                    <div class="benefit-title">نظام متطور</div>
                    <div class="benefit-desc">تيكت وتقديمات وجيف احترافي</div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">💬</div>
                    <div class="benefit-title">دعم مميز</div>
                    <div class="benefit-desc">رد سريع من فريق الدعم</div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

</body>
</html>