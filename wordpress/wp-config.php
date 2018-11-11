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
define('DB_NAME', 'practica15');

/** MySQL database username */
define('DB_USER', 'froylan');

/** MySQL database password */
define('DB_PASSWORD', 'froylan');

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
define('AUTH_KEY',         'li->%b%FA5G8+K{C]Etf.*%{Pq/iYbY&F~%`C!X+6,]bFngDU3o1=|^kkLK6I34u');
define('SECURE_AUTH_KEY',  'VC9D2/BIifl5[A~5W[K_vqx9Qbvbr=:`5uf?sx&/th-A<BQ_@2q-!x$O-1^P.jHJ');
define('LOGGED_IN_KEY',    'oHFZV>ot:;qayBkdz}@nb$0?7_|td8f{Q}tXX!0Iz;1)@1c6p}4KFS6n-k|lF((`');
define('NONCE_KEY',        ',szEqM`u;bHu7(wM4(xQ^3;p@+?itK4&jsh|cN;<?) glwsG~}@4`iruiJQ#~T@4');
define('AUTH_SALT',        '!V[tSeZcs-}+a(jlR.Ekz{DzfI>%z;(:j7_,JG-tL.eG&v{f_Elx%i,6;x2t>s@i');
define('SECURE_AUTH_SALT', 'b6gnem~Ratfq4@l>@Rr]Y/NPn?gTgo=9iRSDNb|X,(d7< k~l>sQC-~2h#Sh,%rf');
define('LOGGED_IN_SALT',   '5fE!s]f58N.I[sNv*ds(wqL2)<:.s[!mbD0`HKUV>w9TKHpgwqAaCB[Qi8p_cI(j');
define('NONCE_SALT',       'z|VKjW(0gkur4iL<?_[Yy$s^Pe&BJrIRsmG[zsieGFM`AyxCCAD!X<]m<,6_9ulf');

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
