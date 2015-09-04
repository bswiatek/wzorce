<?php

/**
 * Created by PhpStorm.
 * User: bswiatek
 * Date: 04.09.15
 * Time: 15:32
 */

include_once("AbstractClass.php");
class ConcreteClass extends AbstractClass
{
    protected function addPix($pix)
    {
        $this->pix = $pix;
        $formatter = "<img src=$this->pix /><br>";
        echo $formatter;
    }
    protected function addCaption($cap)
    {
        $this->cap = $cap;
        echo "<em>Podpis:</em>" . $this->cap . "<br>";
    }
}