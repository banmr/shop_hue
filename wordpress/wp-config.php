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
define('DB_NAME', 'shop_hue');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '$aWYAe.Mi1aiAYs|RG^]V{xixo%g)!DGU!.u8M,j@6d|B/Q+RMqCmqCw@0-YS#_j');
define('SECURE_AUTH_KEY',  '~Y=r!5#,2Frq1U1!C4:lBIj-F?M[u#IN6F9*dp_LH|O%@6}~0j3C&r*h]^4q!3cp');
define('LOGGED_IN_KEY',    '-jTw%Ll!3-H|d7#Q<k.IN:n(ObM}x#h-i6h{`-v^R3l$p@W7m?r=RWo;6]&fG%7B');
define('NONCE_KEY',        ']k.SUo^PVoF/.?GerH{-7n.Zzr[5x/zZ`EtZLHtU1i+. 5 wjgP5hEeXnB5,el_=');
define('AUTH_SALT',        '_eXMlF,e~%ut++ ,=eI}(7SR5WxzXJm67ebf7t]8BA}7C?[W,Tl7 0qc7^?*/M40');
define('SECURE_AUTH_SALT', ']>qp%n!zmaJjAT,C~+{DTXJyoVOG!gw;(=}**vJ6LO3GD8dtH6!1&=i)t>q;n}(?');
define('LOGGED_IN_SALT',   '2Rk2bN739whyUVBA6pe2rlX@^tiDI290yyK*vR0 w/^[ 0HKWmQuh`)9T^cd7gU^');
define('NONCE_SALT',       'kEb<u8^.LT%`z3hhDJF/%gM7w%U1_;*U6,}68D,(x8A K*ga-}F7#?^L@st9PIGh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shop_';

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
