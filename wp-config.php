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
define( 'DB_NAME', 'gimnasio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9caY>l&&u7J.ofnJ4Ntxk8FFv[5Pnwk:;F!.aIX1^WTy&=XZSi,lc-<53Cu/<u;:' );
define( 'SECURE_AUTH_KEY',  'axU _Z~v2H$3^/UFV.TEduPKSm<7hqT.bq[,7~LMy6>#Zx0n%Sn(:h02KjJiuYt>' );
define( 'LOGGED_IN_KEY',    'Ucww(.2CZQIn8XR:-t.Etv~brY^}HNV_&j1drh@X0O;E<k%m&7}J]k@[MD.bpH<D' );
define( 'NONCE_KEY',        'u02CTz*[8-n|fNyoqMzK%{1LY14nj<#e5qrQ&r}gn5@Dzha5HyMv~*7qMpY,iF91' );
define( 'AUTH_SALT',        '`;oukJEj+L9|bi^Qr1XwQ,q,S.~0)pK6[?Z~tj<CSw<F,OrTw23tJ2suNQ>BH;t@' );
define( 'SECURE_AUTH_SALT', '|F-jum8K:5ms[|jx<7k=Ie2^bDklBT>zKPQ}|r:};=rYxxUF~G4Xy!a+Mz%~AW[&' );
define( 'LOGGED_IN_SALT',   'y8%H,gMIl^8qo)of6{XF,XS0p{{qL.kAw]?!(J&t-@EaMp87sCB0T2kJ2UTd~t3)' );
define( 'NONCE_SALT',       'zAw<Mt`d6NhC9xU _1`j3Y)gM9g.yF1N]7@p~m|s?qb+5~5okU+%I<C#R_]kzyoG' );

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
