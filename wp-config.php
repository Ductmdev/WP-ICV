<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'indarec' );

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
define( 'AUTH_KEY',         '?;o<PNhm[T-| N,M^&rD%sI7W:n;?ol`F.$`lPEZRy%]&ULq0[:ewm>[g<xarzQb' );
define( 'SECURE_AUTH_KEY',  '#%PjR-@9 :>tNTeQ*AjE8}Lvu0.T-/?Fny};/;yT2w+g]T),]@|FE?Ad9o(iXLFq' );
define( 'LOGGED_IN_KEY',    '##,P=@-iHXhAY-%90*U_f:-Z.gl*oPm {P<`2+f.xk%K&g2w#(*x^]i?Sdy%tyG5' );
define( 'NONCE_KEY',        '3gsG:qd8#r*@oOpb>JN%405aBb ADi9nG<hb|WJV1 JRVv6DUhAE$%-SyN-U,Myb' );
define( 'AUTH_SALT',        ';w=;]oP3D?IZY,/|XP1r]L(/7+3-6y5L?X(kg&FcHn0CR661} Yg=L<is6F`v0xl' );
define( 'SECURE_AUTH_SALT', 'XW8q9b7Sf$&,VLah(An/B>bgA*v2?5/@1.Zei69qhGLKA;<E_O@@,&zy!4qg|5yw' );
define( 'LOGGED_IN_SALT',   'BuAVA3&:pWRPneJ]B.]_]QJ,?Q,1sgq8tQ}kmee}xHLewU~^d<.,MwM8*w7N:g2+' );
define( 'NONCE_SALT',       'dd9s<Q+ktEA/J^c[l*c|N)-F8CKFR}:c1kb)%Pcrf^Hrg2Osx4b]Z/|;M206[:]H' );

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
