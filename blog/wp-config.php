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
define('DB_NAME', 'timgt');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// ** Move wp-content out of wp root **//
define('WP_CONTENT_DIR', dirname(__FILE__));
define('WP_CONTENT_URL', 'http://www.timgt.com/blog');

// ** Move wp-content out of wp root **//
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/plugins');
define('WP_PLUGIN_URL', 'http://timgt.com/blog/plugins');
define('PLUGINDIR', dirname(__FILE__) . '/plugins');

// ** move uploads out of root and rename to media ** //
define('UPLOADS', '../media');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ECS#K]BIeH+JwhrsYZ=@}bqZ(j_]V2]ncpKfzoRnF%R-5XFaGOWC=A@VK2GuRl5J');
define('SECURE_AUTH_KEY',  '%+AR;}L(0K,CG/!VQ}g;C[Uc8JA|&S45-I1q.gBXwii:o]~f1SZ6W*TW{9_ge%c^');
define('LOGGED_IN_KEY',    'rV<UaTrR0(&q+(*F.y5:5d_n.=RL=OHWB#)/SK$e$86Y6Zw09?_e^Lp&vxN~E(^j');
define('NONCE_KEY',        '.Ce-O-8&^,;bGO*!}EP@#V|&_EXmcy`_]DQe<r$OXBv&;BT#UPEg9LH+xb[+o3tN');
define('AUTH_SALT',        '-,N{^)iL;<BW0t0+ap:KVltqUybK7o==mlptUwQa,GrKLqNnX7up*9F{y01,-5v ');
define('SECURE_AUTH_SALT', ')g:8+%LcRn2E?pk-NY!SFldtE;-kfh>.Urw(g>3^Za/CHX7^:d[r@tBQAsw$u1E}');
define('LOGGED_IN_SALT',   'i!o;A2GI}3:;;JJI(,0:>2zCSm-Nf^5m&aZu{CKf2iSV+? E|K5VD0R:6v-`/(Cx');
define('NONCE_SALT',       '_ow&|HO:vSInH2:oL4jHV1Z.bq-gdfJcO28yZ~EI;0;VAn8!LVBVI>,GGZDuD5$0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'prod_wp_';

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

