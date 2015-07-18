<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 18.07.15
 * Time: 10:01
 */

class Video extends IComponent{
    public function __construct(IComponent $siteNow)
    {
        $this->site = $siteNow;
    }
    public function getSite()
    {
        $fmat = "<br>&nbsp;&nbsp; Wideo";
        return $this->site->getSite() . $fmat;
    }
    public function getPrice()
    {
        return 350 + $this->site->getPrice();
    }
} 