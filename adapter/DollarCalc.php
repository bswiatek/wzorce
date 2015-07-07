<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 07.07.15
 * Time: 20:54
 */

class DollarCalc {
    private $dollar;
    private $product;
    private $service;
    public $rate = 1;

    public function requestCalc($productNow,$serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->dollar = $this->product + $this->service;
        return $this->requestTotal();
    }

    public function requestTotal()
    {
        $this->dollar *= $this->rate;
        return $this->dollar;
    }
} 