<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db1' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pwd' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jSi1>q#Kvy%NL7u6A-zVhs?-Ze|3q<e{(wPe+a1]GmKXOyy~4UTSt-nqTq!-%LV~');
define('SECURE_AUTH_KEY',  '.g3I~qNi^r+AvzmM4r9RszsF%}EFPPO-|-chhbxC!O^[9Dk.H2Yd.d?|`w@yU57-');
define('LOGGED_IN_KEY',    'NE%+6zM)_TXM[LCrsHaZx8e-38|f4Fy]cX5cJi,GKxDQ$b5%f8-2Fn-J~G|n,HF8');
define('NONCE_KEY',        ':+Dl+s68;2!)~j)UOV-5M&5iIH1W11>TRQRg,>N39`H3^M(MrxAHW>]6y3@1nN?p');
define('AUTH_SALT',        ':*=@4$h;[+gqez&R= Y[|oW*,+cXIWZ^;{uXnpG%^:hIaD,}dF|`Dm`Qh48f<R-}');
define('SECURE_AUTH_SALT', 'p^6UU*EW8Qb:ga`B`.t}VuC<GNVE(M&^(q#rFW(CjiAU*a+w:ir !h.Pd)63L/Q3');
define('LOGGED_IN_SALT',   '~EyJuaqXTY=z,p|Cm/<RBZaMKSvY.HMZ=50n&[~uG4E>LmFlPy=-VzM$kWm+|buY');
define('NONCE_SALT',       ']7xlPUkl;u#|3yQ25V4./{BrMi!DG|VZrRC>F@<)jFWB.x<0Zv!sRudxh]_%TJa3');

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );     


define('WP_CACHE', true);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
