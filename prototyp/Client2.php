<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 04.07.15
 * Time: 15:56
 */
function __autoload($class_name){
    include $class_name . '.php';
}
class Client2 {
    private $market;
    private $manage;
    private $engineer;

    public function __construct()
    {
        $this->makeConProto();

        $Tess = clone $this->market;
        $this->setEmployee($Tess, "Teresa Kowalska",101, "tk101-1234", "tess.png");
        $this->showEmployee($Tess);

        $Jacob = clone $this->market;
        $this->setEmployee($Jacob, "Jakub Jonas",102, "jj101-1234", "jacob.png");
        $this->showEmployee($Jacob);

        $Ricky = clone $this->manage;
        $this->setEmployee($Ricky, "Ryszard Rodzyn",203, "rr101-1234", "ricky.png");
        $this->showEmployee($Ricky);

        $Olivia = clone $this->engineer;
        $this->setEmployee($Olivia, "Olivia Perzyna",302, "op101-1234", "olivia.png");
        $this->showEmployee($Olivia);

        $John = clone $this->engineer;
        $this->setEmployee($John, "Jan Jackowski",301, "jj101-1234", "john.png");
        $this->showEmployee($John);
    }

    private function makeConProto(){
        $this->market = new Marketing();
        $this->manage = new Management();
        $this->engineer = new Engineering();
    }

    private function showEmployee(IAcmePrototype $employeeNow){
        $px = $employeeNow->getPict();
        echo "<img src=$px ><br>";
        echo $employeeNow->getName() . "<br>";
        echo $employeeNow->getDept() . ": " . $employeeNow::UNIT . "<br>";
        echo $employeeNow->getId() . "<p/>";
    }

    private function setEmployee(IAcmePrototype $employeeNow, $nm, $dp, $id, $px){
        $employeeNow->setName($nm);
        $employeeNow->setDept($dp);
        $employeeNow->setId($id);
        $employeeNow->setPict("pix/$px");
    }
}
$worker = new Client2();