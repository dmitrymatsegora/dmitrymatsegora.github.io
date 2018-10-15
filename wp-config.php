<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'juvelirmir');

/** Имя пользователя MySQL */
define('DB_USER', 'juvelirmir');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'PY3uVCB5uqjq80c9');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.5W)M0 %C@-!dYx*CV9UrEEjrNR]<q<pK3XSk5,L[~QX@<a:mV;0aBj>h{u#M_vS');
define('SECURE_AUTH_KEY',  'p/L(hWG<^3Z%5U*eMY3I`tph#`tU.zr&{@9;RL$#M2f4|`+3UsO*XclKeW1-7mn*');
define('LOGGED_IN_KEY',    'f4U>m7o07Q2cc]&j?)PyKNW6=`)Rp>(1,ITGXrx1uY_CvI}PZ!4@YUEZ*. _QBt`');
define('NONCE_KEY',        'fSA_tX9|9%7 As[_f$fD?Es!hwn8xA@|4@.6lvk1]HZ;W!t;l_Xdrdzzs}|6C//q');
define('AUTH_SALT',        '.6T0)HpLL-_LuAySV`8D:ub#*}dJ/UI2(gMCT+U(HbY|{$sNS&&yU}w,QuNU@P.$');
define('SECURE_AUTH_SALT', '>C1^!h|pboq);&I5u%#fp+Dix.>aM/5Sk@teV^%*)B+<#SQpz;Y?j_w?~:lKbxll');
define('LOGGED_IN_SALT',   'sm, =i0<$>p#K) >3{UOSrR,Hs*VEO-nfj}hHk]q9BmFIfVc6uVJj:25|ci]:]8]');
define('NONCE_SALT',       'vs0+ky/P@eR$/,vYaeHa,^d)D(={;bK2<9u&[&s;ldEx@;zrgSAkJ%J+AjUYWm8W');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
