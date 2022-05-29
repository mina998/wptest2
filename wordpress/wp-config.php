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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '463888' );

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
define( 'AUTH_KEY',         ';X+-a(zljNMSVz1/r+M.h?7&x/W,RSy^T5v:Sw6X<5{q&;@Na ^rhnZotPawb4bs' );
define( 'SECURE_AUTH_KEY',  'PI+*H}b<B^Lj`b4V&AJK>BNCx_?FEwiCC,M@~>9>XEV`n+h1y)H,Z9f#18I@$@YY' );
define( 'LOGGED_IN_KEY',    'arbOwde:P;[lTtcH_57_vRz`2m</$7;[ool/%Rvj70_p;XtA?F(;Vc|N7+K%FIER' );
define( 'NONCE_KEY',        'XNAOB$Un^mio#gUK@AQ58ex<#6~P$Gy(vfvQD?Ym-y!%[/uEz1I~S>sfsW<W<J{b' );
define( 'AUTH_SALT',        'V/{3Hr3`qe!C;qNxBhi;e !(:ruHf!<fPTl>FtjiGqV;E9Vf3DsGs}`#qN/bHGHX' );
define( 'SECURE_AUTH_SALT', 'P}J1=tA8/XUTRLsOxFL;]qL} G,U`#l+T1!r8XQR$Y+pV1YrIIlxIr-~5du$t 43' );
define( 'LOGGED_IN_SALT',   '-Ub~m-9yW@[8`p|a$B4obvXu> [Z6]_jAYQ1axM>}Dys5B;v}2:*blk.;d,s&-gj' );
define( 'NONCE_SALT',       '0ggw*?((=C21N!zyK}` ,J-k_y1 Z8Bc4N`4^w%|s#{epbPCntyt!nO4g`T%nwqn' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
