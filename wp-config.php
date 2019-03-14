<?php

define( 'DISALLOW_FILE_EDIT', true );

define('WP_AUTO_UPDATE_CORE', false);

define( 'DB_NAME', 'wp_cheonshop' );
define( 'DB_USER', 'wp_cheonshop' );
define( 'DB_PASSWORD', 'N2kw6l#C0giTjcxk' );
define( 'DB_HOST', 'localhost:3306' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY', 'h|H0impusX0tG(52aLW7w8i+:yniJixvFtJH;rEyY-Qs@15@HDKx8a|o7*59Q01E');
define('SECURE_AUTH_KEY', '(1R|48KUAe3rE370iTQ56yl8(GhFfvLt*k2)]#4&2_TP8UDo:VQ8T&03%yAYKgX@');
define('LOGGED_IN_KEY', 'qlhI_3%1P1T~mt97S4#8x-m;|A1|q1iBw4%/K8V];q2(;5/n~;&x-Z6VeLp0b_w&');
define('NONCE_KEY', '5:It4Fnpam7@h26;83;;XG-/90(]j8&9pA6M&Q)A2N/Ta;4t1&fN![!thK-82A7I');
define('AUTH_SALT', '2M3T!*r3FjRrlRGj#06y_Z5dqO*1]@ZQs2p[qE8S0cfBDJ_(u0]P9KT6QfI2q[TP');
define('SECURE_AUTH_SALT', '&%T9C~2!@/SQ+6lk6T0Lr;@@)646u3BQy(]y/5h0|c5N56Et8h6Fa1bYsS[Hy88Z');
define('LOGGED_IN_SALT', ';z5nwe2)_RD_v#GoWM3*ad;%%2L/|aY6-7-%wT/Bt0H+;bic(4|_9BeH0(+D3#bn');
define('NONCE_SALT', '0Tf1jOr4(nciTB|30Il0|F&NhWn9099a0%4/sXz@]|1E4vO+EUf8d)00Ll4DL0JK');

define( 'AUTOMATIC_UPDATER_DISABLED', true );

define('WP_DEBUG', true);

$table_prefix = 'wp_';

define('WP_ALLOW_MULTISITE', true);
define('CONCATENATE_SCRIPTS', false);

if ( ! defined( 'ABSPATH' ) )
define( 'ABSPATH', dirname( __FILE__ ) . '/' );

define('WP_HOME','http://www.cheonshop.com');
define('WP_SITEURL','http://www.cheonshop.com');

require_once ABSPATH . 'wp-settings.php';