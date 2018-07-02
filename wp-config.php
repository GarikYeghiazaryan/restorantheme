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
define('DB_NAME', 'Workshop');

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
define('AUTH_KEY',         ':QT`g&5*Ny!N;xz|O>aWvL0n#C-S1Q)c6VjWLYe%d|rcm}S*M(.A]H13e-eP1H2Z');
define('SECURE_AUTH_KEY',  '8GX0]E{HiKkgw.L7t}(3{#l9)C9:W&(>IrAP(|MeC_s@[#x:Gg9v/kt=Wg[g%s=c');
define('LOGGED_IN_KEY',    'yi2?_~=/^Rwc.j2(i}/SK]TG,aY&k[u3Y}R$l<,/)m>@stp<W)wB.tmr7&>V:UcP');
define('NONCE_KEY',        'L<e[c~|5zIMKg0,[6fU2U<&[yOFvVX }H/e9gsNc]lv66pvOa}`y 1iRmw|Mpl!Q');
define('AUTH_SALT',        'fm>GT7lCZ0y.1fi*^XIPzxNVRxmKjZY.PinOxxZ(ZKf9~kM*Kaec?, ; yhh5VmE');
define('SECURE_AUTH_SALT', '+VgD~iLh*sg<tox0$e2_K~._E,CK[Wi|P*|3:.B|@IYmbkr0f`!TlMN{O] @jTAT');
define('LOGGED_IN_SALT',   'js[]Si|s-QAy>p:87Js`1&7j1E60Aw0U_<x[+0em_*6v1s} xn%VW>`<Y1KM&-:4');
define('NONCE_SALT',       'Mz#4A)i__ W_){9R489h#V,%;1.<O$18m$h ~(^:*@$muXDV,&w-qp(V42Ju(i4<');

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
