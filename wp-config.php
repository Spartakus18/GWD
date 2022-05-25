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
define( 'DB_NAME', 'gwd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Pb pxK#ou>Sv[<(mm%xas*>{GXqNpNTXcENCYMeV.{b4x%&g/9G,vBP@a:7V<i!>' );
define( 'SECURE_AUTH_KEY',  'ZpXge,GlF+yApmMwv0#gL6E}[S.PbsH;[FgbU|;}Q%|2oU:BG<tU>o%(55Y~8`F%' );
define( 'LOGGED_IN_KEY',    'pW|MR_U7%@{R1v2CIDJyRp fRtG,fjo|078awMra6K,~vFrp,33),i[H&DyUEBvq' );
define( 'NONCE_KEY',        'hoinTI3M0G,#l$B1av<cKzw$CM#DeV|[;ZgX^Y%usQi!BzJY6R+2[zWF4J<GJwd;' );
define( 'AUTH_SALT',        'b#Ox3*K}lUa}Np[d-j=+yREI5FuR3iJC-6:HYAFo#kPEL;)XL|pWGR/UlTfp.B]a' );
define( 'SECURE_AUTH_SALT', '&|]tXiZE:]u^Gu?iim! ?+F-<*}s9$B49nWk<sYBSy:74kUz`oy.uggq,sgGx~n5' );
define( 'LOGGED_IN_SALT',   'TjH)e Fv&-A=rkA|m=gimnH. lT<_j1^B zIl?#WB!,W9t 1#~kthKRY/6R< =@0' );
define( 'NONCE_SALT',       'Qdyb1k+9>,rOv95c42u@7mfla010,{jx!IqPi6udA>CwQ,+cMU[G>ZEAhzrHA6Lf' );

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
