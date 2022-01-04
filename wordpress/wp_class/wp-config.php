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
define( 'DB_NAME', 'wp_class' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '>s=.-:C9_I!!.7!:4v|D|Aoj6(*6MA|ZK|2c_}!|E^v&EIvmRFXW5/V#+t(|[|+s');
define('SECURE_AUTH_KEY',  'zLc-NjZLg|{I8r#HI h+rG)KUCZ+4h3^u+*?,J++6<{(i4zv/R9-Yc-ar(6?#xFj');
define('LOGGED_IN_KEY',    'xO#M)??Vd0UHvA0U)%3w|?swmfSbp0Gy~|Bl59B{|(FSq2sUP5Z|Kxah+G9@-E5[');
define('NONCE_KEY',        '}6i 2`+kc{I9q?yZ0X4oE8w3!8=lVbaDVHO*<#TfFBYyuyv6`OhNgGM$22whk`J:');
define('AUTH_SALT',        'bgH+7CqRrb^sHB|l|dJpdvx|is-NIm4Mt<s3~*#+N!c%1 ]lKNdW@|qTCOwYYx%)');
define('SECURE_AUTH_SALT', 'D8f&t61Xbpn*5[  {@)0+Nw&-YS^^*7aDUd.y0+K@V[w3A*, US<H7c8*`)~@~5T');
define('LOGGED_IN_SALT',   'd{/FD!!aM{.*71$?XxK43}hvc>C?DCyIz{8M>8TOC=&?{D;+8,=!Ws;-b:9K}L8X');
define('NONCE_SALT',       'ds}/a;$A@&@Xifj8F4ke#|}9D~Y[j+iVDY|raiPvv+[zm3K(iA4H;sG.T{?=+;mj');
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
define( 'WP_DEBUG', true );

define( 'WP_DEBUG_DISPLAY', true );

@ini_set('display_errors', 1);
@ini_set('error_reporting', E_ALL);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
