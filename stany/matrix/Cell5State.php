<?php

/**
 * Created by bswiatek on 14.09.15.
 */
class Cell5State implements IMatrix
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function goLeft()
    {
        echo "four";
        $this->context->setState($this->context->getCell4State());
    }
    public function goRight()
    {
        echo "six";
        $this->context->setState($this->context->getCell6State());
    }
    public function goUp()
    {
        echo "two";
        $this->context->setState($this->context->getCell2State());
    }
    public function goDown()
    {
        echo "eight";
        $this->context->setState($this->context->getCell8State());
    }
}