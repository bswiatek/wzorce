<?php

/**
 * Created by bswiatek on 17.09.15.
 */
class DisplayData implements IStrategy
{
    public function algorithm()
    {
        $hookup=UniversalConnect::doConnect();
        $test = "Oto wszystkie dane!";
        echo  $test . "<br>";
    }
}