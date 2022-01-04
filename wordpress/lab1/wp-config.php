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
define( 'DB_NAME', 'lab1' );

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
define('AUTH_KEY',         'x3)O1eXl|a=>R=SQ|%*`B$u2B(rh5VFLNG7O$M;X:}D7.?n/6>+`_!_Xxw?:&Sry');
define('SECURE_AUTH_KEY',  'QnZ78u]-;UuY &^`.FL{P.a;!NNi_W9/:g.>LOK~i!jr0TL|]8&U?9`t.9v~-e &');
define('LOGGED_IN_KEY',    'uqEG-6>Efh<EYYI(`%7X{!pxtTqo?|[U+lfc`[%Mkf|W76~+dON/ELz1I?*p=M!?');
define('NONCE_KEY',        '+[*nk4`!]2g$&<Z]LDmT-$4+OMd<=U!24EF+@Uj+--hn|Lf0+I]u|(?O|<LoG/Gu');
define('AUTH_SALT',        '3-}1=b,;Jv*X?!s0(YtQKe)W4~e6IjCRxe)D3]mCEVh<Q^|9{,P|/l[i}gq-0e6_');
define('SECURE_AUTH_SALT', '%-k(Jf$`j*id-hq}Ai##v2O?x|QDn4i;e!Qf}W$`9l-uP)5bMRVZf%>>OA-/FF]y');
define('LOGGED_IN_SALT',   '`j+Yz&zMSQJ]P-<AGi{kOU/gk?.^2h`TJ<lD5aVoSh}r{Ce!Y2-#G7r7*5s~D_J|');
define('NONCE_SALT',       '>cIw3i]|^g+F-6D0<0$WDid-KY`WiX9xYAg5!FYVLhrc7mx|}fq2+-P=Gx<njwMz');

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
