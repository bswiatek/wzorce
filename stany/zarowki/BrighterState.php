<?php

/**
 * Created by bswiatek on 11.09.15.
 */
class BrighterState implements IState
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
        echo "zonk<br>";
    }

    public function turnBrightest()
    {
        echo "Najjasniejsze!<br>";
        $this->context->setState($this->context->getBrightestState());
    }
}