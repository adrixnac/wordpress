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
define('DB_NAME', 'WP_Database');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', '12345');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FTP_HOST', 'localhost');
define('FTP_USER', 'nobody');
define('FTP_PASS', 'xampp');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-(I{[Nz;@@(W1HZ#z(+ZukBHa`hB7s3;]yY(grhOl@8_X*Lcb)Hn^/tGdO6d<.$K');
define('SECURE_AUTH_KEY',  'v^$Uo|W>Qq&a&K*!o %Df^]_P)%Bq$u#k|5A=bUYxcs]0Ai7+ZAqR(7T~7W%J(~P');
define('LOGGED_IN_KEY',    'zHGX/m?X(I^ X0Uf{:$nfhf`MV${MlMvuV/]#RQU}X`6P2L0=TEtZmw^st`$hA>*');
define('NONCE_KEY',        'z4qKaiK,tS}NPZ1k5N{[i`TM/}0/yZuW~Y(;0d#Lio4}0*X!@>Hk)R*(c$J#5d-W');
define('AUTH_SALT',        '?&mg4EX*I;EXDdO1>*S|%=o^Pt}2&5d-K15P6meXkK-!*^jTf}o!7,;ab(3JOry!');
define('SECURE_AUTH_SALT', '3nT%`*-T xpbSfPgWD:i~7OJ9B9b~2TOQ! aUoeS[8qN-WLKw!8z[964~`^xQ65>');
define('LOGGED_IN_SALT',   '_?jAK.i[QA[yOg}hf] 5Y$)BS/i#AiiDQ(wd@LR?&T+#5CwjWC ;I.GyOPCjltxu');
define('NONCE_SALT',       'D}89-]<6VYp]|6onFeCNA9XuqS}fKXg;t&/8!{5pLkVP`:mjJ(/1844lafAIl1ED');

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

if(is_admin()) { add_filter('filesystem_method', create_function('$a', 'return "direct";' )); define( 'FS_CHMOD_DIR', 0751 ); }