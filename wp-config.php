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
define('DB_NAME', 'wpsl');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':XkYV+,NN-K@ai,CIWbI20p aA-Qg=vpX^H D&Kao6svx?%:Q(>0oQD>BBWx:o/v');
define('SECURE_AUTH_KEY',  'l$P2n`/$h1ZE#+CstT&[Y#B2U_~g/^Ixn5j5Cc`Pf(.2ft(KQI,/Ay!9eO^swp5C');
define('LOGGED_IN_KEY',    ']}B +Dj1|%@&;-L9(v]c D5h<6H8oCw4XsK.>(-tjNJ3w5qv}:M]5dz3iX;i%i4Z');
define('NONCE_KEY',        'D86i`7`+{-zKTX(L1%efLaGo}(@vUhpI.;$1go@)u&G94uxS6,O>|I*D&KP9S)O%');
define('AUTH_SALT',        'PAZ+]r.f07^8avYehZGdRz>7m>T%wyZ+wb!+>&(4+:3rbHHpr0(!tQd+G2sRZqXp');
define('SECURE_AUTH_SALT', ']Q)JJ t?!9]F7nU}j=DDh(j34hpcltcFyM=Ql~Dzn-n-yc[EL2jz2]JA*^WHWPo8');
define('LOGGED_IN_SALT',   '=(/Jwb&L4s?Ax1~mzd5e%4|z$McDA]9Hgpv1yC?$NTg J76q!D8rJ&,~d&[Ju}+.');
define('NONCE_SALT',       'M(cpyDlOPy%Ncl!jKo>:S$ ]=zhPKCGQ]c=>J#HQjS6<RKLdV_yIa+kfJB L!o.8');

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
