<?php

/**
 * Created by bswiatek on 17.09.15.
 */
class DeleteRecord implements IStrategy
{
    private $tableMaster;
    private $dataPack;
    private $hookup;
    private $sql;

    public function algorithm(Array $dataPack)
    {
        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = UniversalConnect::doConnect();
        $this->dataPack = $dataPack;
        $destroy = $this->dataPack[0];
        $destroy = intval($destroy);

        $this->sql = "DELETE FROM $this->tableMaster WHERE id='$destroy'";

        if($result = $this->hookup->query($this->sql))
        {
            echo "Rekord #$destroy został usunięty z tabeli $this->tableMaster";
        }
        else
        {
            "Usunięcie nieudane: " . $this->hookup->error;
        }
    }
}