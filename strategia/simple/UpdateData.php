<?php

/**
 * Created by bswiatek on 17.09.15.
 */
class UpdateData implements IStrategy
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
        $changeField = $this->dataPack[0];
        $oldData = $this->dataPack[1];
        $newData = $this->dataPack[2];

        $this->sql = "UPDATE $this->tableMaster SET $changeField='$newData' WHERE $changeField='$oldData'";

        if($result = $this->hookup->query($this->sql))
        {
            echo "$changeField zmienione z $oldData na $newData";
        }
        else
        {
            "zmiana nieudana: " . $this->hookup->error;
        }
    }
}