<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 04.07.15
 * Time: 12:41
 */

class HelloClone {
    private $builtInConstructor;
    public function __construct()
    {
        echo "Witaj, klonie! <br>";
        $this->builtInConstructor = "Constructor creation<br>";
    }
    public function doWork()
    {
        echo $this->builtInConstructor;
        echo "Wykonuję pracę!<br>";
    }
}

$original = new HelloClone();
$original->doWork();

$cloneIt = clone $original;
$cloneIt->doWork();