<?php

/**
 * Created by bswiatek on 14.09.15.
 */
class Cell1State implements IMatrix
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
        echo "two";
        $this->context->setState($this->context->getCell2State());
    }
    public function goUp()
    {
        //blad
    }
    public function goDown()
    {
        echo "four";
        $this->context->setState($this->context->getCell4State());
    }
}