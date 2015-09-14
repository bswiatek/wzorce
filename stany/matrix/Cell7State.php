<?php

/**
 * Created by bswiatek on 14.09.15.
 */
class Cell7State implements IMatrix
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function goLeft()
    {
        //blad
    }
    public function goRight()
    {
        echo "eight";
        $this->context->setState($this->context->getCell8State());
    }
    public function goUp()
    {
        echo "four";
        $this->context->setState($this->context->getCell4State());
    }
    public function goDown()
    {
        //blad
    }
}