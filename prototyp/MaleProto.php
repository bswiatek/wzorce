<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 04.07.15
 * Time: 12:52
 */
include_once("IPrototype.php");

class MaleProto extends Prototype{
    const gender="SAMIEC";
    public $mated;

    public function __construct()
    {
        $this->eyeColor = "czerwony";
        $this->wingBeat = "220";
        $this->unitEyes = "760";
    }
    function __clone() {}
} 