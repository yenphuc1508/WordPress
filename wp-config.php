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
define('AUTH_KEY',         'your-auth-key');
define('SECURE_AUTH_KEY',  'your-secure-auth-key');
define('LOGGED_IN_KEY',    'your-logged-in-key');
define('NONCE_KEY',        'your-nonce-key');
define('AUTH_SALT',        'your-auth-salt');
define('SECURE_AUTH_SALT', 'your-secure-auth-salt');
define('LOGGED_IN_SALT',   'your-logged-in-salt');
define('NONCE_SALT',       'your-nonce-salt');

// Absolute path to WordPress directory
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

require_once(ABSPATH . 'wp-settings.php');
?>