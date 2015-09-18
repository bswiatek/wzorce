<?php

/**
 * Created by bswiatek on 18.09.15.
 */
abstract class Handler
{
    abstract public function handleRequest($request);
    abstract public function setSuccessor($nextService);
    protected $successor;
    protected $hookup;
    protected $tableMaster;
    protected $sql;
    protected $handle;
}