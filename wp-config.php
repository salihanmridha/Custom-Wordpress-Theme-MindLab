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
define('DB_NAME', 'mindlab');

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
define('AUTH_KEY',         'InFebMrN4fh*jlFhv:aJyFdqNRs7U V QXktbT0DhgaV{R,T5`(%%nXwC!1UB>w{');
define('SECURE_AUTH_KEY',  'g48pfyQN,)ABu8`nLop]7tZi?Ja=ea91s37P-^a/4LY&|SSgiLLzViB_u+!NUW?.');
define('LOGGED_IN_KEY',    '*)%bBb<7QLlY.Y-_zx?J!}{UGDI?HUlyB#[8QuTx[D7P!gVv#Ed8|VWE@E!1`w]W');
define('NONCE_KEY',        'Cf9)CtXB$c-FdERWGp@G0;bi66j&DZ1FVM J NpYrQF4ov5qPYXB,)a#TI}/y[N,');
define('AUTH_SALT',        'ok29@jCG.YhLnIldRlx(mz(_86qN,fAl8xzk`YZbm4{V&W8]toWNqBuDs5iyYUAm');
define('SECURE_AUTH_SALT', 'zh}`{0b>(!1U$|,8^zj]O>:o$u8hM.#[/hWW=34(Kz6~am&0ZuAwm+~EJo|]z*+q');
define('LOGGED_IN_SALT',   '/dC6h#8M4&%!+j$rUzpnu,53 Ev}b*6bSls^ &5?kCClLXnf?pvvcYUZ8RUMW/YK');
define('NONCE_SALT',       'f$bSvY:ogf+}e*L6#> {]iCEnBw4HA,LKt 5cMCS%ov{[3NZuimV?_d+k:Xghv{E');

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
