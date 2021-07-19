<?php
define('PATH', 'C:\Users\User\Downloads\open_server_5_3_7_basic\OpenServer\domains\park\\');

define('DB_HOST', 'localhost');
define('DB_NAME', 'park');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_CHARSET', 'utf8mb4_unicode_ci');

spl_autoload_register('init' );

function init($className) {
    include_once PATH."functions\\$className.php";
}