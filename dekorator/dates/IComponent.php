<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 19.08.15
 * Time: 20:58
 */

namespace dates;


class IComponent {
    protected $date;
    protected $ageGroup;
    protected $feature;

    abstract public function getDate();
    abstract public function setAge($ageNow);
    abstract public function getAge();
    abstract public function setFeature($fea);
    abstract public function getFeature();
} 