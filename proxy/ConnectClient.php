<?php
/**
 * Created by bswiatek on 15.09.15.
 */
include_once('UniversalConnect.php');
class ConnectClient
{
    private $hookup;
    public function __construct()
    {
        $this->hookup = UniversalConnect::doConnect();
    }
}

$worker = new ConnectClient();