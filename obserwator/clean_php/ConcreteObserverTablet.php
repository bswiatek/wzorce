<?php

/**
 * Created by bswiatek on 25.09.15.
 */
class ConcreteObserverTablet implements Observer
{
    private $currentState;
    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        echo "tablet $this->currentState <BR>";
    }
}