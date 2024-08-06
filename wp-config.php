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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naimur_theme' );

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
define( 'AUTH_KEY',         '}DSyRtK>:n~Z`WuHZG6&eKc#Q5RI<=S=#7jEOs4lyB[uPXrU6wBlal3Nqj*6mN;{' );
define( 'SECURE_AUTH_KEY',  'Qu)S8^A6+)x&p&eR [tK3]FRj}g)L`b]A=A1q,1.>)//<lUwavXfY;h&- iN(/AJ' );
define( 'LOGGED_IN_KEY',    '&4r,bs/<i2|92M<jq:!xNwe])afT7l01bmR3zXhmS(@CF52CuKiw^e:y:a4N:bYu' );
define( 'NONCE_KEY',        '9g9AsCo8+m]ty8aT@C|Rf_QF`Cxr;/%N;A|%}&=;UGb2-Bs`Q#nN Fo0@ ;ZZQ+.' );
define( 'AUTH_SALT',        '8SBU0.morkt7Ge)mT`51rK1M?!BH{QpRC(cat(8w~D<fe.hw%G&A:g~Z*2 {,pee' );
define( 'SECURE_AUTH_SALT', '4})@VfNn*-3d&08CV`>XlW7;m5ta-gQd*$*y[4_p$?GA}rMSEqvE731xdXc<(Wqd' );
define( 'LOGGED_IN_SALT',   '2f`).i=#KgO|H`zlD?.5p?Ba%gt0VTEP-fMU*m13If4(pd!e>{iN38K{rw6@MFM{' );
define( 'NONCE_SALT',       'Y]~b@L~7O) ^SDT9nGEMVKA p?`%CK{R`c^FD e#(o0K*[r$&_yw:& Ak;Y<p$_{' );

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
