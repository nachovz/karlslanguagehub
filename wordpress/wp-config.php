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
define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', 'thepogobro');

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
define('AUTH_KEY',         '1M,(Mov_$NxVP@#O@e,Zz.{v75AJnrAS_OCtM;]M8t;TjA}$OYg.Wl8#`f~c8{(:');
define('SECURE_AUTH_KEY',  '3Pkir4v8`/,LSW:vvDxt95JLJBN5$U7ve=KZk892y%f1R8O{gA8l?E7hF8;fW0pG');
define('LOGGED_IN_KEY',    'E4wl/)-as8lQ4o;WpW>?w)x}T>`YziBgCBDL$RsW8/v/>x>#L@#o;,fFMT$[OY/y');
define('NONCE_KEY',        '?U/Rq[QK@8_r;5?J5}swy2Q}/P-(Eo7yu/>1@ %I)WSUI/*2oq3N3T4rPqWBuSJ@');
define('AUTH_SALT',        'r{SZ)w*nn%2&*f#jjSVDfPOk!mYz~cQ<XJ~AMzX/C6P1m2;ui([RCEEQ*iQ.ul3z');
define('SECURE_AUTH_SALT', 'nSYj1[&pq4XVx+<P#ZYXPg5Lk|P8XDgNfZZ^$Lu=dDHp5ikDf7_+,YWS{qs_.<c(');
define('LOGGED_IN_SALT',   ')lG5r6&1ajeRm {(0=jb67-]ivsyS;koFu U68+>l7OU:ZtT#@(:#E?wr;1eQM9u');
define('NONCE_SALT',       '/+Tr_*5h]Ofvhnk/9>;P)L ]?M~]S[0k[LfSk,DL0,d7e*FMrl}t6unD<[/K]?E?');

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
