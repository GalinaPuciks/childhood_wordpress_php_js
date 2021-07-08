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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '282861' );

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
define( 'AUTH_KEY',         'nRe.m~F yP4E6S*?8.cGGfuZ#g?mp==N^(1Ho{zuJptn]a0Z3^]46mS~E%7!{,i^' );
define( 'SECURE_AUTH_KEY',  'lOatb<^:HxPzZ~]k9&,vrvcUFGJ|?cv(M QR>WkR`.+D_$5!&>v|C]_& FueGX<R' );
define( 'LOGGED_IN_KEY',    'x]iT!(&5G=O8H0rh3iLRpE{XU(w^+1(CS}sRIS<a{gR8U@.v]g,0HwLQ?<DTKE}R' );
define( 'NONCE_KEY',        'u*6|<xxMWc,9T1G|.1_eyB%|}WJ&*5o0cMsGUdkjfM]dW_NTHIM4ZJoMo7BeU*`|' );
define( 'AUTH_SALT',        '!%8~UT@Pg(Y*ST$D*jz75 suBgV8/1?_.~+|jwcd9pEedFjx?O83P!:(Qzva]byY' );
define( 'SECURE_AUTH_SALT', 'FgxZgE]WsZY(,}*7c(|/z@]y+`-i<-`Aj;:6aLfS3SJCXou0%+/>OGZ@N_e&V}#n' );
define( 'LOGGED_IN_SALT',   '<xpn]^gYe:ewzID;OT~H&cW(flcDf3Q[0v/BCk,B5:7C]H7q|I>>[eCM4=!!g5Tv' );
define( 'NONCE_SALT',       'Y(3Qp2s w 5~CY)WaFj?~c$S]7guZJ*6I#}Ci08UT1x9XU F&3)>;QO-7a EnKPF' );

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
