<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 24.06.15
 * Time: 21:20
 */
include_once('Creator.php');
include_once('GraphicProduct.php');
class GraphicFactory extends Creator
{
    protected function factoryMethod(){
        $product = new GraphicProduct();
        return($product->getProperties());
    }
}