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
        echo "Swiatlo jest juz wlaczone -> nic nie rob<br>";
    }

    public function turnLightOff()
    {
        echo "Wylaczyc swiatla!<br>";
        $this->context->setState($this->context->getOffState());
    }
}