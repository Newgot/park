<?php

spl_autoload_register('class_init');

function class_init($className) {
    $paths = include_once BASE_PATH.'functions/paths.php';
    foreach ($paths as $path) {
        include_once BASE_PATH.$path.'/'.$className.'.php';
    }
}