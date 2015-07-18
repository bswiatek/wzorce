<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 18.07.15
 * Time: 09:58
 */

class Maintence extends Decorator{
    public function __construct(IComponent $siteNow)
    {
        $this->site = $siteNow;
    }
    public function getSite()
    {
        $fmat = "<br>&nbsp;&nbsp; Obsługa";
        return $this->site->getSite() . $fmat;
    }
    public function getPrice()
    {
        return 950 + $this->site->getPrice();
    }
} 