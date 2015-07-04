<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 04.07.15
 * Time: 12:56
 */

function __autoload($class_name)
{
    include $class_name . ".php";
}

class Client {
    private $fly1;
    private $fly2;

    private $c1fly;
    private $c2fly;
    private $updatedCloneFly;

    public function __construct()
    {
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();

        $this->c1fly = clone $this->fly1;
        $this->c2fly = clone $this->fly2;
        $this->updatedCloneFly = clone $this->fly2;

        $this->c1fly->mated="true";
        $this->c2fly->fecundity="186";

        $this->updatedCloneFly->eyeColor = "fioletowy";
        $this->updatedCloneFly->wingBeat = "220";
        $this->updatedCloneFly->unitEyes = "750";
        $this->updatedCloneFly->fecundity = "92";

        $this->showFly($this->c1fly);
        $this->showFly($this->c2fly);
        $this->showFly($this->updatedCloneFly);
    }

    private function showFly(Prototype $fly)
    {
        echo "Kolor oczu: " . $fly->eyeColor . "<br>";
        echo "Uderzenia skrzydeł: " . $fly->wingBeat . "<br>";
        echo "Jednostki oczu: " . $fly->unitEyes . "<br>";
        $genderNow = $fly::gender;
        echo "Płeć: " . $genderNow . "<br>";

        if ($genderNow=="SAMICA"){
            echo "Liczba jaj: " . $fly->fecundity . "<br>";
        } else{
            echo "Posiada parę: " . $fly->mated . "<p/>";
        }
    }
}
$worker = new Client;