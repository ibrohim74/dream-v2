<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'dream' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0Y6b5k }JDEmy}oK}tRzrHej$|)4~OM@R|nTf-<B.=As5*iI|xRT|KO>}Hi7k@MA' );
define( 'SECURE_AUTH_KEY',  '3uG)4Yp<Pgs}g<;K!48Z=2{`a`~[1K;16bdFlvttZf8t*_m)xKR-Z_v$1s[}B*{,' );
define( 'LOGGED_IN_KEY',    'b1}QXg7oWy+y4AvdlM4OU,Z)KaFPY*_,L$wXRsFOLGH?6fh-;~gf49z+ir>DSn~=' );
define( 'NONCE_KEY',        'h:?%E>VnE+6A^*)SJ^PqK?}{jy*c/>[F~wYy**m2?WzpizC60&=;DmuMrUu-F&6D' );
define( 'AUTH_SALT',        '08}Bt(dti<VYb|/DM{+vx)9ngV?1|dgPcND*^C9J xOPgaEV*o;3uIA;0]`R^f|V' );
define( 'SECURE_AUTH_SALT', 'r+pQo8,w%7>J;:]9P!KB,X>2:*GZK%?h`{I>=Yu .8w$JNB3$EJ&S[+3=n:C]_:Y' );
define( 'LOGGED_IN_SALT',   '8};sexb.n<36NQ2ioHMZzq_,#!hR_egMJoKw1$Fls{.M,R9%yNncL?S~UWVs3;E,' );
define( 'NONCE_SALT',       'in>2:ibe4a*!Azc8p:ry@W};/<2EsfS*lhsSPsy{2=];TiDMQF9@7vA[0B[l`odR' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
