<?php

/**
 * Created by bswiatek on 22.09.15.
 */

function __autoload($class_name)
{
    include $class_name . '.php';
}

class Client
{
    public function __construct()
    {
        echo "Tworzenie 3 konkretnych obserwatorów i konkretnego podmiotu <BR>";
        $ob1 = new ConcreteObserver();
        $ob2 = new ConcreteObserver();
        $ob3 = new ConcreteObserver();

        $subject = new ConcreteSubject();
        $subject->setObservers();
        $subject->setData("Oto twoje dane!");
        $subject->attach($ob1);
        $subject->attach($ob2);
        $subject->attach($ob3);

        $subject->notify();

        echo "Odpięcie obserwatora ob3. Powiadamiane będą ob1 i ob2<BR>";
        $subject->detach($ob3);
        $subject->notify();

        echo "Reset danych, podpięcie ob3 i dopięcie ob2, tylko ob1 i ob3 będą powiadamiane: <BR>";
        $subject->setData("Dane dla obiektów ob1 i ob3");
        $subject->attach($ob3);
        $subject->detach($ob2);
        $subject->notify();
    }
}

$worker = new Client();