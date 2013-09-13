<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shill_rihams');

/** MySQL database username */
define('DB_USER', 'shill_rihams');

/** MySQL database password */
define('DB_PASSWORD', 'rihams123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Cud3id)iuSJc3sGV)O!xDxD&2PLaC[-#yKE-Q(Z,V?()_X+?6N$HSGm;c*bgHiJm');
define('SECURE_AUTH_KEY',  '=$xh#xHqU-tKG8jaWQtG(|#.WkDc.z|{#G2g/b-CJ`M`FI#Rt/G;|0dh3|tWDX+W');
define('LOGGED_IN_KEY',    'L-9Pik+`aub+|,Jx4tL/z%uw3><Ls*~WnFa#Ti1%L?%sB*RdA-EOA?;d2n;`}&X?');
define('NONCE_KEY',        '}^f$@~6uycY4npq`OR_q^|CZfCTN{}pN|wp-*Pk2b)6.cNVtGcP>MD+=GEBLhi0t');
define('AUTH_SALT',        'W>nO>3!7# {b{eyXp^+2QDxrze+3?L9$u.L[`L5*GF{/#r2PppUg9G]^8;w+O,Z%');
define('SECURE_AUTH_SALT', 's&}HxczQ61djh|^t~H2;r=?jb?g#v.}=*.6a%%2]k9@{cB}yFW=Bl;NV[!qC&h3|');
define('LOGGED_IN_SALT',   'fq371HFUZ%=V+<o7{s/XI 3tW=#^?+;7-ZYx`4P6`K`0+Kt$OCc0~;-Lg9v1$mM>');
define('NONCE_SALT',       'CDs$}|e&WFKMP<:]L&Xr)iNNnw@qqJ/*PRf^.XKa)]-ggK1>i+L!_T#68ts+{(Gl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
