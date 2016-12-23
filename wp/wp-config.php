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
define('AUTH_KEY',         '><Mg:@3eg5{`6DOoq@5gfR/d)Fg.HVn,la{ip KeKSX*c`xaF_7$@S-?<vS5B?SV');
define('SECURE_AUTH_KEY',  'z{8A#@,ucAn)G$7d;>zN;tv0|9fN:i{?Gj7URBnXP[:7[Ws0[t7!3wW{$]5Y#^<b');
define('LOGGED_IN_KEY',    'Eb]!RJ+3;|]yR#][)ig`>~`/txl4N{bNxcgKoo}-0eip,g|.(qS~:mrmgE],E2R]');
define('NONCE_KEY',        'yk}{HEET%9XvaC@IO v=XGwjyjt4|c59$QvLY}d$E-oB&q&`nVSp>8*{ ly^G L(');
define('AUTH_SALT',        'Dh{foiQ9w]6&$yFk& Nn8&XGoP4),wWD*g/k|4aA(sN6sgA.j,W_M!ZXSLKw3:e%');
define('SECURE_AUTH_SALT', ',U$kjOKA/BGD0kVLL1G|B7?Z#qv1{q1k,u4&7DZT_k,YE(n6tNALU}Qgo)y3s_?t');
define('LOGGED_IN_SALT',   '=UA]gS<~MRNOQ>:%) ?e[2d,x0mb_,TJy^sBRxI%&{ g~]c@ZEk[$F(A;An>PnJo');
define('NONCE_SALT',       '46).WV0R`cY|B [_jvgtp~LI*N@XKyb7i}[bh>Z>~rm=$Pzb~NK@vdne_xU H)_K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hue_';

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
