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
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         'h*Lz}Z|v|ASUI;HxAk.ko=%-h|kN1t[Y84oAFT(+&!{VYUWf{X<qv;5EmpF_UoUq' );
define( 'SECURE_AUTH_KEY',  'm?ADT}x+))K|30StYqRl5K#?r]!Q$>eqoIQ>{nW[?CM/c=60z)@$_|37q]xN*7Zh' );
define( 'LOGGED_IN_KEY',    ' anD3@YVEbF]3,V4H1BARZ7R3`8RAhuw[A(O1KA TgAB5O~MV,(!qoBC|.N7G<|S' );
define( 'NONCE_KEY',        'N?L=@hBHw cjy03A&#I17v3#`a8@jalww9Qx@8tOn}#0D@DP>nk+F=MrTz63vgID' );
define( 'AUTH_SALT',        'y-x#Lp[G@Fxq?HEMGn_GRort?l{Y~F6/I-U1O*E*qKnMIP*O`6EW=YDDQeN8xv]Z' );
define( 'SECURE_AUTH_SALT', 'S_:d^l{U(&qbK37%x(u T%)]*3/PwniV+:BuX/w$U]v#YGYufkL<k*;QCKA{cTU7' );
define( 'LOGGED_IN_SALT',   'g|K)E@af,$^!jFG&;RBi$KPC#=#S^IAwfH5/A!2uT#)cM_W2/}QrM> G<bL?#<t^' );
define( 'NONCE_SALT',       'DR:!)9K614`32,|!Qng]+igel*bABE`?&}<O,s%2?XNxWMP1fXX_ltFS38SJ/^<?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ecom';

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
