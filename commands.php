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
            <h3 class="category-title">📋 الأوامر العامة</h3>
            <div class="commands-grid">
                <div class="command-card">
                    <div class="command-name">/quran</div>
                    <div class="command-desc">تشغيل أو إيقاف تلاوة القرآن الكريم.</div>
                    <div class="command-usage">/quran</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/vote </div>
                    <div class="command-desc">التصويت للبوت على Top.gg.</div>
                    <div class="command-usage">/vote</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/server</div>
                    <div class="command-desc">عرض إحصائيات وخصائص السيرفر.</div>
                    <div class="command-usage">/server</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/verify</div>
                    <div class="command-desc">قدّم طلب توثيق حسابك في البوت .</div>
                    <div class="command-usage">/verify</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/bot</div>
                    <div class="command-desc">معلومات وروابط البوت.</div>
                    <div class="command-usage">/bot</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/gxhup</div>
                    <div class="command-desc"> الشبكة العالميه عبر السيرفرات .</div>
                    <div class="command-usage">/gxhup</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/owner_bot</div>
                    <div class="command-desc">معلومات حول مالك البوت.</div>
                    <div class="command-usage">/owner_bot</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/lnformation</div>
                    <div class="command-desc">عرض معلوماتك داخل السيرفر.</div>
                    <div class="command-usage">/lnformation</div>
                </div>
            </div>
        </div>
        <div class="commands-category">
            <h3 class="category-title">🛠️ إدارة الأعضاء</h3>
            <div class="commands-grid">
                <div class="command-card">
                    <div class="command-name">/warn</div>
                    <div class="command-desc">تحذير عضو.</div>
                    <div class="command-usage">/warn [username] [reason]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/warnings</div>
                    <div class="command-desc">عرض تحذيرات عضو.</div>
                    <div class="command-usage">/warnings [username]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/remove_warnings</div>
                    <div class="command-desc">حذف تحذير</div>
                    <div class="command-usage">/warn [username] [number of warn]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/ban</div>
                    <div class="command-desc">حظر عضو.</div>
                    <div class="command-usage">/ban [username]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/unban</div>
                    <div class="command-desc">إلغاء حظر عضو.</div>
                    <div class="command-usage">/unban [username]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/kick</div>
                    <div class="command-desc">طرد عضو.</div>
                    <div class="command-usage">/kick [username]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/mute</div>
                    <div class="command-desc">كتم عضو.</div>
                    <div class="command-usage">/mute [username] [time]</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/timeout</div>
                    <div class="command-desc">تايم أوت</div>
                    <div class="command-usage">/timeout [username] [time] [reason]</div>
                </div>
                  <div class="command-card">
                    <div class="command-name">/role</div>
                    <div class="command-desc">إعطاء أو إزالة رتبة.</div>
                    <div class="command-usage">/role [username] [role] [give/remove]</div>
                  </div>
                  <div class="command-card">
                    <div class="command-name">/give_role</div>
                    <div class="command-desc">إعطاء رتبة للجميع.</div>
                    <div class="command-usage">/give_role [role]</div>
                  </div>
                     <div class="command-card">
                    <div class="command-name">/remove_role</div>
                    <div class="command-desc">إزالة رتبة من الجميع.</div>
                    <div class="command-usage">/remove_role [role]</div>
                  </div>

        </div>
        <div class="commands-category">
            <h3 class="category-title">🔐 التحكم في الرومات</h3>
            <div class="commands-grid">
                <div class="command-card">
                    <div class="command-name">/lock</div>
                    <div class="command-desc">قفل الروم الحالي.</div>
                    <div class="command-usage">/lock</div>
                </div>
                <div class="command-card">
                    <div class="command-name">/unlock</div>
                    <div class="command-desc">فتح الروم.</div>
                    <div class="command-usage">/unlock</div>
                </div>
                    <div class="command-card">
                    <div class="command-name">/clear</div>
                    <div class="command-desc"> مسح رسائل.</div>
                    <div class="command-usage">/clear</div>
                    </div>
                 <div class="command-card">
                    <div class="command-name">/block_room</div>
                    <div class="command-desc"> منع أوامر البوت.</div>
                    <div class="command-usage">/block_room [room] [type] [condition]</div>
                    </div>
                    <div class="command-card">
                        <div class="command-name">/Hide_rooms</div>
                        <div class="command-desc">إخفاء كل الرومات.</div>
                        <div class="command-usage">/Hide_rooms</div>
                    </div>
                    <div class="command-card">
                        <div class="command-name">/Show_rooms</div>
                        <div class="command-desc">إظهار كل الرومات.</div>
                        <div class="command-usage">/Show_rooms</div>
                    </div>
                    <div class="command-card">
                        <div class="command-name">/allow_links</div>
                        <div class="command-desc">السماح بالروابط.</div>
                        <div class="command-usage">/allow_links [room]</div>
                    </div>
                    <div class="command-card">
                        <div class="command-name">/block_links</div>
                        <div class="command-desc">منع الروابط.</div>
                        <div class="command-usage">/block_links [room]</div>
                    </div>
            </div>
        </div>
        <div class="commands-category">
            <h3 class="category-title">⚙️ إعدادات متقدمة</h3>
            <div class="commands-grid">
                
              <!-- عادي -->
                <div class="command-card">
                <div class="command-name">/registration_panel</div>
                <div class="command-desc">لوحة تسجيل الإدارة</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/general_reply</div>
                <div class="command-desc">إعداد الرد التلقائي في روم محدد</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/setup_welcome</div>
                <div class="command-desc">تفعيل نظام الترحيب بالمنضمين</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/setup_suggestions</div>
                <div class="command-desc">تعيين روم خاص للاقتراحات</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/suggest</div>
                <div class="command-desc">إرسال اقتراح إلى روم الاقتراحات</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/aliases</div>
                <div class="command-desc">تعيين اختصار للأوامر</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/show_aliases</div>
                <div class="command-desc">عرض جميع الاختصارات</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/auto_reply</div>
                <div class="command-desc">إضافة رد تلقائي مخصص</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/ticket_points</div>
                <div class="command-desc">عرض نقاط تجميع التذاكر</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/setup_teckit</div>
                <div class="command-desc">إعداد وإرسال رسالة التذاكر</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/auto_reply_remove</div>
                <div class="command-desc">حذف رد تلقائي مضاف مسبقًا</div>
                <div class="command-usage"></div>
                </div>

                <!-- برايم -->
                <div class="command-card">
                <div class="command-name">/log</div>
                <div class="command-desc">🔹 (برايم) تفعيل نظام اللوج لمتابعة الأحداث</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/remove</div>
                <div class="command-desc">🔹 (برايم) حذف جميع الرومات والرولات من السيرفر</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/stop_log</div>
                <div class="command-desc">🔹 (برايم) إيقاف عمل نظام اللوج</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/log_deleted</div>
                <div class="command-desc">🔹 (برايم) تفعيل لوج لمتابعة الرسائل المحذوفة</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/invite_logs</div>
                <div class="command-desc">🔹 (برايم) تتبع جميع الدعوات وإنشائها</div>
                <div class="command-usage"></div>
                </div>

                <div class="command-card">
                <div class="command-name">/remove_invites</div>
                <div class="command-desc">🔹 (برايم) تصفير وحذف كل الدعوات الموجودة بالسيرفر</div>
                <div class="command-usage"></div>
                </div>
            </div>
        </div>
        <div class="commands-category">
            <h3 class="category-title">📋 الأوامر العامة</h3>
            <div class="commands-grid">
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
            </div>
        </div>
        <div class="commands-category">
            <h3 class="category-title">📋 الأوامر العامة</h3>
            <div class="commands-grid">
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
            </div>
        </div>
        <div class="commands-category">
            <h3 class="category-title">📋 الأوامر العامة</h3>
            <div class="commands-grid">
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
            </div>
        </div>
        <div class="commands-category">
            <h3 class="category-title">📋 الأوامر العامة</h3>
            <div class="commands-grid">
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
                <div class="command-card">
                    <div class="command-name"></div>
                    <div class="command-desc"></div>
                    <div class="command-usage"></div>
                </div>
            </div>
        </div>

    </di>

    <?php include 'footer.php'; ?>
</body>
</html>