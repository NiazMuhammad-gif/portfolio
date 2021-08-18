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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'VFqcm?V<#8gO__[;ik4VEL:TI:FJ-g2/aP6mI&&6Z?,7}of;<fQ34AoScA-C~Lmm' );
define( 'SECURE_AUTH_KEY',  'SQDE*ipSL>=/M5Rhs[km4ibf2S=7wCcIbrWKk?%q~Xy+xkz[kFa!R-/5XHi?m|&,' );
define( 'LOGGED_IN_KEY',    'SxEdNd9+66?SYeo|xQD?s_:67f7Ukgc!y^QFQsGp.u=|q<P6Z=LmtJg_Aeeuj@v`' );
define( 'NONCE_KEY',        '|S)2~@P*Jry2;T`d$*yxS<X9^/d$9LEEq`uG,p9*.K3Mk8#MPEs0 18DLA=c3=sX' );
define( 'AUTH_SALT',        '<M>4cRc<L  5rK9. 8O{dh&]/ENxAbTG^{}=;7[lK_EZVjUltgEC!n[!/DTA@j(+' );
define( 'SECURE_AUTH_SALT', 'h qA/2MweY-=-`G;y42_Mu:4RJw3_34k2&FIE/m nKu!~DWqp 2.?*4r7@<8a@9O' );
define( 'LOGGED_IN_SALT',   '`/4DNfg1p~:^R <+PO8g/iPwrqO3dq(thPaCV#L_n$Oxs*>uoy@Rs$0Fad%M]%i-' );
define( 'NONCE_SALT',       '){IdbVHx=qIN#]fBQt*Lc:(NQ8N}GlU<RJa!/F4F*imuC5Q)=3TmwBck@i]-1HaC' );

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
