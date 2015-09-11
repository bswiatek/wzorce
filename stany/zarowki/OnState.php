<?php

/**
 * Created by bswiatek on 11.09.15.
 */
class OnState implements IState
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
        echo "zonk<br>";
    }

    public function turnBrighter()
    {
        echo "Jasniejsze<br>";
        $this->context->setState($this->context->getBrighterState());
    }

    public function turnBrightest()
    {
        echo "zonk<br>";
    }
}