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
define('DB_NAME', 'alfiepetsdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kso(0(76&54RfG');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'E0%Z1139=tiu>i.*dubt%`~XP+Aq,!5|^$<PQ!MNMZTI9@L(i2+uq&b,w<aLjn%~');
define('SECURE_AUTH_KEY',  'xEs-uI/@Un_3-z=^.;bNY,!Ib~$f<I.833x+|y,|E{mc-nH*Ql)!>:NxBLfD8ZSE');
define('LOGGED_IN_KEY',    'Mf{i+p*a!5fmWX]K-Ysipwkm:|#ze6Dz|Ajli,QcV4bXhMW@-1~g1Q&Uy~)_Z##?');
define('NONCE_KEY',        's-xGT8AO _d:|g1T.^?*]FJ-7(99pJ<HjF|+sT0|szJtjoM3bRvI0qk-el6c%@ui');
define('AUTH_SALT',        'p1q|jb,s6__=#+-_h$Zk+:k}N42IyWLWOPu!e^Y+KR`Um6,8@`^xY|0wXk}zklfE');
define('SECURE_AUTH_SALT', '&gd<[n*~4]iic-vdKt7)1o3.`ho a4Mt5E.Tm!jF,y)]vTVq|JZj.tfn2@4/gD9>');
define('LOGGED_IN_SALT',   '%vSGlBs2H14f3lX|8U_X#d4ne_V 7#Go-u[$FpR-Zw76.~t*qW38D6jZy?{dkIiw');
define('NONCE_SALT',       '@+e1O<;/J=5@aTB/tyL_0P+],,@0qFZh,g*T?2a }6/k=:/aD#es-9I+4!<U9Af}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
