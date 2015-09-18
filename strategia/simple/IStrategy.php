<?php

/**
 * Created by bswiatek on 17.09.15.
 */
interface IStrategy
{
    const TABLENOW = "survey";
    public function algorithm(Array $dataPack);
}