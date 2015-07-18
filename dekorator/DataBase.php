<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 18.07.15
 * Time: 10:02
 */

class DataBase extends IComponent{
    public function __construct(IComponent $siteNow)
    {
        $this->site = $siteNow;
    }
    public function getSite()
    {
        $fmat = "<br>&nbsp;&nbsp; Baza danych MySQL";
        return $this->site->getSite() . $fmat;
    }
    public function getPrice()
    {
        return 800 + $this->site->getPrice();
    }
} 