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
define('DB_NAME', 'wp_db');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '/<5D+Fmz?~S9|BO]q2{<~WN?}pWawlOj!`=a<+,bY<(WZ1#tcrID&%S?8?Ud!C-;');
define('SECURE_AUTH_KEY',  '`vv*O{m[9~Y^~Kz!QcA^GJ1D3F;-Yn:]ux(Pk4_-c$tb,Ke:F~nm9z-5zFPd^RQz');
define('LOGGED_IN_KEY',    '.Z|`K]n)u^D|3Nv0F(x}?l3HjdHyWvYd*cl1~8f/|pGnXj_P,JMl+`qh02}QwDXz');
define('NONCE_KEY',        '($JP9%)I4NfW9l;hYP%l@uek-K(6?x|D}k-|vq;o~Ur4c-J2^-07d%`Ily_FWM|B');
define('AUTH_SALT',        's3&{Oo^Bp&oh6!<Ifu=Ld73qGJx+AXPo5 r.c3u@-H92h]X6#hcyeG5~tg9%HO.X');
define('SECURE_AUTH_SALT', '5d=HjT6o+o/lMOfOa]11-h3%Rh$EeuxfZWk+@1hcHhSE&lV8STr]A}aaNg[QbkXY');
define('LOGGED_IN_SALT',   '6PUg+[W|/viwGDKRm[`w|n1)/Fu-0JX~>K}|XW*j^$u|A*X|t1aP$Z$,Tw?`FJ:H');
define('NONCE_SALT',       '8)[bS4;  Zey[TJ2Xq@s:qC2PpiR~dB3XMO(qUk8L5v74BMD||q?psb[7nNk2Kt ');

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
