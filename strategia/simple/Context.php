<?php

/**
 * Created by bswiatek on 17.09.15.
 */
class Context
{
    private $strategy;
    private $dataPack;

    public function __construct(IStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function algorithm(Array $dataPack)
    {
        $this->dataPack = $dataPack;
        $this->strategy->algorithm($this->dataPack);
    }
}