<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'floep');
define('DB_USER', 'floep');
define('DB_PASSWORD', 'flap');

$table_prefix  = 'tb_';
define('WPLANG', 'nl_NL');

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         '77]aufDR,w+fG43/jVW#e0zM/q=h&)9M{1;~wVI+](GzHDS1+>J=9-F&fG!|{d2k');
define('SECURE_AUTH_KEY',  'Y65TNJbq(L<t4liScL){@12){3Y_kOPd)W~n$AZ1_.2QD-L-X$-7W?va15}Qm?S^');
define('LOGGED_IN_KEY',    'k_XfpiCX^BQ1R^D<oNoI-C=KRpa/NSe<~Ms[%;E 5PwVKu<G8,r},jb7Y>M-^|kA');
define('NONCE_KEY',        '07e[cc|7ZFTI}chv+|}&:aAD6kjDjl8z15l~kCW_{SgNz z+&>mU-Z_NFO~hSB~`');
define('AUTH_SALT',        'Tv+r$K|:`?Mb,-7yU6S2|Oo+RZ.B+2i%F<2uy8u$}3F/:9Y0h@Loplkzj&R8aym0');
define('SECURE_AUTH_SALT', 'D0|{Z(THtBQw$rkRHnBf]~;l*$G7ex>8gSisJ:*mzN3<o+~]FDTXt|=$<H14;wj`');
define('LOGGED_IN_SALT',   'm-`:z^D%}D2*^xCEYg#u3l&aiM75kHGJGkWb4{mgRtP6u;0 @@fpw.&nARij2U[+');
define('NONCE_SALT',       '-<_S5M!i~ew1|?u>-!VIBmY9Nr>1gjLVY+1>woH*-^-rR0ejhy}A[#F]OJ>{-hx/');

define('WP_DEBUG', true);
define('AUTOSAVE_INTERVAL', 180 );
define('WP_POST_REVISIONS', false);

define('DISALLOW_FILE_EDIT', true);

// That's all, stop editing! Happy blogging.
if ( !defined( 'ABSPATH' ) ) define( 'ABSPATH', dirname( __FILE__ ) );
require_once(ABSPATH . 'wp-settings.php');
