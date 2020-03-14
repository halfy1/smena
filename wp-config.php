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
define( 'DB_NAME', 'smena-bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eUsSi)NkQ^{ ;mC-6t:&H;03{yXVws($^6~5-nRFPYJf@t$Op*I_ss90|iG&hvQx' );
define( 'SECURE_AUTH_KEY',  'Fbi/TWUEKGufK!3[eGeN1X#T1m6<DxL:j%%#4R2z)(P~mHY5qrOV?v--]UlM*zA>' );
define( 'LOGGED_IN_KEY',    '.&L4o28j4wD#u`HKNyi^4!<3m+yu7J:U#msTp~g<;La$^f<D0=Wk0VdHG_w|zMYz' );
define( 'NONCE_KEY',        'l<R{j}#c7hksTN(gW91x3VAj_e^]/pCL6$3ZIOA3%F*zF,4.x<x59LQv7XcP5j-6' );
define( 'AUTH_SALT',        'wp7Q-vT7j_l-|TF5kKoS1S?<O:a:&Ve{S~GP>sD]P@4eEHz;R|qro.ph^6fdN-IC' );
define( 'SECURE_AUTH_SALT', '[e%`F8oazdKVZ#z/x6vJt5XyF9rt`5bp/vS:jc*C-wmcUIx-TVoDjo(YNjg4TTQ>' );
define( 'LOGGED_IN_SALT',   '/MS]6u8qPkp zN%;23*~,8rFx*ejF5MMA[aAXQwS<OWD~GTg g%S[<OPL$!m7*0i' );
define( 'NONCE_SALT',       ']UXH3duObDgF9a)ORn;!OPpHOF),:lN;*(bkbK*Lc4H+7x!u@,cQcB$A(_K>V%vd' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
