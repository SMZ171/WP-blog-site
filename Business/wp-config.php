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
define( 'DB_NAME', 'business' );

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
define( 'AUTH_KEY',         'e&N,}RJ-;Mi>Z(G071?],hdOr@>m^d8}j7b@V/&=B,H%WL7}M420KkWbf7*s.WVN' );
define( 'SECURE_AUTH_KEY',  '#iBP({xAl8wGTg.;(R0N[A7X#36>3$pZ]gC>&IU(Sh:2)=pC1gYGUMALpU`!|@pm' );
define( 'LOGGED_IN_KEY',    'dZl~#}@_5_z`lvj?qnx00S/w*#.c,f.xOwXQg;SfN[m8HYnEvCR!l9sPQ+9n4<[j' );
define( 'NONCE_KEY',        'GO/9>&+C-%&Z%gg;J5[^)XHB68(`}}d~WaG4@{DbUt^MTW&<CQX1|l*.Lr,}cB05' );
define( 'AUTH_SALT',        'oZl4Z([w{vo?Dk?E{x;S*bs:l64#Cx=7I[[PD70ZZo;kdm.7l2EJH)v&URzym+7n' );
define( 'SECURE_AUTH_SALT', 'xn%p+7cw,p`|hb*cO$J;gtYIo&fNW5XfpyD`=A8E/<el{].>qtWdldJIgxVGZh[Y' );
define( 'LOGGED_IN_SALT',   '^p|Vc?TalL%3nGu7*5>)wGppv=;!6=$0 `H?&B*zS1j*ch BzveDwwu3?eWW,s{p' );
define( 'NONCE_SALT',       'naLR./JCz}ag0FPs!T_%LEd:FgT,S619MeWX[boUx1q F//BAPr/ xy6qt&j@*XL' );

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
