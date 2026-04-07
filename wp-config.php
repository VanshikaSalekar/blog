<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MyStore' );

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
define( 'AUTH_KEY',         'e)lPZQqjhd7#@;u^R78b$9OmyC#cMN ~EUis=5{V2P1!D9NI=`89QX?vF&E[ar2l' );
define( 'SECURE_AUTH_KEY',  ',(ue]opwL%g!u5/Wx4u~&HAu{^NYl4V}/(<HwN2aR>4fcP*!Mq[|{2Qg1KLUa5[$' );
define( 'LOGGED_IN_KEY',    '<g[|zwLM,BmW0;tSB^x|3;~voz;<?ebw:m_{2.~uFJl|^Xvle^i]$GtpzD]JSugL' );
define( 'NONCE_KEY',        '7[?HXimy$$h+C{~d4dGLPYnq9U<4uu(FYAj_Kv2`{Bn`[1_E.<2w`g8busuYH(4a' );
define( 'AUTH_SALT',        '7#p^:Z>,l;4Va0UQw)p5wf{+rK/ TP5dkQ>CuhX7n:M 6doaqX;XzQ- Ou`/& :>' );
define( 'SECURE_AUTH_SALT', 'U)v3 U{qY?n7/}{|*t;:U9}Y86 ~UOy^-wF5aU#n]w.D]^ &[Crt8fXa&mhv*hag' );
define( 'LOGGED_IN_SALT',   'l?;<t-[_/#|@dWv6}T >1ru<1O>  [Ygi%a_B-]i/{ZDsu`JDkZu)G}M8~pdC;cz' );
define( 'NONCE_SALT',       'Lq:!SXfc36J/adE@*i*S`BHx.5aS96Cl2r>iP+VWV[tOxmh:|I]v;8_64bR-/.7 ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
