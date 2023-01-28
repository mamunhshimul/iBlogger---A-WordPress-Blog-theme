<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'writerPro2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Op88:(9k()%5DM+5g?*HjF_n!.~zanhE|wi_r,92-nr>`V(z3xMa{rY%v2IGNf9;' );
define( 'SECURE_AUTH_KEY',  'V BJh4oz`4Nxk?exJ_>hR{kpkyfZi~l13/m%IJAT##0L^]0{ru.G]W)70qHH{FU0' );
define( 'LOGGED_IN_KEY',    'G`=3k4AFP{o;-V`=U<O$a5H7cCH1jRcmGX@Z*l:SNQ,n+F|/OG+f^)j0+O]x][cR' );
define( 'NONCE_KEY',        '%+KdpyL7L/thGf1>Xk|yCJH?6m i.yB|q|YDx=?ZO6:D)l%& ah7{Nj4]sEOaZpd' );
define( 'AUTH_SALT',        'o%wCzOmlO_XE7G0h{})f6Oz->RXULaftk}^e71A/3yE@u27f?2S~cU3j.;=Fl8ae' );
define( 'SECURE_AUTH_SALT', 'B N:<!$;3~Am{PF1<oSP|E(#aDJ;h*[g7y~4n`5;1-;C7V5jBK2PvoCpX0d[H3oA' );
define( 'LOGGED_IN_SALT',   '1wN&m?w)Ind*YI{;eg{0U:o@qbK:y6![xmQ/{}q!R5.H%A-!CDaREU>#!T;{b-ji' );
define( 'NONCE_SALT',       '*Z=>H]2mAzoD&Fmw>DZE:6[;Q)&bG{}d%li@s|O|.myL]/E|M9]:20r`DI]TKLY ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
