<?php

/**
 * Created by bswiatek on 25.09.15.
 */
function __autoload($class_name)
{
    include $class_name . '.php';
}
class Client
{
    public function __construct()
    {
        $sub = new ConcreteSubject();

        $ob1 = new ConcreteObserverPhone();
        $ob2 = new ConcreteObserverTablet();
        $ob3 = new ConcreteObserverDT();

        $sub->attachObser($ob1);
        $sub->attachObser($ob2);
        $sub->attachObser($ob3);
        $sub->setState("decoCar");
    }
}
$worker = new Client();