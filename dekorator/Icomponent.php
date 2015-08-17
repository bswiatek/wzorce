<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 18.07.15
 * Time: 09:53
 */

abstract class IComponent {
    protected $site;
    abstract public function getSite();
    abstract public function getPrice();

} 