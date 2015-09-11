<?php

/**
 * Created by bswiatek on 11.09.15.
 */
class OffState implements IState
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function turnLightOn()
    {
        echo "Wlaczone!<br>";
        $this->context->setState($this->context->getOnState());
    }

    public function turnLightOff()
    {
        echo "zonk<br>";
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