<?php

/**
 * Created by bswiatek on 14.09.15.
 */
class Cell9State implements IMatrix
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function goLeft()
    {
        echo "eight";
        $this->context->setState($this->context->getCell8State());
    }
    public function goRight()
    {
        //blad
    }
    public function goUp()
    {
        echo "six";
        $this->context->setState($this->context->getCell6State());
    }
    public function goDown()
    {
        //blad
    }
}