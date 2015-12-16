<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */



define('DB_NAME', 'crowd');
//
///** MySQL database username */
define('DB_USER', 'root');
//
///** MySQL database password */
define('DB_PASSWORD', '');


//define('DB_NAME', 'crowdeyes');

/** MySQL database username */
//define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'UtlK&@#as@!&12');


/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8[T_58|_)H3<{h|:K*(U-zG?o?4n>6]tkI9dc[C,n@YAiReiK3*d,leq@d2d4Se.');
define('SECURE_AUTH_KEY',  '6{T`[g#M~/W)vRoz(XOA!n!U4jh0@D{k}9gMR9x+5+.{dcR{/uKH7!!a8;@Ddctx');
define('LOGGED_IN_KEY',    '|_mb7oX(+z/MQC&rtUd<QTR?-?^yw[m&<;,TC9o!e8L?+</]9We/}DBOaz/A:wsE');
define('NONCE_KEY',        '9&<h0xP[]qez!F-R<C{Xo86|j^+huyk/7A]Y?|}8d~]5i@4J^Ut)(9Ol35b)4L@]');
define('AUTH_SALT',        'q5F*+=NC}6PBXw+nJp2F1Cg/U|0gr)6b,++|5gGN52n?26(QZ%= $|dI!`C-oV4:');
define('SECURE_AUTH_SALT', ' g>[d%U;.*] |Ct{YO9B)^,>Xl9f)qy?5R+^&oh^hnD7Uhcxh|-W+y3MW2-51K|-');
define('LOGGED_IN_SALT',   'E}3yq]r<ryjN|*?lf|K)G$|[UUq#&~]?_|)7TZ^k+oUoJQpPN%,F;$?{^gIu:e}?');
define('NONCE_SALT',       'i8VAxvjffil_:>|qv1{(mV10(/4JrO}=R0s|Z^2j=B${3RX2(F{|A6~9B8VZdXM9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_cr_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

show_admin_bar( false );