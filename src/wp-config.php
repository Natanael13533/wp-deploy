<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

 // ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** redis */
define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

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
define( 'AUTH_KEY',         'X]T-K4uQJft`3a-Rpz=+n}v/.>BZ: 2uA$_`AkrQa4Yyi3OTq*C/vVVD4i}?GO1B' );
define( 'SECURE_AUTH_KEY',  '0]<l_zvWC6/2fX67(Q/[g-b.s1IXpa( mO);35;>1+Wk#23LuCj].T>~o0i?MT/g' );
define( 'LOGGED_IN_KEY',    ';$8RiU+!`1l14+gu]J/T$i:#5N6TQ{{ udF4Kn .KAH+yC,_G8uDq 841h4cjYf9' );
define( 'NONCE_KEY',        'TBikT#OovO1f+$1Ucz$rxSe@vF.Mb4 wL*2EN}eT$oh^+wXmMYgVLOpR1dt%#Ri4' );
define( 'AUTH_SALT',        'r!x%4MFi*ByPW~wIT%BH*ci>mX+(U+~N/>#FH#[x3ckoV _U7VLfOFj)qm?!kd`z' );
define( 'SECURE_AUTH_SALT', 'QuK%HQZmP^4A$YO~X8>? JVO&ih1X%|?KxMFXlM3Y.c}&mb?6{u%G_n2,IrLf6EV' );
define( 'LOGGED_IN_SALT',   '=M,U#-%T~pN<WC ``i*(-85T2^T0a~D~-Xm*iT+W]6^3+Wm+gGz,$/gU R$O>&r$' );
define( 'NONCE_SALT',       '}vB#2B.TJDo>:#W>3Jq0TC6`8rmHa_BW5juH^;-s*,u j2IY<v,)qU|K:<)]|HC8' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/** Menghindari ftp */
define( 'FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
