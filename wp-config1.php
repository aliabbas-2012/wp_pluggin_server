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
define('DB_NAME', 'wordpresstest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'lg-IF=Ss+Qm>);lJ)qFytfb ,90O+J:!Tqm:I3[v^:#;<W!  t7|Q_4bGSJ}s~4w');
define('SECURE_AUTH_KEY',  'q`4RyL4XAwZW0*&bV&.4j|8+HeXtt1l _zd;^$CB+a19lXpWH!@7OH!y6zcYy`=N');
define('LOGGED_IN_KEY',    '6aO4YYM@nwbWr> R]qjy*4cEth;h{MjyQ,DB#9f#Gc~Fs/k|#QZNOHgrQV$)9-_3');
define('NONCE_KEY',        '-ff{MRU9{KS`@C7<)*T(7YET-+z@A8_1+o%4Ja6u[{Al+D0B7lyze]B>5EELPH[l');
define('AUTH_SALT',        'K3zx$[Q31AoA8;4o#zUqo=b[>CW(zmu|lIy*nI4P2s_j= lB[#.@}XZ]nzX[S@/t');
define('SECURE_AUTH_SALT', 'lY@|?>-hQMyzi,XE8_6`^bh^<+&y#(BFkrYl _CegbJ*PeAC*tV $Rj%bmTZ^:Pk');
define('LOGGED_IN_SALT',   '0|c=V9rg;hp.=sq apa,U$s3ih_DqDLQ1SAH&7~ TBUQZHt;.?7* H;96Yw(E#/4');
define('NONCE_SALT',       'MtnVgEMZ>hZT)O^2187aC@M1X)S]?D>jD@{5232Cq<+$Z)H7sW]bA] bYyH_tug`');

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
