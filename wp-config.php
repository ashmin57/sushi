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
define( 'DB_NAME', 'sushi' );

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
define( 'AUTH_KEY',         '8#MR 2dEao&m04&.TCZc}N#WtHFdwet~rWwEacokeddDcgr<#_kxN`z3 LH#vL.)' );
define( 'SECURE_AUTH_KEY',  'FZ<Qh%DMx>wkfQaE2vo3aLd1sPilZ,XTxs>FaQlNFX&R<>gm^E<V/N5_B7~-g&iv' );
define( 'LOGGED_IN_KEY',    '!N<]/}4{^*, v6OW/0oq`1@<q3mESklFjR1l9LP:=0Z+knYK|HN, w4j4md:UQ1w' );
define( 'NONCE_KEY',        'h&:AY dRFybv<{TWNoK~]Yv1cBV]wCXtxrq*S^_jZk,H3Up XT4@YO[>?$qY9zc[' );
define( 'AUTH_SALT',        'H:r]y@U~Ec0+i[qk%8FAHW-AI;]JSwZ%2t!1GcP*F1;&4%8*8>WMF Lg2gZdiV&8' );
define( 'SECURE_AUTH_SALT', '=siU|{~vK[1mhZ4`c/!InN^,/vV:j{U/UJxvD@-R 8_kZ,#C%d1bLp:I8T]6iQG}' );
define( 'LOGGED_IN_SALT',   '3anaH7e+wcl$%$sz_/3TU*&x4o,uV5<pU24m`k)95mN7a4!o_VN0czACInkHI28!' );
define( 'NONCE_SALT',       'S<?h4+O>?90mTW Zh8)-3SDMx+V`^P2KEqZ,7lP9mE{oJxXD5mc#o3E&r* $5W]6' );

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
