<?php
// Lấy URL database từ biến môi trường JAWSDB_URL
$db = parse_url(getenv("JAWSDB_URL"));

define('DB_NAME',     ltrim($db["path"], '/'));
define('DB_USER',     $db["user"]);
define('DB_PASSWORD', $db["pass"]);
define('DB_HOST',     $db["host"] . ':' . $db["port"]);
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

// WordPress Database Table prefix
$table_prefix = 'wp_';

// WordPress debugging
define('WP_DEBUG', false);

// WordPress URLs
define('WP_HOME', 'https://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST']);

// Security keys (đổi thành của riêng bạn tại: https://api.wordpress.org/secret-key/1.1/salt/)
define('AUTH_KEY',         '>!_^J*n8sYISA3/niGAc~p&7k5|52 Z1f/)_PTFT$[u.Q||Yx-?DOp/4(6g_nziP');
define('SECURE_AUTH_KEY',  'Sgfd5XgL7U-52F.WD[Q5nf<9 {o)Zq-x^pw7J0aNET -v?sBkw[FTZK56xrPIGY|');
define('LOGGED_IN_KEY',    'h}+-qvqga-2iqo#9nQx?yyuXxv9y<<f1yM. >%u<7|Q*G#9,ki6q$0M)h5Kfk*Nf');
define('NONCE_KEY',        '}TVr-gca+([96aM=zk:u9C4uT/(t0D,Yx~N*t3IaBWx} +a2!e6}%fs%wS9h=QJ6');
define('AUTH_SALT',        ';dKIS3Q<Yq{,fzuNayEg-.I|dQx$,Y9bP`C7Kk@A<O-~!q]Im-B2e2Wb5Sip2)rP');
define('SECURE_AUTH_SALT', 'T|L -~!tDC1]lb:XZQZh&whnYPPyu4iPJ:P8Vdp=55=-2Y{u;6(-W[u`;|uDK8#F');
define('LOGGED_IN_SALT',   'N#8?v#}k{,(J&,O^!+PtP9vAgtL& F/HMZ+tG-Mp`0a9fiA@I}e~.LPlj-@ckPte');
define('NONCE_SALT',       ' @*&1v{y=8Vlm%DF<oR~73U|4l`svwx8p8u8TcbUsaA%-Q+cTywFOJV|xsXSg8D:');

// Đường dẫn tuyệt đối đến thư mục WordPress
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}


// Thiết lập biến môi trường để WordPress biết đây là môi trường HTTPS
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// Tải file cấu hình cốt lõi của WordPress
require_once(ABSPATH . 'wp-settings.php');
// Absolute path to WordPress directory
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

require_once(ABSPATH . 'wp-settings.php');
?>