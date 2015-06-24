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
        $this->mfgProduct="To jest grafika <3";
        return $this->mfgProduct;
    }
}