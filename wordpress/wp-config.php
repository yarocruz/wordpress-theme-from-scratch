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
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'JpGzw[c_ofg|,96C+;V *[0Rs|sX!_z7d}w=@n3k|4OV2$/M_N;8-%#8~s>puI&D' );
define( 'SECURE_AUTH_KEY',  ']zS+J!h|aD9:#E`fQZxLOyic}xXDj,!N8U/Bz.Tcau/.p;|6~,]S1u I.)FA|wA>' );
define( 'LOGGED_IN_KEY',    'jzP}tWu[!l3n6+>zb+>pNXj}(>#wpld WEpgqu# *b#:L]/D.C$1gVP0uC-^A5({' );
define( 'NONCE_KEY',        'q1a!wKxwN5sT!#`!^tK+faZe=(JMPti70pqCs8;s6!&,Y3~x:U:/UooRm=,uZBI1' );
define( 'AUTH_SALT',        'NFI?LQ5uP}9LG`6b:u],hT1Rc+90!Be7o0rjcb_=s;`D>4W#fI^eCT>ER%l{vy$!' );
define( 'SECURE_AUTH_SALT', 'p/H?xVchso=T,>Q`VG<etw+Y{Za0.:/2Fz}.]&j_I>4y.#5o&x?$jfDZ,O&K]x2o' );
define( 'LOGGED_IN_SALT',   'hJ|PBMwS,Hq#tP&V?Fb[=wgSzc}0Uk8X4-_F+&xR*i,Eg[Sq8/QeVLVE<0uuH7hZ' );
define( 'NONCE_SALT',       '?M?^q+lh]![X@,xfJ,x*oL4]%ENkg(2$%`@,u!Km`(L,p!) 4=Cicv-fTHwy92c!' );

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
