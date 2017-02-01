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
define('DB_NAME', 'devtools2folarin');

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
define('AUTH_KEY',         '}`k5H4iN!bOHx3xXiju95y)N0+I9nV:;,t${I!.h5kLq:~3zk1|]tv)tHI*Pa+rK');
define('SECURE_AUTH_KEY',  ';0yWgnsWK3H>^%td5XKM@uvZR 55661n/p_Qr=??HS&JrG&B9CD=ASoxsrEh9F*Z');
define('LOGGED_IN_KEY',    '+[7U{zix77Ws]GpT!rES(jS}/$!9P~}iX=#&|90P,hT]il:`sL[.bG&X3,W8`~)$');
define('NONCE_KEY',        '[1frfII`Ui>E$ZU}TXylyg%5M>4+o5q]</Kh-ExW?Q-/)Y3lc.R(*UVrH]v7+36X');
define('AUTH_SALT',        'e[|P+&M36X]J]13&C1GYz?(]RGh,cwZ*QS~J9##s)He.t6`Uy2y>u.S/**t_18rN');
define('SECURE_AUTH_SALT', '7Zn!X>@T-ij8~l`ve,RDnC7{)s`j4;7{,TU(Ax[B1%/-N(2?8YKcNI>gAyBB49]*');
define('LOGGED_IN_SALT',   'X?B@$ Lx2a*TQ1g$Y9Hr}JIPL#MAK:Ej5sE|!`Lmco`(e&F`CS}6=gFA>7Bu!p;-');
define('NONCE_SALT',       'gKj)F(fiP-BsYT{5s@>_$cov!T?jzq&Y[E:c?pyG53oJk?DW)*16wGcWo@0s:i>-');

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
