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
        $this->tableMaster = "helpdesk";
        $this->hookup = UniversalConnect::doConnect();

        $sql = "CREATE TABLE IF NOT EXISTS $this->tableMaster (
                id          INT NOT NULL AUTO_INCREMENT,
                chain       VARCHAR(3),
                response    TEXT,
                PRIMARY KEY (id))";

        if($this->hookup->query($sql) === true)
        {
            printf("Tabela $this->tableMaster zostala utworzona <br>");
        }

        $this->hookup->close();
    }
}
$worker = new CreateTable();