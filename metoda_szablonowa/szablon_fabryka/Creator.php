<?php

/**
 * Created by PhpStorm.
 * User: bswiatek
 * Date: 10.09.15
 * Time: 14:33
 */
abstract class Creator
{
    protected abstract function factoryMethod();

    public function doFactory()
    {
        $mfg = $this->FactoryMethod();
        return $mfg;
    }
}