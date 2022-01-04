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
define( 'DB_NAME', 'wp_assignment2' );

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
define('AUTH_KEY',         't=^_rp7>S1A3;zD.x8%Iw-NvR0/0wsg<aj9d/81pYB-u1C BAZ0Q~sNA:0MXVx`B');
define('SECURE_AUTH_KEY',  '-4?$pz>_]b6/}@t*ZVlx+[G]cmM`^b}yS@{LGMv9(0Y:WlD?P?KLH9K(h1UFR|uf');
define('LOGGED_IN_KEY',    '|u-LmbAz4-iy:,enmAw@)DoY$$ =>wVC*P`3Z5m<%1xw*pD7Cctm)eC6:SGGl9V,');
define('NONCE_KEY',        'Hn;k#*rvg+-0(ypyuuH316.$1qMC,{I%l_4@r<g:}]>gY&r(OQgqN?B*paiaMys?');
define('AUTH_SALT',        '{rA/5t%-A7duA|^z_VB9H<S^~4Omfa$OXEg=(WlO9Uwc)[8Yx5jkB6;H]!=SsUYt');
define('SECURE_AUTH_SALT', '.vu<WHvsS}|T49]re[2UQ_^Un}T!5dxb947F+1-F:Z)-}up1ONRoFrIg*+Hm[w_a');
define('LOGGED_IN_SALT',   'AJ&9:$e-i>^9g]Y-0u!t>-P(5XdDe!Ey}UWUX>^1lv1&UIc;,?}P6?SpQ&2Sv+nV');
define('NONCE_SALT',       'i49uUBhs|xe&]I5ach#)wm^GTD0n,iC7Z59ME X_}NlLcXrn`3sT0JtT@SG#jc.2');

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
