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
define('DB_NAME', 'wordpressstart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[Ra2;U<K99 X}{0Q3g&(U?W)nNXM5pavW=CJ2Kn[2I^e[#P;_;Vcr ;>!|rfu<@d');
define('SECURE_AUTH_KEY',  'd<QhH^HGTvha2A*7(x1^0(V^~l8PzUGcRQs6vV5qqQTfaf9jV4R1){td<x{nk$|5');
define('LOGGED_IN_KEY',    'MYXnOEO;=jM3a8y!S{~-1D{{?])F(c4BSYX$-9/kB?v6%J>)E8g8y*8UwQ:uySp[');
define('NONCE_KEY',        'm4,A.L}+^udR:D+OCp:y}Iwg7h8?3,*!L]n82+yc XW*kY)R^cs8S1S-G~Y5]}b-');
define('AUTH_SALT',        'M(-|gn$ag7%>ebWNN.w}Fy)EfyxjI>:UAMA@RktL#Kg^HH3*_=I:|]hf1vv+QeXi');
define('SECURE_AUTH_SALT', 'KI;4G46&&qOwB4ptWXg TM^u5Q];{)A4m_:Wux{.(,.qKJ.J2g}37~!L?[Nx+S2q');
define('LOGGED_IN_SALT',   ' s5rL(0@D9fs)T%F Fgv4;4j:dLS)~XFn7T.56(k-bhkd2xR}:PH*oAAy9pi2ZMy');
define('NONCE_SALT',       'E0IA<P!@){>3D$mtvFNa~]0bQ4Ms:ko~-iRA6{nzyN7^b)V2ESQIb.-c|d:!kzb~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
