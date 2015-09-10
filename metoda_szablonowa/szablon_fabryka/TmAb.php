<?php

/**
 * Created by PhpStorm.
 * User: bswiatek
 * Date: 10.09.15
 * Time: 14:00
 */
abstract class TmAb
{
    protected $pix;
    protected $cap;

    public function templateMethod()
    {
        $this->addPix();
        $this->addCaption();
    }

    abstract protected function addPix();
    abstract protected function addCaption();
}