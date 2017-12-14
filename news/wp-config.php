<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'abundant_news');

/** MySQL database username */
define('DB_USER', 'sunjuice');

/** MySQL database password */
define('DB_PASSWORD', 'ener93t!X');

/** MySQL hostname */
define('DB_HOST', 'abundance.abundantenergy.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ML//c:Ft/6jCEDGL$FQ|@UPCgKjkfADb5*LQ)h4`Q?j":k^*%N:kwm^~mDW4I5x:');
define('SECURE_AUTH_KEY',  'F0Da)(X$Jj;&o7LhqcSoIB)kXLEvwGscbA)*$1GzCW^^m;YZAj+lX4BelsKX:BBN');
define('LOGGED_IN_KEY',    '&(bAKTKK!tAI?P`|@cDxzghMACBpumH;:?8s1SEr1;(l:ha;^Onp|Wu9#|RpZH&)');
define('NONCE_KEY',        'I%e^)ze)reDK?)KZsD61CB~tnv7@#zVDfX|"r!lJ8SOIz?xS7~65@TDF*fdM8((5');
define('AUTH_SALT',        '&q~%lxh`GsakgiEYf_"TJq9t9+le%$o_$CkGBJ*6e:6h/g5K|CcYMhI&ED0N2#gA');
define('SECURE_AUTH_SALT', 'tpwRb9JajUumgZrG6$86Szg1b4Jc*UVn~AjIO3xc?pu6b^DlcVsnjQc(kS86F+|w');
define('LOGGED_IN_SALT',   '$AD+yC(8Qs8|v!4SB:*$Q!9MPut62$gF_D;fu5;s&9M95kUjNwfHd:^b+rG$1nIU');
define('NONCE_SALT',       '@R8AD)/1g4XFtsrGC?qr6;@YHaE*#Jjk|jDvLvxkh(RUHZ4sVfR!Ne_Zi^lUKxNI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_cjysjg_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

