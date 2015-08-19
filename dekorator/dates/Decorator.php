<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 19.08.15
 * Time: 21:21
 */

namespace dates;


abstract class Decorator extends IComponent{
    public function getDate()
    {
        if($this->date != null)
        {
            $this->date->getDate();
        }
    }
    public function setAge($ageNow)
    {
        $this->ageGroup=$ageNow;
    }
    public function getAge()
    {
        return $this->ageGroup;
    }
} 