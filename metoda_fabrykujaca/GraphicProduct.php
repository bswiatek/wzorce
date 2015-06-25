<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 24.06.15
 * Time: 21:39
 */
include_once("Product.php");
class GraphicProduct implements Product
{
    private $mfgProduct;
    public function getProperties()
    {
        $this->mfgProduct = "<!doctype html><html><head><meta charset='UTF-8' />";
        $this->mfgProduct .= "<title>Fabryka map</title>";
        $this->mfgProduct .= "</head><body>";
        $this->mfgProduct .= "<img src='https://upload.wikimedia.org/wikipedia/commons/6/64/Mali-CIA_WFB_Map.png' />";
        $this->mfgProduct .= "</body></html>";
        return $this->mfgProduct;
    }
}