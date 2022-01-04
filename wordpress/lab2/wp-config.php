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
define( 'DB_NAME', 'chopshop' );

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
define('AUTH_KEY',         'T+#o~WWYBZ:*d|km|t9[PYJfWqx;WA,zqB`#}ff*<ve>7XG|y_]thjJu[|1(!b7<');
define('SECURE_AUTH_KEY',  'n#,Q>2TP7L)|-Oo8UsS#2E=AhGxt:O29?-1(jc!u3ONA1%0 63eI+0*1#+B#Pflc');
define('LOGGED_IN_KEY',    'OdqT>7<kIvSn-0+-5Ue,8IxuCKfa/v{6r4$dat}gv]Z[UJXda=tLE#f}xM6;-[0C');
define('NONCE_KEY',        '-+%i][aeze0S`&:il<%f?bp2rqkCJ=z+B/| Lz}S Ox 7e:9T4M4$Z|;2Iln<{-?');
define('AUTH_SALT',        'J7~@h3Ol0+1VZVueIvJ9#&-_(}hn,1x@.+yV5RePX]{[~6c-<3[88W 0,@|T+s+_');
define('SECURE_AUTH_SALT', '<(.?zN<?85Y:>fe6lgW(`5ab#;;c%9>Fc1|j!u6!~(^@VKmvB|d}Wym(J71}rV+5');
define('LOGGED_IN_SALT',   'lV4[VBiRxpCX6%dpdnQ( u,nBvEM2nA<p*w*|>a/>|}&O?`vuDxI=oRL&@#qj:KH');
define('NONCE_SALT',       'nSXuF+[0&G~Zz%Y-F-S-+8j&Nc>TadBr03420(N?j2/,+5]`hi3>bRsfLB8j)IB+');

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
