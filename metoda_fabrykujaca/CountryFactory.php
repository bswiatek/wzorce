<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 28.06.15
 * Time: 20:45
 */

include_once('Creator.php');
include_once('Product.php');

class CountryFactory extends Creator{
    private $country;
    protected function factoryMethod(Product $product){
        $this->country = $product;
        return($this->country->getProperties());
    }
} 