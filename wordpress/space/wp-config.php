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
define( 'DB_NAME', 'space' );

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
define('AUTH_KEY',         'Eu!lk,#e>z)M}y+rt[!Z(ezZ{#:TVLK2%{AW[!lT84%M/Aoo./W#|[XK/N4Z%9q1');
define('SECURE_AUTH_KEY',  '.8a}=QbY{l7E{dIcD+^LzN&--4C8%ze|gU}1Yq0!l`>|=_nwoMX01XVXJdK9;oqL');
define('LOGGED_IN_KEY',    '<k+; etpj(+zp5kC*k-$g8wUa?C)(Jo$+G.gHyAIrr$CkLH).VYzpb!N5sr$_r_R');
define('NONCE_KEY',        'k0urrfhNNVQwX<dyY;O|,sR_|zUO?+0p`ew0KmDJ7bC}x9|.W*H$X%7Bo{2jw9fm');
define('AUTH_SALT',        'p$/Ie-o|K7-p8T*=6^r5J2l TvQs$/|Gq3I}jh3>!Oxju1z{VRcT#$}{l-J1H4ZT');
define('SECURE_AUTH_SALT', 'DJJ@pa^fQHG+wL.lNyr|yh20k0]d?cE.i(,.JD6vm=Y2Bpg:KKo%Y,HeL-W-Mg{e');
define('LOGGED_IN_SALT',   'l%Ur86t$~fN{nO[0R2q-_XO:A%e8S_,Lw`Q+b<PmrIM~ov|E[`akL-7&gp$k<|V/');
define('NONCE_SALT',       '8?]B>HdOVb<Es_rHub=MPs+|Yyt*[X35`kuwO+xV$Z-.i)#(l|z+~$6|M]4}1PH%');

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
