<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 04.07.15
 * Time: 15:24
 */

abstract class IAcmePrototype {
    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    abstract function setDept($orgCode);
    abstract function getDept();

    public function setName($emName){
        $this->name = $emName;
    }
    public function getName(){
        return $this->name;
    }
    public function setId($emId){
        $this->id = $emId;
    }
    public function getId(){
        return $this->id;
    }
    public function setPict($emPict){
        $this->employeePic = $emPict;
    }
    public function getPict(){
        return $this->employeePic;
    }

    abstract function __clone();
} 