<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 04.07.15
 * Time: 12:31
 */

abstract class CloneMe {
    public $name;
    public $picture;
    abstract function __clone();
} 