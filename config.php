<?
define('PATH', 'C:/OpenServer/domains/test1');

define('DB_HOST', 'localhost');
define('DB_NAME', 'parks');
define('DB_USER', 'root');
define('DB__PASSWORD', 'root');

require_once PATH.'/php-activerecord/ActiveRecord.php';

 ActiveRecord\Config::initialize(function($cfg)
4 {
5     $cfg->set_model_directory('models');
6     $cfg->set_connections(array(
7         'development' => 'mysql://'.DB_USER.':'.DB__PASSWORD.'@'.DB_HOST.'/'.DB_NAME));
8 });