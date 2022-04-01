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
 * * Настройки MySQL
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
define( 'DB_NAME', 'baikal' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ';PJ`Ki#;Rzk,K%*[q72g@ay96^I0[,e)ml!!,S?Us0 Yd9.yl@4}>?j:*_^2xQbE' );
define( 'SECURE_AUTH_KEY',  '5#}DVovW),cK#=e>/rieRzB!JpL%Gpc0&d[(Y{C]4K]P*q0C|9hv:$]+B7rrpK{&' );
define( 'LOGGED_IN_KEY',    'b%fWzsi*lub.%c>N5q!_e|]%y`e%s[t}oTFzn0RR?JLh!ZlFsCiF zX9KN3d&&D-' );
define( 'NONCE_KEY',        '`Q/E}2l`` I<(<% 3)[j7`>-QU%hultQD$x&RUz@&/autSx!+SaEy[dDwPo-p TP' );
define( 'AUTH_SALT',        '-=tDU0*i,-i5S)P>t1bwS`?>;ox|;o[q}z^PTJ.4%= F)>}{!{RW`<.R/*MqE[h2' );
define( 'SECURE_AUTH_SALT', '~Yoqv_w=HG? grIz>;;YlTx,r^vemXD/gLo ;veDL`ouG(-Ia[BIKfc4:xom9jZX' );
define( 'LOGGED_IN_SALT',   'Dj|`$j^@ TPzof*Zc8~w}os,<sN3<l_#@M ^$bBBKwRE(q:*tAhM%J1AkcV^3D_o' );
define( 'NONCE_SALT',       '=A^`kWv#B4K?U^&!H 8q2A@[_xrzejZGf)}W=JgKxh;)(=/E!39zV clT`d~ltgi' );

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
