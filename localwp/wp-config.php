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
define('DB_NAME', 'wpdata');

/** MySQL database username */
define('DB_USER', 'sphinxdev');

/** MySQL database password */
define('DB_PASSWORD', 'capstonekrewe');

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
define('AUTH_KEY',         '(u3Qh.;?$8IhY5rj[k$>h|8Gk 0r#7-d7PIowR~dg.;zoKL+Bar{>?<9)vI|Nexm');
define('SECURE_AUTH_KEY',  'I*sGRfUs#Fe]-812E-Swkb.)/q_ `&m$N8K7h+_p<R|n<X2:o;r}PPoYF%q.Pnx@');
define('LOGGED_IN_KEY',    'qjK#dv2_g[G6K$xU6v<I}ejS{Gcvdg1&G,vMrN)}Gc|3sokA$W:w1*lglS_|W&gj');
define('NONCE_KEY',        '/I9!H{+}_HKjAGC?-UqIGguL8U<UMCRu6hp=HPmxn5/{.z_?-HUckY6U#:As]S5z');
define('AUTH_SALT',        ':=(*R~Z%|lTh~|;AxHACSyR]MSvOP:~D&-6F&|d<XI`(`V-oH<3w0fJ^|3w9`GjS');
define('SECURE_AUTH_SALT', '>`h8qCJGkab^Tz=K[v~JSAT>tp7G$-b~|T8i~_N)PB~z{#o/Q[p0w~^AS3 ,qW$5');
define('LOGGED_IN_SALT',   'v4+Yv]HMjzy)L8#jX|tJ]AG^K+J!sZ1BF@{DZ!N]h)tP;>-uO-u{:K[!G1,iHQXT');
define('NONCE_SALT',       '8|9?7b Z*a-4nL-(#pp]3i3[<z-ej~Y=J/)=$2,[R3y]Pq**w.O!U R<^y9TaYK4');

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
