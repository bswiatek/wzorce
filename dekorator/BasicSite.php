<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 18.07.15
 * Time: 09:55
 */

class BasicSite extends IComponent{
    public function __construct()
    {
        $this->site="Podstawowa wersja";
    }

    public function getSite()
    {
        return $this->site;
    }
    public function getPrice()
    {
        return 1200;
    }
} 