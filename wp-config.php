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
define('DB_NAME', 'buddeweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '3.QI|fts4Fu?U`2Ua:Ook_z2/r0XqdugA`06R>]!}Py-mpg[tt*6;i}+rlIbCw_O');
define('SECURE_AUTH_KEY',  '~6n-[`%Dt)L)!vZf::d?ZndiN94T9~?STO0iXI=Y&6yzUspm7?RFbdpA)@R<VYa[');
define('LOGGED_IN_KEY',    'FBcq3.n7:1S%ZHU#-^ Bq1w+pUF24Kr%^UzQu2x-r#T!|3Z!d;Ri&Kc+1bSh QLA');
define('NONCE_KEY',        ';v])W#{.&iIoxE$NW{w`;u|x:ei(0MmoDGua)~]6Nn;Qmc?*NouAg@7~-q!}jH<J');
define('AUTH_SALT',        't{&r[%wuYTHnsZHKrE08C<d{m~_nZ]|afwFEb>.uT?_F@jYogKL1Ec 58X1oD8x>');
define('SECURE_AUTH_SALT', '=`jg+Rg)0Ol)ljm~^#4Lh-.6gq/1=Edwl%P>l9RyPQw|X)aR}wtqQP-r`DK,K?u|');
define('LOGGED_IN_SALT',   'XOZZWH=_J5; w|{Klht-|e@N^$[=EX7xUr<>+yjJ.z>v4flluu%YC`jiZ__B=K:>');
define('NONCE_SALT',       'R!)yxd.J--<T!|j(mr^euGyfI2tmE4{#S8W7m?x,C2rL3QnqdBG9tJvOOYD.~/la');

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
