<?php

/**
 * Created by bswiatek on 14.09.15.
 */
class Cell6State implements IMatrix
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function goLeft()
    {
        echo "five";
        $this->context->setState($this->context->getCell5State());
    }
    public function goRight()
    {
        //blad
    }
    public function goUp()
    {
        echo "three";
        $this->context->setState($this->context->getCell3State());
    }
    public function goDown()
    {
        echo "nine";
        $this->context->setState($this->context->getCell9State());
    }
}