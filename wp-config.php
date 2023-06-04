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
define( 'DB_NAME', 'mk_db' );

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
define( 'AUTH_KEY',         '<fzj{nc7a~x%23^`[)EqO-wlC=LZ{IvIpb>[YqaT&ti-<HIFjFT-1O85N;zVvST^' );
define( 'SECURE_AUTH_KEY',  'd&++nv )p50zj&CeW D;kG{ux/Aap$O=[:v)qRJjo <p$s3%K|=CUmz&If!Kn8`A' );
define( 'LOGGED_IN_KEY',    ' ,;;9loK!lLZt Z%ePVY~NrAdm;C$eooxJ6/Z=DNt+._=PCB?Vgy9?PXV2W1dW!5' );
define( 'NONCE_KEY',        ' ?mM#NxmbbBEdXg=g3s?x[H^&O62f3$2N]2[v,0!4fyvGR/=<<9g_WbmX`h/.[8R' );
define( 'AUTH_SALT',        '<?[XZ v<L|QAK):>fozdi6yLn1CB*_:@SgG{z0D4[|LmcFi,-O}m#WpBw]D0h2[t' );
define( 'SECURE_AUTH_SALT', '?dbOe<RsJs#``E/S@nvK_hWgz$4R*Wb5%BCUEIc  MMgxbrP-8A5Y8[I8~4ydnhH' );
define( 'LOGGED_IN_SALT',   'SOK_F<{R#0Jl1uz,-@!A+qeQt;p>VqC5z,r<|lyfi/d#B;EjlMbwt]IDh&1L(Q[*' );
define( 'NONCE_SALT',       'L1sR4p|ZnI7=j<3f]#g|VBxg@GlkQK:w$r+sF<P`2WT;cgN?-SZ7<WQ?EaM  {Bz' );

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
