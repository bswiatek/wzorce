<?php

/**
 * Created by bswiatek on 10.09.15.
 */
class GraphicFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new GraphicProduct();
        return($product->getProperties());
    }
}