<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 24.06.15
 * Time: 21:20
 */
include_once('Creator.php');
include_once('TextProduct.php');
class TextFactory extends Creator
{
    protected function factoryMethod(){
        $product = new TextProduct();
        return($product->getProperties());
    }
}