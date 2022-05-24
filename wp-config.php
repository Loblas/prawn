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
define( 'DB_NAME', 'oliversalbol_com_prawn' );

/** Database username */
define( 'DB_USER', 'oliversalbol_com_prawn' );

/** Database password */
define( 'DB_PASSWORD', 'oliversalbol123' );

/** Database hostname */
define( 'DB_HOST', 'oliversalbol.com.mysql' );

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
define( 'AUTH_KEY',         '>B}IrEQIC]gi).~+NQ6ENW%y,_`SGTVT(;W:IC$s!)69JAADVrqX[i<#,XeH-Z%O' );
define( 'SECURE_AUTH_KEY',  'nep#L#IUaTQ>BjlrLD]#`O6)CgtyB!T ( [ecP9`m^&&Ilfe,lX|noqy$w%MRNrd' );
define( 'LOGGED_IN_KEY',    't0YfEK2gl#3s*e#o!odHq]%oA_v/p.`oy%1to?9YlBejvNVo]d&4B#LMvjy QyYc' );
define( 'NONCE_KEY',        'WYn^vmq<N~a4KeN6`:>T$gtRC8Oy+}i,wqN{h fx|U:%R[sxFR;>>MN!l!<TFL<N' );
define( 'AUTH_SALT',        'XTh|(Qlzqs;bGFD+tLRy20d3s)a[.aHZXD0>;:xZ9#X(Hk15a)I*9jx|KX)`Df61' );
define( 'SECURE_AUTH_SALT', '[%h$#8P? yzXaZ95LA;}M;lh:6^.&g;>1Z W`u7/w$h%z/L>-mjFG<$K xj}}-PS' );
define( 'LOGGED_IN_SALT',   'PZMNFZBGFI~826EZZ0zVZnXUl~]LA)oJ|O7B|~]YsE`~N;*!pcW0RV]y{)O-)IqB' );
define( 'NONCE_SALT',       'aM(C?bpEwj98i@!Wxq&+21Zil.R?@3tJzE:}C!WraZs_ct~fcPFGC,<&-|0w/UJW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_prawn_';

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
