<?php

/**
 * Created by PhpStorm.
 * User: bswiatek
 * Date: 10.09.15
 * Time: 14:01
 */
class TmFac extends TmAb
{
    protected function addPix()
    {
        $this->pix = new GraphicFactory();
        echo $this->pix->doFactory();
    }
    protected function addCaption()
    {
        $this->cap = new TextFactory();
        echo $this->cap->doFactory();
    }
}