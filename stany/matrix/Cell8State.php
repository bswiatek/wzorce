<?php

/**
 * Created by bswiatek on 14.09.15.
 */
class Cell8State implements IMatrix
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function goLeft()
    {
        echo "seven";
        $this->context->setState($this->context->getCell7State());
    }
    public function goRight()
    {
        echo "nine";
        $this->context->setState($this->context->getCell9State());
    }
    public function goUp()
    {
        echo "five";
        $this->context->setState($this->context->getCell5State());
    }
    public function goDown()
    {
        //blad
    }
}