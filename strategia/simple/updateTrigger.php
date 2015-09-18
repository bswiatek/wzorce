<?php
/**
 * Created by bswiatek on 17.09.15.
 */
function __autoload($class_name)
{
    include $class_name . '.php';
}
$trigger = new Client();
$trigger->changeData();