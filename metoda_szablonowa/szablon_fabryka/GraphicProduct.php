<?php

/**
 * Created by bswiatek on 10.09.15.
 */
class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct="<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Amedeo_Modigliani_053.jpg/220px-Amedeo_Modigliani_053.jpg' />";
        return $this->mfgProduct;
    }
}