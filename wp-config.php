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
define('DB_NAME', 'for_wp1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '10132031');

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
define('AUTH_KEY',         'L:Nj&XkD0~LgNbkRST[6I]gxQ1;a#q*]U.=)YI]K]tb/>bmWX(r<)`?3,;968N6K');
define('SECURE_AUTH_KEY',  'h@0kbZkWRO^3-;V(L^$* C!+Jhp-O4k5U-`Mwh%b#Yg`,^Inzh%t`t~j+~n>(&4f');
define('LOGGED_IN_KEY',    'a_2}fC$1mFYjlxWia/vgqmICot[kx_J;%gkNRj?O!R#[U?{ey4.sEldXP<NTDOC&');
define('NONCE_KEY',        'hCGqH vDnnz (GE@WrVJ<L:tlVTkWuU><u(aF-AP0T@WmR7O793~/Z?dp8`$@b|1');
define('AUTH_SALT',        '`R6?*:[d|2^6u|O<9|Yadj/{.Qs %d/r^h xX#:f7{^K]F,RGR?q4+on?#HVx0<$');
define('SECURE_AUTH_SALT', '=@<ha3q/${;.5<uPH$UVKIQ>a+r$<F>[8Zm`}4l*H+u8A1yS%3>0p(N}~bI5>1EI');
define('LOGGED_IN_SALT',   '_9n&VZGU6M! =wXzUzrv8Y++ljduXhA+x%[6([wV|cxqnIo|Q&ralny?*CX${tdr');
define('NONCE_SALT',       ':puu*1B.3)bI.,M?~9>-1zG)!%5,zuez^eKk.6%YT)R^BG?pok>v##G^YV4A]JY$');

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

