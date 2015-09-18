<?php

/**
 * Created by bswiatek on 18.09.15.
 */
class Request
{
    private $value;

    public function __construct($service)
    {
        $this->value = $service;
    }
    public function getService()
    {
        return $this->value;
    }
}