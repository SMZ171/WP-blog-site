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
define( 'DB_NAME', 'membership' );

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
define( 'AUTH_KEY',         '0>U:}Hu9#@Tb<a`f!Gdmo+d#sQs~-Y.@$j:b^! Ecx5rVq@EQDP Yq$1Q76JHT:A' );
define( 'SECURE_AUTH_KEY',  'c,2((7R`pPX27}r]Ea(&$Da<yIuPri{>wg7&.p1c/XDb|b&eC&R03j1<0=R5<s|8' );
define( 'LOGGED_IN_KEY',    ']=ODH S!skG.MEEj 7N!{:0=!fxv%tM#`8SB)tzu4z$oQ]_m]? Lw6`Axm5vgon9' );
define( 'NONCE_KEY',        'jt`e?k9x59]fbgeI3<8M O,7/RrpN6o8 e#JCgxAVB NtcM2D&I,g&TDF^^o4B]s' );
define( 'AUTH_SALT',        'jlFTj)L84MwbDG@-8H)[|1?P8P0aoW@?#8Mm D#6l@=eNX18eP~{+)f~uu/4Yu_]' );
define( 'SECURE_AUTH_SALT', '{ 4cK?T+TS+MLgT~Vg[2E)<,>)uGFU/RCt9_sh{m*0=c,+iv:g})pN:w#iuB^qj<' );
define( 'LOGGED_IN_SALT',   'v5[QHV/RA#:|=L8;=X](KhHz-UU0*0,3U;zJ,s~.fMkL>c`vZz_[#Ng:Jz |V8OD' );
define( 'NONCE_SALT',       '+[nk^iy-e5r.EO;[7Fjv[pIkaqc@p T5_X%pf U,+}tDRntkjonA+jjFl< !9xib' );

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
