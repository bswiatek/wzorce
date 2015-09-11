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
        $this->context->turnOnLight();
        $this->context->turnOffLight();
        $this->context->turnOffLight();
    }

}

$worker = new Client();