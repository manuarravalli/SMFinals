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
define('DB_NAME', 'SMFinal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'SLoEtSf/zbt9.sC=+vAL,qOXcVuc}55%DWPq1Pv4+[qjgr<<{AI:vNW30FfzS[QV');
define('SECURE_AUTH_KEY',  '~2^kly(V.,/v1|QkWMvcJb-As~KP]0y0h+)|tgpM%ctk$d<pyUtdaFJZf27PgScx');
define('LOGGED_IN_KEY',    '^ ger_i5T}sK8N$t<,/S,7}GZzusBe.=N>`QZ:.9k5&Tir1XvD_y=Vx=uOwZDZ u');
define('NONCE_KEY',        'H7E`qIjnYz6#srF/!6e3@k-S7KN9}g_}fl7r4DXW,IRqm`De+>]!jo}t(BN5Y,EB');
define('AUTH_SALT',        'm6g.vB1~fF=,<`Z!a0ZqDY6)5{.(}2bC4YO)Y^=!j0dU~$,M)w9<;@|.HGX]GnCr');
define('SECURE_AUTH_SALT', 'G,2}:+m{Tm}-?Y6(y!@N]|Bo:w9AV.umobNsA9t8N7kQU?=6OG9J)c9tUx)*U%!I');
define('LOGGED_IN_SALT',   'Qx0o<d5OCPvA,YJpJ1JGm|=9/d6}0){5y%,)&r-h@Ty~r&:!y]OtsMuUA Fo4W 2');
define('NONCE_SALT',       'z7jS`1xVH6AtF5f|=o5Aqu<tej3&?n<k@:R;3]LuKKn1mC{_vBhM8,)q,w%nrZ7i');

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
