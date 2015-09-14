<?php

/**
 * Created by bswiatek on 14.09.15.
 */
class Cell3State implements IMatrix
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function goLeft()
    {
        echo "two";
        $this->context->setState($this->context->getCell2State());
    }
    public function goRight()
    {
        //blad
    }
    public function goUp()
    {
        //blad
    }
    public function goDown()
    {
        echo "six";
        $this->context->setState($this->context->getCell6State());
    }
}