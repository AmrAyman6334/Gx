<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GX Bot - الأوامر</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Commands Container -->
    <div class="commands-container">
        <h2 class="section-title">أوامر البوت 📝</h2>
        
        <div class="commands-category">
            <h3 class="category-title">🛡️ أوامر الإدارة</h3>
            <div class="commands-grid">
                <div class="command-card">
                    <div class="command-name">/ban</div>
                    <div class="command-desc">حظر عضو من السيرفر</div>
                    <div class="command-usage">/ban @user [reason]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/kick</div>
                    <div class="command-desc">طرد عضو من السيرفر</div>
                    <div class="command-usage">/kick @user [reason]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/mute</div>
                    <div class="command-desc">كتم عضو لمدة محددة</div>
                    <div class="command-usage">/mute @user [time]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/warn</div>
                    <div class="command-desc">إعطاء تحذير لعضو</div>
                    <div class="command-usage">/warn @user [reason]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/clear</div>
                    <div class="command-desc">مسح عدد من الرسائل</div>
                    <div class="command-usage">/clear [amount]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/role</div>
                    <div class="command-desc">إدارة رتب الأعضاء</div>
                    <div class="command-usage">/role @user @role</div>
                </div>
            </div>
        </div>

        <div class="commands-category">
            <h3 class="category-title">🎮 أوامر الألعاب</h3>
            <div class="commands-grid">
                <div class="command-card">
                    <div class="command-name">/trivia</div>
                    <div class="command-desc">ابدأ لعبة الأسئلة</div>
                    <div class="command-usage">/trivia [category]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/8ball</div>
                    <div class="command-desc">اسأل الكرة السحرية</div>
                    <div class="command-usage">/8ball [question]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/rps</div>
                    <div class="command-desc">لعبة حجر ورقة مقص</div>
                    <div class="command-usage">/rps [choice]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/coinflip</div>
                    <div class="command-desc">رمي العملة</div>
                    <div class="command-usage">/coinflip</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/guess</div>
                    <div class="command-desc">لعبة تخمين الرقم</div>
                    <div class="command-usage">/guess [number]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/roll</div>
                    <div class="command-desc">رمي النرد</div>
                    <div class="command-usage">/roll [sides]</div>
                </div>
            </div>
        </div>

        <div class="commands-category">
            <h3 class="category-title">ℹ️ أوامر المعلومات</h3>
            <div class="commands-grid">
                <div class="command-card">
                    <div class="command-name">/serverinfo</div>
                    <div class="command-desc">معلومات عن السيرفر</div>
                    <div class="command-usage">/serverinfo</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/userinfo</div>
                    <div class="command-desc">معلومات عن عضو</div>
                    <div class="command-usage">/userinfo [@user]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/help</div>
                    <div class="command-desc">قائمة المساعدة</div>
                    <div class="command-usage">/help [command]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/ping</div>
                    <div class="command-desc">سرعة استجابة البوت</div>
                    <div class="command-usage">/ping</div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>