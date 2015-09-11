<?php

/**
 * Created by bswiatek on 11.09.15.
 */
function __autoload($class_name)
{
    include $class_name . '.php';
}
class Client
{
    private $context;

    public function __construct()
    {
        $this->context = new Context();
        $this->context->turnOnLight();
        $this->context->turnBrighterLight();
        $this->context->turnBrightestLight();
        $this->context->turnOffLight();
        $this->context->turnBrighterLight();
    }

}

$worker = new Client();