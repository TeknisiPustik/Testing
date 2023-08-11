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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'EGpUZDYc5VkDdG' );

/** Database username */
define( 'DB_USER', 'EGpUZDYc5VkDdG' );

/** Database password */
define( 'DB_PASSWORD', 'RKK0YSS5pJoHMs' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          'V&h Qk8qE$q7sN%cF1dZmjWc9Mv$M6k{]{jlIK<UR!_oG w}>cCKZ9wEkEbjPTf8' );
define( 'SECURE_AUTH_KEY',   'Xuev*~hz2JikWHK=)WRMv0J4Wsu](;2G_6fe,ffi}f1Z 17Fwv]Ld#-@[[1P.hGm' );
define( 'LOGGED_IN_KEY',     '.u^I#Sy%VR[6T;3V8&E^zZ0|tlyW6b73jxr_l-u+akI_yr(51#/D6zbf>1E W>,N' );
define( 'NONCE_KEY',         'dVHmr@zO.MFmL&X$% SwM@%A(d]!$SkCcfMe72VuU;LmZICu.v$ 8$$]${pMY|/C' );
define( 'AUTH_SALT',         'c9b5Nrne_!ke_J}W>j(4;`14Z7;``SEozB[_0xR<EYWm>]3^c!8JwBU=H>sy$Kph' );
define( 'SECURE_AUTH_SALT',  'lPLF~3l$x^%[R{C*d*;vW]sS4dgDO@sWzE-A)`hxF&%bE #D.xp7:fcLA.X9#U+I' );
define( 'LOGGED_IN_SALT',    'yKHy!2X_dO3/2:lZDU]ly5tBgs~d>ptm8?(;l zfGF!t7;V3OUm=`A<a;yxVFa6^' );
define( 'NONCE_SALT',        'GGJ7rVR(6zmyE3*L=c%2QU$,},`S*7LTT> 8!26Q,aBMYG.TkuV=v!v{_e@-J$|a' );
define( 'WP_CACHE_KEY_SALT', 'DlBD3m$/zaO90R{@6F0EF<b[F:BF]J%/W(d`$JJsj8H$9](AsU xZc&ABTOM2.T7' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
