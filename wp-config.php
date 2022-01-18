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
define( 'DB_NAME', 'codesmasher' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '||0ed7%c#z1HsQYd;c+8)w>zJNW~P,6lg-BhszBhUk^%Zhx[a;mR,0^ah/O/*yf[' );
define( 'SECURE_AUTH_KEY',  'L.DZ:e4o;9w8AL<]uS;b5?_8s4WCaKNN~u#TIIT1/Uez{B`:1<;390U7Q>V,Qm[o' );
define( 'LOGGED_IN_KEY',    '+d!LdhzdY;8G%LYWwtf.-RAbzKU#ux;^O[1gRd-M0>q*zz1HV#+1j/.Ii*}6%z:u' );
define( 'NONCE_KEY',        '*9NGRQb/gh|12Kudo/_s@4_(k%s@DDo%q~c2<u]HP2d!79]%QhO(Hd;|~?jPA4)h' );
define( 'AUTH_SALT',        'ZVmedH^G_AN,sOL8_N5?*bk-gybpFZN#|~d6+tH{x?0/<gT#VV<Pv5Iv.f[:h;[s' );
define( 'SECURE_AUTH_SALT', '*H*$)d{*U}G25l.hUm!(_@3W~v=xI|03FqT^$6k=K{)p>?cyv6E*)W^Ma>|(@b~`' );
define( 'LOGGED_IN_SALT',   'V**P9SNG3o]*Yr$KE8PQ4;5Hm!CcDZ!U{F=1^Qq7|df7(m)UBqI=A7DS_ZmXKy)@' );
define( 'NONCE_SALT',       'L f:,y>4E$hGPv>bG9J.rOw*XaUy]XgX!d:{NGP-U4w}G*lS/Le^-v!8H/0!TH4L' );

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
