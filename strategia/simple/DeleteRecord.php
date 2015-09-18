<?php

/**
 * Created by bswiatek on 17.09.15.
 */
class DeleteRecord implements IStrategy
{
    public function algorithm()
    {
        $hookup=UniversalConnect::doConnect();
        $test = $hookup->real_escape_string($_POST['data']);
        echo "Usunięto: " .$test . "<br>";
    }
}