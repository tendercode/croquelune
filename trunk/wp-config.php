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
define('DB_NAME', 'croquelune');

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
define('AUTH_KEY',         ':y,-~M)}#M>][?}8KC(2P,QU5pRdSv8Oq6H}Cxn}|#t5{z)r(I|fI{P.[Cer-6iu');
define('SECURE_AUTH_KEY',  'T1v`sPv{P#$iWsXTrl(woU~CrHN^Ie3Tm&iqs&j-Y`;J!<.+PZ0o5Vump,U5tgBU');
define('LOGGED_IN_KEY',    '|b OEN5Q!tl1^xnaVaKxz15z[9sF,n]gY4eu|Gwl%.qT|*G:|Y* ^+v;ckw+VTRz');
define('NONCE_KEY',        'X64kqzFH}a:cw4hHgZe)vx7]mj|N7.A2MqCM?d-:-IAjg@<X4tIgf|Q@deKa4tPd');
define('AUTH_SALT',        'kX1TW{6fZpO>W0lxuN>=MC-Wr;;cgT[gvExy$fF5<|<dR=-R:9GV?w1it%=atXS[');
define('SECURE_AUTH_SALT', ';QovxhA)-39iv4CKnF<*vP>78Fp#-m5z{?6tQj*xpg5ap##maZ)miziKu4vXFxkx');
define('LOGGED_IN_SALT',   'F(YfQ:Y11:xE!&-N!0Ca/WHge|D<+wpo<(j9w<U=B9O@F>kH-<?jWxDj]ee?Q%N-');
define('NONCE_SALT',       '1f;(-i9:N[{+S`T|XNvLj)]8)T3{|gvMA+j#=~&f[Eg5l^ef<&YA+!2jwYdk1,zG');

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
