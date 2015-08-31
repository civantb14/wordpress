<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dbwordpress');

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
define('AUTH_KEY',         '[YX+E_ma5:v%>%P`$<?WW:#W5]W4ApxeCx]#yq$}D_]nc(:;28gCD3xHwm}@~CC`');
define('SECURE_AUTH_KEY',  'NZ=?@?W[@>e#&pAFN|*mrvpQoq%lbKg_/`lE)v=Y5SP:gUV;^cj%> /.u5*b&_v!');
define('LOGGED_IN_KEY',    'MO7?t8cHuH[[9_6*^bx/WG`SaEmP&{1%4?JH7.Ye5HP-o?R~nKq[;@!PBvcdJR^2');
define('NONCE_KEY',        '7MKHUU$!Y[U~OvnLEA9]16R{x95.TH^eWsZ!2DSFH}Zkye-:R~u~D<6S=>D%}6[&');
define('AUTH_SALT',        '<]r+/cA`3=@Qn;m:?M+eVM=FU;}3<)Sot)T?/ajfQ]2UC/n-h`8XP}|+4K9Y[o>G');
define('SECURE_AUTH_SALT', 'Wb$cJ)?iv|}4knRfQ;--od]#,DzvNwvkV=BOKoICf@5h2+f^J018HyEk/Ay0ag$J');
define('LOGGED_IN_SALT',   '<4CEi~ 5A~E]7E7-l-JE>,kP Uku0Gsf)bcO8x}zL3bL^Be0g2O0fzP:EZG]Iv:g');
define('NONCE_SALT',       'Os5SAQQy5<U~[ml/q)H5TjZUBeoMea__79 (4w&u5P[Ld_{s(<XsbEKAwtu|lwu~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
