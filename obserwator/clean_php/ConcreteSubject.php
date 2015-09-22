<?php

/**
 * Created by bswiatek on 22.09.15.
 */
class ConcreteSubject extends Subject
{
    public function setState($stateSet)
    {
        $this->stateNow=$stateSet;
        $this->notify();
    }

    public function getState()
    {
        return $this->stateNow;
    }
}