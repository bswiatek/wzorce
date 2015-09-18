<?php

/**
 * Created by bswiatek on 18.09.15.
 */
include_once('UniversalConnect.php');
class CreateTable
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $this->tableMaster = "survey";
        $this->hookup = UniversalConnect::doConnect();

        $sql = "CREATE TABLE IF NOT EXISTS $this->tableMaster (
                id          SERIAL,
                company     NVARCHAR(40),
                devdes      NVARCHAR(12),
                lang        NVARCHAR(15),
                plat        NVARCHAR(15),
                style       NVARCHAR(20),
                device      NVARCHAR(12),
                PRIMARY KEY (id))";

        if($this->hookup->query($sql) === true)
        {
            printf("Tabela $this->tableMaster zostala utworzona <br>");
        }

        $this->hookup->close();
    }
}
$worker = new CreateTable();