<?php

/**
 * Created by bswiatek on 21.09.15.
 */
class ConcreteObserver implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo $subject->getData() . "<br>";
    }
}