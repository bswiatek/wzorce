<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 18.07.15
 * Time: 10:05
 */
function __autoload($class_name)
{
    include $class_name . '.php';
}

class Client{
    private $basicSite;

    public function __construct()
    {
        $this->basicSite = new BasicSite();
        $this->basicSite = $this->wrapComponent($this->basicSite);

        $siteShow = $this->basicSite->getSite();
        $format = "<br>&nbsp;&nbsp;<strong>Suma= $";
        $price = $this->basicSite->getPrice();

        echo $siteShow . $format . $price . "</strong><p/>";
    }

    public function wrapComponent(IComponent $component)
    {
        $component = new Maintence($component);
        $component = new Video($component);
        $component = new DataBase($component);
        return $component;
    }

}
$worker = new Client();