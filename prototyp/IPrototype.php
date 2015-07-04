<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 04.07.15
 * Time: 12:50
 */

abstract class Prototype {
    public $eyeColor;
    public $wingBeat;
    public $unitEyes;

    abstract function __clone();
} 