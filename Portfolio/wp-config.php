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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '9aTlxWKc; dT]gj>n #bxzqK#$?i,h],~f<i@dHZyp?~0/MN`:`|9vY43u(,,xdT' );
define( 'SECURE_AUTH_KEY',  'KjrFJM|Uq0ibSN.{UX{p5@:gM.VXLPAAJGn8VGC1a$c-7h<zK1xG?2S>a<:| 2u8' );
define( 'LOGGED_IN_KEY',    'BNX*?&0V?-W;lE|EMa}M)Ul2Rs[X}oE=![0UV{:nk5p$-*[/P+q:,z_jZrH(g%%C' );
define( 'NONCE_KEY',        '[iTB,pHWoQHr`P*u4Ova.#G-o878oh2&Av/1owY5 jy3ZUOeG9U3ib`%OFh1Vi4e' );
define( 'AUTH_SALT',        '*6gLse7CaH9_Iij+rQ)T+O@_J][R.Jqo$dNxh_@5+QPv!S4fx~_q+5D=b2C9w`NK' );
define( 'SECURE_AUTH_SALT', 'M[iyxHi?XkB;u&|ZQF?T<E@rMg<t/h XXo&y~WV%]|Ap#!b,%Q?J4>pr!w|}q5oQ' );
define( 'LOGGED_IN_SALT',   'H;NH! KK*x0&@/^+/;H<aJpWlDI*#4x4wi!4w_<!jEFHV1_3PR2WC=-QuR8*7~NF' );
define( 'NONCE_SALT',       '&T.0!5m{fhp:RH@K2ttHc1p#5&$]CQX66.-er`h/;F`1]:}0AkV/Dq2u[ZdI^/cC' );

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
