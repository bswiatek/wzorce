<?php
/**
 * Created by bswiatek on 15.09.15.
 */
include_once('IConnectInfo.php');

class UniversalConnect implements IConnectInfo
{
    private static $server = IConnectInfo::HOST;
    private static $port = IConnectInfo::PORT;
    private static $currentDB = IConnectInfo::DBNAME;
    private static $user = IConnectInfo::UNAME;
    private static $pass = IConnectInfo::PW;
    private static $hookup;

    public function doConnect()
    {
        self::$hookup = mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB, self::$port);

        if (self::$hookup)
        {
            echo "polaczenie udane";
        } elseif (mysqli_connect_error(self::$hookup))
        {
            echo('Oto blad: '. mysqli_connect_error());
        }

        return self::$hookup;
    }
}