<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 04.07.15
 * Time: 15:42
 */
include_once("IAcmePrototype.php");

class Management extends IAcmePrototype {
    const UNIT="Zarzad";
    private $research = "badania";
    private $plan = "planowanie";
    private $operations = "operacje";

    public function setDept($orgCode)
    {
        switch($orgCode)
        {
            case 201:
                $this->dept = $this->research;
                break;

            case 202:
                $this->dept = $this->plan;
                break;

            case 203:
                $this->dept = $this->operations;
                break;

            default:
                $this->dept = "Nierozpoznany kod";
        }
    }

    public function getDept(){
        return $this->dept;
    }

    function __clone() {}
} 