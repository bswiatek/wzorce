<?php
/**
 * Created by bswiatek on 15.09.15.
 */
interface IConnectInfo
{
    const HOST = "";
    const UNAME = "";
    const PW = "";
    const DBNAME = "";
    public function doConnect();
}