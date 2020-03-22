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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'startwordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'FrS)tD;F9&}&RX;g,rWu8+,HH)T|/r%|9U+WryG65{|p=Inx>yn`HGw6]I%WL?{#');
define('SECURE_AUTH_KEY',  '8)xS2*,Z2B>scAgv@(&o)ZA/L?NT]7nvYgl}gLTe#dA@PqGAy0T7sF|,rQ%Q2Y.K');
define('LOGGED_IN_KEY',    '%9+!~eW{8G0,b{5fG1Y(ID{[~r9+6^DwWP_b1-i-XVFFu8))Px(Y|&3@B`23UPN2');
define('NONCE_KEY',        'f>@Chn~Yg/e`<?]gqBjU8.W3hBsevPNLF{9]n-wV]g>MLOr+fCw>3Ev+$@E;W{B;');
define('AUTH_SALT',        'VD/a9n-1`(}d=ln9^#T+yn1]:Uy|h/y*<V#hK(,R|yZ.d;M!E3&p>Tv%vA)SSmg=');
define('SECURE_AUTH_SALT', 'YiuJn$?;AXpH|=|+m4d/19q&vfFWS/Xq+NlMJ8fy1lEzZ~]Vj-k^FBcTSNPnn[tk');
define('LOGGED_IN_SALT',   'j4|c6Xqjo(uoc*se2:Kk]$cV{`;=vkxO=@h$&t3Q(nF/<wFCi<:(-#_,{tWSDk4I');
define('NONCE_SALT',       'dk#v$QJD&d-+.<`<#2~E+)Gvf5x-22|a17+-+0RdXJssVRg(Yz{W]v WOu+u-P*>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xyz99';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
