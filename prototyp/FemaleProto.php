<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 04.07.15
 * Time: 12:52
 */
include_once("IPrototype.php");

class FemaleProto extends Prototype{
    const gender="SAMICA";
    public $fecundity;

    public function __construct()
    {
        $this->eyeColor = "czerwony";
        $this->wingBeat = "220";
        $this->unitEyes = "760";
    }
    function __clone() {}
} 