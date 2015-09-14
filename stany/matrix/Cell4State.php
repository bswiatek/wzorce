<?php

/**
 * Created by bswiatek on 14.09.15.
 */
class Cell4State implements IMatrix
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
        echo "five";
        $this->context->setState($this->context->getCell5State());
    }
    public function goUp()
    {
        echo "one";
        $this->context->setState($this->context->getCell1State());
    }
    public function goDown()
    {
        echo "seven";
        $this->context->setState($this->context->getCell7State());
    }
}