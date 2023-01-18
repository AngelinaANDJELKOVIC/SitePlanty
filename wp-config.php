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
define( 'DB_NAME', 'SitePlanty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@+J<|?~C|q(:ezxF2+_V 5y}StMcA{5SjabHs#C/[HHAnTiyQi3&tek+J^%)e%eK' );
define( 'SECURE_AUTH_KEY',  '2,~bc5:B14dHRnyU<=@>w4PvGh:pllRfyXmFP9QFksL)k~mLoqEb?Wt`z`7P/PcT' );
define( 'LOGGED_IN_KEY',    '2pzB.~dG`{LRkg>U_zzu)l<B:#Cwi4CxO9jo^5HLGgVOOR[UQEN#hb@LwePnX|Cp' );
define( 'NONCE_KEY',        'sY]2a?mJcBc=~r}?%;cpK#xX2./M&NG3m~lv8.9DQkVi 1p:qNWgx*,/nf_pSyU=' );
define( 'AUTH_SALT',        'c@c_=WVR) eCMd=,1N8RW~NJXaI{fCFH:7MMV{XeM%94h6a$9|*C1E?c&1!yRf`-' );
define( 'SECURE_AUTH_SALT', '>KgO%|x)wP5,~q]bJX6j0e]o:[xg0JyltFR.w4B+*G n+(jKE*&0SU_%>KMS=P1z' );
define( 'LOGGED_IN_SALT',   'F-8Y. Tiv-tINXW oF%y&J~)Be!o[x4:0uym.`{7:sGE9NDO`d!]l~to7P(B+%eY' );
define( 'NONCE_SALT',       'zDvt3-Richpk81M4n{-RY1NZ1&[n^3&Nza#O&QTQ)92ma3=YPq~?ZHS.APc8nM4%' );

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
