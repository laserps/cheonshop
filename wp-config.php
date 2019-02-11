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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\cheonshop\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'shop');

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
define('AUTH_KEY',         '!mRLq7j}*PQr|}[z[yq$4tV4)7w(V FKH||krHmiYnaA?Prv!J889avq@^iBQ;4C');
define('SECURE_AUTH_KEY',  '~mgc)gzG]{=3#-B[kR1<e=*xbvnIbQ-Je478 2W=>0@-W<@t;q|Hi]G!aSdtH?*f');
define('LOGGED_IN_KEY',    'P~*#%`2<i{zuo27:MO<K1X.&GX=P98(@?0 .;nvJoVvG$+N^!U<UX.y>YUrKCU%&');
define('NONCE_KEY',        'NSf%}tQQ%*bB3;lp !Z:5O,==ggLE1>FxV9l.vWsw<;/vmQGNr]Zh |T5w+Rpv0J');
define('AUTH_SALT',        ';dA!xnk;@Ja,@j:MTq0Z0!}L{V1c/j!VBiD{08@D>(5VaZ+g9?@*l!bG8%^NaC6b');
define('SECURE_AUTH_SALT', '/KNi9/CV4K42KR<K6q4q0]RG9T3hRr{56*u<wc9%U:/maY(9f#T!*h0^UP)MP$j}');
define('LOGGED_IN_SALT',   'B%?1tnb&6t1,QL}h=Bf.vN<Z=T?NLZhztb;M(1VJAl9i#g1#*`FsCUnHVON[peI:');
define('NONCE_SALT',       'v9]Wc$q:X_yU2)!>.]qA~=?!MzG2IH;CfTA7tDJ|L^g,.X{nC42/U~f:!WaTFDg`');

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
