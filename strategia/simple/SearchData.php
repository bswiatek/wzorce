<?php

/**
 * Created by bswiatek on 17.09.15.
 */
class SearchData implements IStrategy
{
    public function algorithm()
    {
        $hookup=UniversalConnect::doConnect();
        $test = $hookup->real_escape_string($_POST['data']);
        echo "Znalezione dane:  " .$test . "<br>";
    }
}