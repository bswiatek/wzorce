<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 04.07.15
 * Time: 12:32
 */

class Person extends CloneMe {
    public function __construct()
    {
        $this->picture="http://www.reggieslive.com/wp-content/uploads/MAN-AND-HIS-CLONE-507x530.jpg";
        $this->name = "Oryginalny";
    }

    public function display()
    {
        echo "<img src='$this->picture'>";
        echo "<br>$this->name <p/>";
    }

    function __clone() {}
}

$worker=new Person();
$worker->display();

$slacker = clone $worker;
$slacker->name = "Sklonowany";
$slacker->display();