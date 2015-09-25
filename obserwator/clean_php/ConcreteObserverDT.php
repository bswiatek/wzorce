<?php

/**
 * Created by bswiatek on 25.09.15.
 */
class ConcreteObserverDT implements Observer
{
    private $currentState;
    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        echo "desktop $this->currentState <BR>";
    }
}