<?php
/**
 * Created by bswiatek on 11.09.15.
 */
interface IState
{
    public function turnLightOn();
    public function turnLightOff();
    public function turnBrighter();
    public function turnBrightest();
}