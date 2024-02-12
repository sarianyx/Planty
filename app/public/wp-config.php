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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'RwuvwhPat+_-g|%~f^AtQ-%0y(pDFcUAJZ.ECf[x;$5a3wa{h&KY$>8CJRh*0}{(' );
define( 'SECURE_AUTH_KEY',   '#.MP?nfZ|(P8FK0*I_~B:U}[>))Jn@*TR_#(qf-soEl i!`3,w.#6h!?}xS$Mdx.' );
define( 'LOGGED_IN_KEY',     'ouUi7ROB1nAjl&qG`#5SJ7xI:^Z9SWbdG[aj6Pc|Z623zzL]h>D=317G+erqxkzw' );
define( 'NONCE_KEY',         'Vu[<:lqzzV.FCc@_hjHeo<1wzK{F7~rJ/p* U9B}bk6qVu8P&{k9pJf4YYbxSl(A' );
define( 'AUTH_SALT',         'S2;0% bQK>?l+.zsOEVRx,8$H`V4#^fQMY_*KEg&zp`]~xQ<p(!xR.xr^o{Y*EB$' );
define( 'SECURE_AUTH_SALT',  'd`B62w%glk3tkn,ud(&pK4;3+uKXbjK(z.:ym^!lx|9T1x)KP6V{8 12]l;ykg^n' );
define( 'LOGGED_IN_SALT',    'Wb,6&MdqM~HHPL+;kx%DSU}QcjbTKb|DgX+U~e1(3:<)$5h)p7hdm1q#l.@Z2rpE' );
define( 'NONCE_SALT',        'yC4C~qRG(U$HG)Wu}vV:H0_ l9Rp}5{2x7*^Z<?$a5M/l:jB)b<5fi|}-d,DL=X|' );
define( 'WP_CACHE_KEY_SALT', 'Al(b.NDOw8$]g2YM!`i8RJzg!{DQ`&a=QQ];x6{.4[v38EL4ZUG.(?jf{<5{] AK' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
