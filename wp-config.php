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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'interfaces' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'AP_@l3j0_2004' );

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
define( 'AUTH_KEY',         'L}IqL=UrIMA+2gz+(*pQT_f_y9#C$l!IbvLqoq<S7y*_8F9+Q@]Pg(lb,:git)bt' );
define( 'SECURE_AUTH_KEY',  'Vdi`1miavGxAxHK&$m)e:-1r?]jz4FWG>Q,$@ 0~nnFvDp9D~Q`W&Qe=-w+1]T<@' );
define( 'LOGGED_IN_KEY',    'i8M`V.Pc&g.=|v<Ohq3A>6NV%zu9ZRQYg/1<{<rmoaFLvg D+dNy|%mi-y)),5 I' );
define( 'NONCE_KEY',        '?ST[X0e@n#0z7b#>qAa0;vg @Rl%#Z_tZ)t$R{><>4wJd(s=-fO.MyZ3(?QTb=i?' );
define( 'AUTH_SALT',        '8v|84Y%g%4o6P~UYTp Fziq--~:aVRUR9~JK=XqP;fgW.X`oDP7,S,ISMB(U.g?O' );
define( 'SECURE_AUTH_SALT', 'EVTXia~@4DD-;P &Z`s3qMSRAqnR<Ll>:.Je46twlz&Z#2^`UiR!7111HE?4}#LQ' );
define( 'LOGGED_IN_SALT',   'G7LZ9SkNyBhodKQv5Ot`xKvEB=Bw;^aA.m|~CP_eY+)pP?ZhXR5$B,~v:SfQ)Il6' );
define( 'NONCE_SALT',       '2|{zQ_u*R9vp0s+!U;yEzPg=HKt>KHs&#O!)xg,wbpevby&.vcHWl^?N{C?IJ)1W' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
