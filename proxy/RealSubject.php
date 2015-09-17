<?php

/**
 * Created by bswiatek on 16.09.15.
 */
include_once("ISubject.php");
class RealSubject implements ISubject
{
    public function request()
    {
        $practice=<<<REQUEST
-korzystaj z interfejsów, nie implementacji
-enkapsuluj swoje obiekty
-kompozycja jest lepsza od dziedziczenia
-klasa powinna posiadać tylko jedną odpowiedzialnośc
REQUEST;
echo $practice;
    }
}