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
define( 'DB_NAME', 'afterschool' );

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
define('AUTH_KEY',         '<+4op$k<|>3*dSP{|iC1>rD6sdBe BuY+@r}}8F6`v%)s18|H+o#Ul-J,;=j]X/V');
define('SECURE_AUTH_KEY',  'C51|*{ooI7O_M$iM0GjsR!oI* ^Q4Dok!3+ZI5JkR*u}ypmPc<>[jBGaz+-|}L!H');
define('LOGGED_IN_KEY',    '[c#l4X&m59JSZ(;ym~Q8+0<]mlQDk8Mnb+F%r]<Eg8uN0:$^6~jnK3XE3iCSV}x!');
define('NONCE_KEY',        'Z2Zow^GN3P>nE=Cs-N)Iq/`e[yRA|i+)WUTIqo2i>9KY]-VjN-5JKIYAvM2VH-y&');
define('AUTH_SALT',        'keqj=([zgl~N,Fy7-xA_|vdD[`}P!-P0Uxy${P=bnO+dkpGo9UNIDDi~-_!#NSO2');
define('SECURE_AUTH_SALT', '<-qdlojYcbl+B3DGzw6OKCy0Z76:U]aB0HpqkHO:FrjKKA-4$RFUP.LcsZ[O-lZv');
define('LOGGED_IN_SALT',   '&WsC3ZL{&1cocV0([M+6&lASKgvw:/oB(p)3cy:`=nXgk>6xDAQ>2*Tde{>Q3ku;');
define('NONCE_SALT',       '{ =*V!+4RE1LajrcpF7._/u{hTNRCXz-A8]vooti]CA<o+})$;+Td~< wevHkp$h');

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
