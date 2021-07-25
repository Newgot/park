<?php

spl_autoload_register('class_init');

function class_init($className) {
    $paths = include BASE_PATH.'functions/paths.php';
    foreach ($paths as $path) {
        $filename = BASE_PATH.$path.'/'.$className;
        if (file_exists($filename.'.php')) include_once $filename.'.php';
        if (file_exists($filename.'Interface.php')) include_once $filename.'Interface.php';

    }
}