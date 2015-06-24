<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 24.06.15
 * Time: 21:18
 */
abstract class Creator
{
    protected abstract function factoryMethod();
    public function startFactory(){
        $mfg = $this->factoryMethod();
        return $mfg;
    }
}