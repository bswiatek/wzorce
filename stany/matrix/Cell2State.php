<?php

/**
 * Created by bswiatek on 14.09.15.
 */
class Cell2State implements IMatrix
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function goLeft()
    {
        echo "one";
        $this->context->setState($this->context->getCell1State());
    }
    public function goRight()
    {
        echo "three";
        $this->context->setState($this->context->getCell3State());
    }
    public function goUp()
    {
        //blad
    }
    public function goDown()
    {
        echo "five";
        $this->context->setState($this->context->getCell5State());
    }
}