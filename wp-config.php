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
define('DB_NAME', 'wordpress_seo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'J.p@iucW-c9f>2X:K=hrw(+t{5sSCVn,eOvRtPp0Hgtx=P-4!ZFF+;+aOWHJUzrM');
define('SECURE_AUTH_KEY',  'IPu++!p4J[^?B3d*.d`E7lqy5N|)XCZiEJeftZ*R|0tI|8rHJ2;.m3*Tc+=BPBa$');
define('LOGGED_IN_KEY',    '*k.k()-(.O`Bsc=@,gVzEV(S -B+*V_gD)Z*}kfc;i(ZW|{h=t%s+?X#^3[Tn@-t');
define('NONCE_KEY',        '+)YWc)O3ZGBS0j.<|n(>(S&vi?PDC+0FQC+r3b/%7 ZLPR@`,.v}D7M&fa{Ue]T#');
define('AUTH_SALT',        '~acH;ik^,bWZNAkrD2W<2o!1;FuBgLybM?JEN]|v+!f/CR1!BBzg|>|/)Ebg&tna');
define('SECURE_AUTH_SALT', '^r,|I,nLGOfk]=pLe-5aN9H]%qbW:eY6ME7U^{ia#TF25OV7xoAjC51q-JJ~h=sb');
define('LOGGED_IN_SALT',   'n|e!rweq{]F,1Hz@zp_28vN0]+:;ji[+ZKn+lqW3fyE:Y1EXDxU$}k}Hjo$3?iFn');
define('NONCE_SALT',       'v}zOQ^I51pc+9*#xOlGAL[&-cRkSv{u%LudQS$8${, u]A24CRq84IX&!efXmM?3');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_seo_';

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
