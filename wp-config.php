<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'foody' );

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
define( 'AUTH_KEY',         'nX:]3 BwF_3/iG*DY)Na.$ublk{MuQp@B{k51hANS:SR)Kjdnr7H .5.iHi3N.[H' );
define( 'SECURE_AUTH_KEY',  'AZ *Cs%EE(Hi1,1/5HeS}Lp.g[ -|P97[K8?EF>7%A?8I3%Xn[fcqMCTIN=CB9G@' );
define( 'LOGGED_IN_KEY',    'o/g^oV(m&OS8llbj5U)`AlV{ <>^)J&N;n,lgY +MM.Jh,ORURce<G]{j/r_M@ux' );
define( 'NONCE_KEY',        'z|FIU(hhvG}VtmdTJOm(]@gYX-,xSIE4wm}Lt4W_b`y`+sZJQ}bg3_0C;.7cZC:u' );
define( 'AUTH_SALT',        'e!a-L?HN(HUB2B|C3e.cbj,AW9r}}z)}&UleKG#Ec@Jpsp;{v7Y*Ps^NC2q(f!f<' );
define( 'SECURE_AUTH_SALT', 'Ms07QOMav7UhXLNv[h.%>ckQ+knW9&rBuP_,_%4lEv,}DJ]dlZMb-Dh28%89C4+Z' );
define( 'LOGGED_IN_SALT',   '}jT=x^Yw^A0S<B}1T}+ifXy6^Bag6[)pw:.TeC:2p$|5E)Pq+?[OZQk#K}9y-d6y' );
define( 'NONCE_SALT',       '%Wz/T8*uqksX:/E.eZ<dpNVWfS`j d[*)RyxvYehDL:ef<wq}mV2Hfdum59V{p>d' );

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
