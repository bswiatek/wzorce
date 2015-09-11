<?php

/**
 * Created by bswiatek on 11.09.15.
 */
class BrightestState implements IState
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function turnLightOn()
    {
        echo "zonk<br>";
    }

    public function turnLightOff()
    {
        echo "Wylaczone!<br>";
        $this->context->setState($this->context->getOffState());
    }

    public function turnBrighter()
    {
        echo "zonk<br>";
    }

    public function turnBrightest()
    {
        echo "zonk<br>";
    }
}