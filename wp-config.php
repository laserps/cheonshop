<?php
define('WP_AUTO_UPDATE_CORE', false);// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress instance is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_cheonshop' );

/** MySQL database username */
define( 'DB_USER', 'wp_cheonshop' );

/** MySQL database password */
define( 'DB_PASSWORD', 'N2kw6l#C0giTjcxk' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'h|H0impusX0tG(52aLW7w8i+:yniJixvFtJH;rEyY-Qs@15@HDKx8a|o7*59Q01E');
define('SECURE_AUTH_KEY', '(1R|48KUAe3rE370iTQ56yl8(GhFfvLt*k2)]#4&2_TP8UDo:VQ8T&03%yAYKgX@');
define('LOGGED_IN_KEY', 'qlhI_3%1P1T~mt97S4#8x-m;|A1|q1iBw4%/K8V];q2(;5/n~;&x-Z6VeLp0b_w&');
define('NONCE_KEY', '5:It4Fnpam7@h26;83;;XG-/90(]j8&9pA6M&Q)A2N/Ta;4t1&fN![!thK-82A7I');
define('AUTH_SALT', '2M3T!*r3FjRrlRGj#06y_Z5dqO*1]@ZQs2p[qE8S0cfBDJ_(u0]P9KT6QfI2q[TP');
define('SECURE_AUTH_SALT', '&%T9C~2!@/SQ+6lk6T0Lr;@@)646u3BQy(]y/5h0|c5N56Et8h6Fa1bYsS[Hy88Z');
define('LOGGED_IN_SALT', ';z5nwe2)_RD_v#GoWM3*ad;%%2L/|aY6-7-%wT/Bt0H+;bic(4|_9BeH0(+D3#bn');
define('NONCE_SALT', '0Tf1jOr4(nciTB|30Il0|F&NhWn9099a0%4/sXz@]|1E4vO+EUf8d)00Ll4DL0JK');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '9gG7QunT_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
define('WP_HOME','http://www.cheonshop.com');
define('WP_SITEURL','http://www.cheonshop.com');
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';