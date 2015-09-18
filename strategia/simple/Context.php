<?php

/**
 * Created by bswiatek on 17.09.15.
 */
class Context
{
    private $strategy;

    public function __construct(IStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function algorithm()
    {
        $this->strategy->algorithm();
    }
}