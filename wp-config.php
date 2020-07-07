<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if( $_SERVER['HTTP_HOST'] == 'localhost' ) {
	define( 'DB_NAME', 'timegiven' );
	define( 'DB_USER', 'zollex' );
	define( 'DB_PASSWORD', 'dimasdimas' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'vhost43608s8' );
	define( 'DB_USER', 'vhost43608s8' );
	define( 'DB_PASSWORD', 'T1r5D04w2cKRgCd7uikwfcn82t2zfp422P' );
	define( 'DB_HOST', 'localhost' );
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X|U*q<G`MRF))^;^KIgA-,eK=~AkkkMOjO;y.u_N_6]}%Lra+,(nnKRse|/Uw|51' );
define( 'SECURE_AUTH_KEY',  'RMxe{I0_g%TC]iaB)i#2+5^0:Z]H#$ZjpGWlbb0gAP-~>p*`kp* Ltk#8l>8@Ojo' );
define( 'LOGGED_IN_KEY',    ':A4w-~.,2-bq,gB5sQPA]{eg*#Ue-((}GxR0MO}8p;j+QJ&li0@b7k)yf;9ao?j:' );
define( 'NONCE_KEY',        '<x<h_u).Gk~f#Jl&((k_W{:(`6ukku]n:BC3M{gqrI]AcJ]JInUe#EPgMX9UJAHn' );
define( 'AUTH_SALT',        'wOD{pd4}0D9B 0+@ =efWc=FMgXq`T^jf%a+MF ;=)Ok.~]58PA^3lfVtFmx=EjW' );
define( 'SECURE_AUTH_SALT', '$#TtQ1fnI*EIrse2z/z{}LfRXv@}a#Wr; =u:{%eH{B`<c*pWs@zVV;2BTr~~;#X' );
define( 'LOGGED_IN_SALT',   '##&p7AW)#!Jn!3o~ev#f|$eh]zX*uoSPC!0Zh.7Nbnq7~* Z8V`j~*Q)@?HSvNZ>' );
define( 'NONCE_SALT',       'Kh=;twdEW9]Sik:<+~/3{%0Dwb]{RL:qILXuRv1=o]L>E,K!2aH5LV:)qj~&$Y/q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
