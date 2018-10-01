<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define('DB_NAME', 'wordpress');

/** اسم مستخدم قاعدة البيانات */
define('DB_USER', 'root');

/** كلمة مرور قاعدة البيانات */
define('DB_PASSWORD', '');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8mb4');

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$$v~Zy$d&7tm0D(2:~kC1UgI%MZu:R&cp3+Vvj$n((sVUB`y({ZkH]ql~A4BW~#<');
define('SECURE_AUTH_KEY',  'sxH6x&&gL_,P$$*}mzCOm+~?u*[6n9A@XjzPS(Pl}7^!yrU]2=@-8@qR6^_eODVE');
define('LOGGED_IN_KEY',    'L)Q]A:NK+;/SYxKx?h|g|WpYva(8rIbtX]|;kJE_|*2==)H}44*[k7[MvcFYB^0^');
define('NONCE_KEY',        'igzuF@xjms^koSyQxt&<9T2wkq2Y[cS}0l#(h~G?.jmMG~:UL}y(i6m<[yp8|}Zo');
define('AUTH_SALT',        'j/]i&}Owqs^G$;zOQ?wR%30xCP+/rg1d!O+:]d{AZx@jk X#Z<k9+IByUp@h8tUB');
define('SECURE_AUTH_SALT', '>EjLKr4BorcPX6n+_!l._.%0h~>^>vgxJa4KhX=u6^<ickt:ti? =evFsFi5C9pU');
define('LOGGED_IN_SALT',   'Y3PpD0y13l* 2yKYwU8$CW,-VH)3W6)BW&<{!:l-2zGa,y>/jM2qz&1AJYjq#_Za');
define('NONCE_SALT',       '0RehJIcy+q.p.<#vW}=;E,G`BSr3+&C#,(+isj>QU7~R`bf.HG!:W^dzaiEoefpa');

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix  = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once(ABSPATH . 'wp-settings.php');