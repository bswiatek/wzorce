<?php

/**
 * Created by bswiatek on 10.09.15.
 */
class TextFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return($product->getProperties());
    }
}