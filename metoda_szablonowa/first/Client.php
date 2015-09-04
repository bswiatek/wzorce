<?php

/**
 * Created by PhpStorm.
 * User: bswiatek
 * Date: 04.09.15
 * Time: 15:37
 */

function __autoload($class_name)
{
    include $class_name . ".php";
}

class Client
{
    function __construct()
    {
        $caption = "Modigliani malował podłużne twarze";
        $mo = new ConcreteClass();
        $mo->templateMethod("https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Amedeo_Modigliani_053.jpg/220px-Amedeo_Modigliani_053.jpg", $caption);
    }
}
$worker = new Client();