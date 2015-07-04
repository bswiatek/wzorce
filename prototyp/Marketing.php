<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 04.07.15
 * Time: 15:42
 */
include_once("IAcmePrototype.php");

class Marketing extends IAcmePrototype {
    const UNIT="Marketing";
    private $sales = "sprzedaz";
    private $promotion = "promocja";
    private $strategic = "planowanie strategiczne";

    public function setDept($orgCode)
    {
        switch($orgCode)
        {
            case 101:
                $this->dept = $this->sales;
                break;

            case 102:
                $this->dept = $this->promotion;
                break;

            case 103:
                $this->dept = $this->strategic;
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