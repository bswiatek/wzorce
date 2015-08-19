<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 19.08.15
 * Time: 21:01
 */

namespace dates;


class Female extends IComponent{
    public function __construct()
    {
        $this->date="Kobieta";
        $this->setFeature("<br>Cechy dziewczyny programistki: ");
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getAge()
    {
        return $this->ageGroup;
    }
    public function setAge($ageNow)
    {
        $this->ageGroup=$ageNow;
    }
    public function getFeature()
    {
        return $this->feature;
    }
    public function setFeature($fea)
    {
        return $this->feature=$fea;
    }
} 