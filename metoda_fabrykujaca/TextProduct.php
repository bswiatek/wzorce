<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 24.06.15
 * Time: 21:37
 */
include_once('Product.php');
class TextProduct implements Product
{
    private $mfgProduct;
    public function getProperties()
    {
        $this->mfgProduct="To jest tekst";
        return $this->mfgProduct;
    }
}