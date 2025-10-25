<?php
// ============================
// 📦 Telegram Data Fetcher (with Local Cache)
// ============================

// ✅ إعدادات التوكن ومعرّف القناة
$bot_token = "8349100596:AAHZRZhhEMPk1ceORPPHMQmxb17gk8LQPas"; 
$chat_id   = "-1002624931196"; 

// 📁 مسار النسخة المحلية المؤقتة
$cache_file = __DIR__ . "/cache_data.json";

// 🧩 متغير مؤقت لتخزين معرف آخر ملف
$file_id = "";

// ============================
// 🚀 الخطوة 1: جلب آخر رسالة تحتوي على ملف من القناة
// ============================
$url_updates = "https://api.telegram.org/bot$bot_token/getUpdates?limit=1";
$response = @file_get_contents($url_updates);

if (!$response) {
    // ❌ فشل الاتصال بـ Telegram API → نرجع نسخة محلية لو موجودة
    if (file_exists($cache_file)) {
        header('Content-Type: application/json; charset=utf-8');
        echo file_get_contents($cache_file);
        exit;
    } else {
        echo json_encode(["error" => "فشل الاتصال بـ Telegram API ولا توجد نسخة محلية."]);
        exit;
    }
}

$updates = json_decode($response, true);

if (isset($updates['result'][0]['message']['document']['file_id'])) {
    $file_id = $updates['result'][0]['message']['document']['file_id'];
} else {
    // ❌ لا يوجد ملف في القناة
    if (file_exists($cache_file)) {
        header('Content-Type: application/json; charset=utf-8');
        echo file_get_contents($cache_file);
        exit;
    } else {
        echo json_encode(["error" => "لم يتم العثور على ملف مرفق في القناة."]);
        exit;
    }
}

// ============================
// 📂 الخطوة 2: جلب مسار الملف من Telegram API
// ============================
$get_path = @file_get_contents("https://api.telegram.org/bot$bot_token/getFile?file_id=$file_id");

if (!$get_path) {
    if (file_exists($cache_file)) {
        header('Content-Type: application/json; charset=utf-8');
        echo file_get_contents($cache_file);
        exit;
    } else {
        echo json_encode(["error" => "تعذر الاتصال بخدمة getFile من تليجرام."]);
        exit;
    }
}

$get_path = json_decode($get_path, true);

if (!isset($get_path['result']['file_path'])) {
    if (file_exists($cache_file)) {
        header('Content-Type: application/json; charset=utf-8');
        echo file_get_contents($cache_file);
        exit;
    } else {
        echo json_encode(["error" => "لم يتم العثور على مسار الملف في نتيجة Telegram API."]);
        exit;
    }
}

$file_path = $get_path['result']['file_path'];
$file_url  = "https://api.telegram.org/file/bot$bot_token/$file_path";

// ============================
// 📥 الخطوة 3: تحميل محتوى الملف (data.json)
// ============================
$data = @file_get_contents($file_url);

if (!$data) {
    // ❌ إذا فشل التحميل من Telegram → استخدم النسخة المحلية
    if (file_exists($cache_file)) {
        header('Content-Type: application/json; charset=utf-8');
        echo file_get_contents($cache_file);
        exit;
    } else {
        echo json_encode(["error" => "تعذر تحميل الملف من خوادم Telegram ولا توجد نسخة احتياطية."]);
        exit;
    }
}

// ============================
// 💾 الخطوة 4: حفظ نسخة احتياطية محلياً
// ============================
file_put_contents($cache_file, $data);

// ============================
// 📤 الخطوة 5: إرسال المحتوى كـ JSON للمتصفح
// ============================
header('Content-Type: application/json; charset=utf-8');
echo $data;
?>