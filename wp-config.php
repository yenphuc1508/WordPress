<?php
// Lấy thông tin database từ biến môi trường Heroku
$db = parse_url(getenv("postgres://u6og3tgovd1fek:pf139d3bcb1acfe4ef4a3be0443857c7b863929f2c7fc17a879219ca528448a57@c18qegamsgjut6.cluster-czrs8kj4isg7.us-east-1.rds.amazonaws.com:5432/d8rmphovob2tl5"));

define('d8rmphovob2tl5', ltrim($db["path"], "/"));
define('u6og3tgovd1fek', $db["user"]);
define('pf139d3bcb1acfe4ef4a3be0443857c7b863929f2c7fc17a879219ca528448a57', $db["pass"]);
define('c18qegamsgjut6.cluster-czrs8kj4isg7.us-east-1.rds.amazonaws.com', $db["host"]);
define('5432', $db["port"]);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// WordPress Database Table prefix
$table_prefix = 'wp_';

// WordPress debugging
define('WP_DEBUG', false);

// WordPress URLs
define('WP_HOME', 'https://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST']);

// Security keys (generate tại https://api.wordpress.org/secret-key/1.1/salt/)
define('AUTH_KEY',         '>!_^J*n8sYISA3/niGAc~p&7k5|52 Z1f/)_PTFT$[u.Q||Yx-?DOp/4(6g_nziP');
define('SECURE_AUTH_KEY',  'Sgfd5XgL7U-52F.WD[Q5nf<9 {o)Zq-x^pw7J0aNET -v?sBkw[FTZK56xrPIGY|');
define('LOGGED_IN_KEY',    'h}+-qvqga-2iqo#9nQx?yyuXxv9y<<f1yM. >%u<7|Q*G#9,ki6q$0M)h5Kfk*Nf');
define('NONCE_KEY',        '}TVr-gca+([96aM=zk:u9C4uT/(t0D,Yx~N*t3IaBWx} +a2!e6}%fs%wS9h=QJ6');
define('AUTH_SALT',        ';dKIS3Q<Yq{,fzuNayEg-.I|dQx$,Y9bP`C7Kk@A<O-~!q]Im-B2e2Wb5Sip2)rP');
define('SECURE_AUTH_SALT', 'T|L -~!tDC1]lb:XZQZh&whnYPPyu4iPJ:P8Vdp=55=-2Y{u;6(-W[u`;|uDK8#F');
define('LOGGED_IN_SALT',   'N#8?v#}k{,(J&,O^!+PtP9vAgtL& F/HMZ+tG-Mp`0a9fiA@I}e~.LPlj-@ckPte');
define('NONCE_SALT',       ' @*&1v{y=8Vlm%DF<oR~73U|4l`svwx8p8u8TcbUsaA%-Q+cTywFOJV|xsXSg8D:');

// Absolute path to WordPress directory
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

require_once(ABSPATH . 'wp-settings.php');
?>