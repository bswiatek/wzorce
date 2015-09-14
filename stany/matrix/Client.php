<?php

/**
 * Created by bswiatek on 14.09.15.
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
        $this->context->doUp();
        $this->context->doRight();
        $this->context->doDown();
        $this->context->doDown();
        $this->context->doLeft();
        $this->context->doUp();
    }
}
$worker = new Client();