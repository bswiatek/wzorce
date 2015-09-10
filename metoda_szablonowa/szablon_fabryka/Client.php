<?php

/**
 * Created by PhpStorm.
 * User: bswiatek
 * Date: 10.09.15
 * Time: 13:56
 */
function __autoload($class_name)
{
    include $class_name . '.php';
}

class Client
{
    function __construct()
    {
        $mo = new TmFac();
        $mo->templateMethod();
    }
}
$worker = new Client();