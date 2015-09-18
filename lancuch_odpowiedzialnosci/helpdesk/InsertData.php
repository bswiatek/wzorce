<?php

/**
 * Created by bswiatek on 18.09.15.
 */
ini_set("display_errors","1");
ERROR_REPORTING(E_ALL);
include_once("UniversalConnect.php");

class InsertData
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $this->tableMaster = "helpdesk";
        $this->hookup = UniversalConnect::doConnect();

        $chain = $this->hookup->real_escape_string($_POST['chain']);
        $response = $this->hookup->real_escape_string($_POST['response']);

        $sql = "INSERT INTO $this->tableMaster (chain, response) VALUES ('$chain', '$response')";

        if($this->hookup->query($sql))
        {
            printf("Zapytanie łańcucha: %s <BR> odpowiedź %s<br> została wstawiona do tabeli %s",$chain,$response,$this->tableMaster);
        }
        elseif( ($result = $this->hookup->query($sql))===false)
        {
            printf("Błąd w zapytaniu: %s <BR> całe zapytanie: %s<br>",$this->hookup->error, $sql);
            exit();
        }
        $this->hookup->close();
    }
}
$worker = new InsertData();