<?php

/**
 * Created by bswiatek on 17.09.15.
 */
class DataEntry implements IStrategy
{
    public function algorithm()
    {
        $hookup=UniversalConnect::doConnect();
        $test = $hookup->real_escape_string($_POST['data']);
        echo "Następujące dane zostały zapisane: " .$test . "<br>";
    }
}