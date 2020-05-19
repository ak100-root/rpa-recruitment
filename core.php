<?php
date_default_timezone_set('PRC');

/**************** autoload class start ***************/

function myAutoload($class)
{

    $dir = './';
    set_include_path(get_include_path() . PATH_SEPARATOR . $dir);
    $class = str_replace('\\', '/', $class) . '.php';
    require_once $class;

}
spl_autoload_register('myAutoload');