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
define('DB_NAME', 'pm');

/** MySQL database username */
define('DB_USER', 'pm');

/** MySQL database password */
define('DB_PASSWORD', 'pm');

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
define('AUTH_KEY',         '#8J9*K%Zn1 @-aAtN]TH[02&IJ@Q9n&$=bPA)UpB=[]6R]dC5?Zc%*=$%60B$6ZY');
define('SECURE_AUTH_KEY',  ';G{->=;IHl?wMz4WmN;=&* $k1GAv+1tPV3qi{q-_=#Qe8iTXzf[T>:]sU,si7RT');
define('LOGGED_IN_KEY',    '8#bD9QWCO^>2iB{ 2dVOtQ5L)`Ny`bfNXAlL/TSaGd`N57>%v,CIV1o-*w$=z)Z3');
define('NONCE_KEY',        '&0/E|&^G],}vUR{Yi63W]d}irzjzix:xbp{|.gdI^B-/[NJxx}7@76^7-Mv/8}ci');
define('AUTH_SALT',        'OeYF XRtZlGI(b|G+Ta^]bjG&80xk?kI<}sw4xh?5;dj&Lp5Si|BSwW9(X5QMaXV');
define('SECURE_AUTH_SALT', '4TR;bmd=pAt<4lya[G_-n;^LG/s/ hFhH#yD,:Bb%/4,:~3I]!k*+%WO+5pfwKJ$');
define('LOGGED_IN_SALT',   'wrE(=Hi<aVf=CErD&g-(5$b#DYDVQa.&)J@K2!dQ7ylgoSQs~Stnn<0T&--zjrOm');
define('NONCE_SALT',       ']g*1`&2)N(Fl.NYg,/KBtxVZcRwDo{S{P#POBlpO=H}*iJbVSwISq6Ortill)&<a');

define('WP_MEMORY_LIMIT', '256M');
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
