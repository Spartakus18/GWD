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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

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
define('AUTH_KEY',         'BBS=*oRJ0N!2*mn|AvvHBr.ph~il*ZK{Y6)|I+8+!lL/wWz:!)F25LAf O6XLd~o');
define('SECURE_AUTH_KEY',  '|Hvl2f_HJA1)u)mlM`1a3JL,(w+GS*-69+aT:b*9<`6+2nIZ@xt9UqCso^@79gR^');
define('LOGGED_IN_KEY',    ' >(`oU/#VD@%?i><:UN7$dZm)|uz!_V+dZt9{/J2NZox,P1+Pp*w_)I3Q#;OY?+j');
define('NONCE_KEY',        '.-Sb e#+sLN,^-+yx/m50Y 2shJtV8x{MkY]kCWm )&fC7N.8l)yQ#<S^Q)Z}mm[');
define('AUTH_SALT',        'ogu[By$e*Imh]4ipqOx/m>3>+Hs9Q/2P^Q|HbW{buBn1;a=[lM^d}+#F5r_A1_I&');
define('SECURE_AUTH_SALT', '<t64o#W{g=4YE0z&S;qdn-HgHj0v6dXrNeAGcWXig<lyeP_r1Sw,$2~x~TC=+SxP');
define('LOGGED_IN_SALT',   '=%gd{D;z BK+Q#Lz6IiSx8{[-6B:NSwC3-h=Y+Xby*iC;tv6|?F++.YZ{8ZC,(wT');
define('NONCE_SALT',       'nz+TF8&:_3. *>WQZ+T|9<6$B#*NfjQc&Km~)|sG+r2D-|;jKCQUI@|%CT}iqL&w');

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
