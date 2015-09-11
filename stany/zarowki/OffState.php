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
        echo "Wlaczyc swiatla!<br>";
        $this->context->setState($this->context->getOnState());
    }

    public function turnLightOff()
    {
        echo "Swiatlo jest juz wylaczone -> nic nie rob<br>";
    }
}