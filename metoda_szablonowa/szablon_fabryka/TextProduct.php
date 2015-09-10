<?php

/**
 * Created by bswiatek on 10.09.15.
 */
class TextProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "Modigliani malował podłużne twarze";
        return $this->mfgProduct;
    }
}