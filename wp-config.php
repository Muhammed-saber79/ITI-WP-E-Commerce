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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Iti#9634' );

/** Database hostname */
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
define( 'AUTH_KEY',         'm)}@`*Z4GN91+,YF%$td:$:=vC77WcJD/1[ a9]#ID|2Lf<N~/%:qt7$.-xI=}F&' );
define( 'SECURE_AUTH_KEY',  'z:fEY(#Bb*fr^8THWt1_IYL<s9:8X[R8~h(6oOCoFI={kVWn_WHJ1w^{2SJ5oB*x' );
define( 'LOGGED_IN_KEY',    '?)om69};;PIcb$DxCO2Xm1F[1>p*)ped>W(|XB/nwuy:}`8!GwxvsM@mtgy!!o|X' );
define( 'NONCE_KEY',        'e<b)F ={lx63yPWrwF1+hb(~pP=Fw1o9e_U.P*x-2SJ(mmLmnf8}pRriY.B5+ZbJ' );
define( 'AUTH_SALT',        'K#R$Tq<$v],mpJbgA9N> ctm4E>2An`Qqt*@=pL01~qBF0MO#D3CeDhlEa?(?)Am' );
define( 'SECURE_AUTH_SALT', '?R8#RM{YpJ`<g7aj&=%J&SO61n^o|k$lkf?!%sq&rYbzzjVU%>ZQl=):RAO>Do+%' );
define( 'LOGGED_IN_SALT',   '@4EqA.44A624T-!P&#kD;Hn_G$%S0>uhZ##%<||GXivvVp)6)*|xMpR$}o[(]#`)' );
define( 'NONCE_SALT',       'sb8i3o^bz]nXJTe3Ibx1EOE&}lu&!Bw&?L:u+-tf/}y-+? k|R6k.]cKQ7){a{;k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ec_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');