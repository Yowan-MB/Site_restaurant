<?php

session_start();

spl_autoload_register('autoload');

function autoload($class_name)
{

    $array_paths = array(
        'database/',
        'app/classes/',
        'models/',
        'controllers/',
        '../database/',
        '../app/classes/',
        '../models/',
        '../controllers/'
    );

    foreach ($array_paths as $path) {

        $file = sprintf($path . '%s.php', $class_name);

        //If the file exist then include it
        if (is_file($file)) {
            include_once $file;
        }
    }
}
