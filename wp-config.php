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
define( 'DB_NAME', 'recording' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' .+OtcU~&-_uAuQ S2f#fU~zLxHVqeH)VtOUY;Ni fd*ihLn.63e!rQ}+5l~E?if' );
define( 'SECURE_AUTH_KEY',  'S9eb`T(*uG.Y.L A+YnPD4jgC+3>_zwS9x|f]1$Q<2D#E:OOscyG3]Hj!]}_v6bG' );
define( 'LOGGED_IN_KEY',    'pxuE(XAhXLZD5_ym$piug1t%5c@_{cNov%?ULRlQR-J@dG,}#vMsn^/nsvh6%n{#' );
define( 'NONCE_KEY',        'c|&d>5?vxoAxjb wqp6*yZLG=fG42V~w-sT?M36PA~icM)lL[nE3J8(5x4Q{bEtv' );
define( 'AUTH_SALT',        'mch+#L5K8$w/3jD4[8lIWfyUx94^x<#AXK<rfi^u8rz}B4Ee&(7Wyk9`!0&gmasG' );
define( 'SECURE_AUTH_SALT', 'f>#GAbhMt7@T!FC[9>7fn@-:5BHd#JGjK{nRF;*%_jf~YkbIvjoZCdp-Nj COR!B' );
define( 'LOGGED_IN_SALT',   'gtP%tW?H(2zJKu(w>=[{j.7no;ml(7=ShtYYd8PCI`UbH<TR^,jPR&5FJoi8IK}f' );
define( 'NONCE_SALT',       'DbMeu7Yq(4tT&*<6LXT,qDtX*rzF6}:u|cB3*+/91`os:]!.Y]aJoU?gfhJ|{Bx)' );

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
