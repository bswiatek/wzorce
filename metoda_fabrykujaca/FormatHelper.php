<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 28.06.15
 * Time: 20:59
 */

class FormatHelper {
    private $topper;
    private $bottom;

    public function addTop(){
        $this->topper = "<!doctype html><head><link rel='stylesheet' type='text/css' href='products.css' /><meta charset='utf-8'><title>Fabryka map</title></head><body>";
        return $this->topper;
    }

    public function closeUp(){
        $this->bottom = "</body></html>";
        return $this->bottom;
    }
} 