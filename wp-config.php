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
define('DB_NAME', 'hebden');

/** MySQL database username */
define('DB_USER', 'hebden');

/** MySQL database password */
define('DB_PASSWORD', 'CL&orqLGneT3REc');

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
define('AUTH_KEY',         'YolXO;fr)?^z*Xa=N9x=DneTuox`u5LU$OT sS19;}MDzrWdm1yY59lUM%>E[J2G');
define('SECURE_AUTH_KEY',  '|qw3DiX,<@rH[<Y{5]o=t/oo!=q@0R{auTXl_nwUel)g)>s-.dzQ1[wu[)w=@GPA');
define('LOGGED_IN_KEY',    'A)s+YUr/ZY[tOl8-.KUM3}YLa(@awr&CO*NJl4>{eO9NGw9 vi678WOY+u4dool%');
define('NONCE_KEY',        '2/z_j<K.?Z+PsuOs>`mGa-H5.3@C:!Ihddq`)(O0Fp;&=QrGb{oGs7P5hN~dec*P');
define('AUTH_SALT',        'h<:.y=O7NuoxvLGbg9%bmk!YqHk71Psgc`2J`xtcxFT&Md5l6/5!eH6d0Jx*s.h[');
define('SECURE_AUTH_SALT', '<TC|,zUt_*MNhh#WIx+W>F0+y1R~XGwfm6U|-b887?4iXEQX!9`;NEt?IsU!cJ,f');
define('LOGGED_IN_SALT',   '!|93s[=H9~`,<,=S>a/Y|lrk$U98hZ>7er.OL@Yj3L$hAT<GNae$?Dto[|e9gsff');
define('NONCE_SALT',       'zTDXST8E%rQ.EDln3pO+]TAx ((%fw[_r,5*I1~]LVF9_>Jxk?ullcV9c!Z<8H_U');

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
