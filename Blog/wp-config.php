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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[PjON@$^KT<~UiQA;TL*/:(m9#v2SFt/vDJzMn~{vg5XKcsIXJyG4T(5vG<+83/Y' );
define( 'SECURE_AUTH_KEY',  't2ZU+<F-mZ[sFDwPPuGvhQu7@/x^/kQ{q6<Kr;;Tqj4QN7FYx]`G5o97}1%anAH2' );
define( 'LOGGED_IN_KEY',    '!g*sI@m{?azqBAh}~KDku)+8s?nZGWz(PpEqXtA>F(0njTi[i;@[NgC4sdf`uytb' );
define( 'NONCE_KEY',        '1M5&5B9/BlJ!hF!-cc!z@X7,_} p2%o<Wl7OYL<$hCo%`N?!~-33&y!y~wdf[3Bt' );
define( 'AUTH_SALT',        '$v<2d3*#TW:Lwe>p_ 7,MuF&l@co<~#KlxsLO?7%2;rXx~hC{pOq59Rg4r;F/dH:' );
define( 'SECURE_AUTH_SALT', '2a[+f*2G.1 :qh8ZRERVimy!4J$^/bzGhB~),vlFG@Ht(#H[TErY}qf/|/&#p]W4' );
define( 'LOGGED_IN_SALT',   ':# <!FL{JazPa%nIprE>|COXQM<pSC/?WY$Dm7@y_3XXgkoOT5#KNwPz@4%j9pw#' );
define( 'NONCE_SALT',       ';!8~TBd,Sc9HtkJ%e(f%)UnTvvfL3uREA,zct8ztZPUz*7~D)?$8wC&%BS4 ]8Je' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
