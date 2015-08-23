<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 23.08.15
 * Time: 21:44
 */



function __autoload($class_name){
    include $class_name . '.php';
}

class Client {

    private $hotDate;

    public function __construct()
    {
        $this->hotDate = new Female();
        $this->hotDate->setAge("Grupa wiekowa 4");
        echo $this->hotDate->getAge();
        $this->hotDate = $this->wrapComponent($this->hotDate);
        echo $this->hotDate->getFeature();
    }

    private function wrapComponent(IComponent $component)
    {
        $component=new ProgramLang($component);
        $component->setFeature("php");
        $component=new Hardware($component);
        $component->setFeature("lin");
        $component=new Food($component);
        $component->setFeature("veg");
        return $component;
    }

}
$worker=new Client();