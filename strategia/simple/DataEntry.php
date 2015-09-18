<?php

/**
 * Created by bswiatek on 17.09.15.
 */
class DataEntry implements IStrategy
{
    private $tableMaser;
    private $dataPack;
    private $hookup;
    private $sql;

    public function algorithm(Array $dataPack)
    {
        $this->dataPack = $dataPack;
        $comval = $this->dataPack[0];
        $devdesval = $this->dataPack[1];
        $langval = $this->dataPack[2];
        $platval = $this->dataPack[3];
        $styleval = $this->dataPack[4];
        $deviceval = $this->dataPack[5];

        $this->tableMaser = IStrategy::TABLENOW;
        $this->hookup = UniversalConnect::doConnect();
        $this->sql = "INSERT INTO $this->tableMaser
        (
            company,
            devdes,
            lang,
            plat,
            style,
            device
        )
        VALUES
        (
            '$comval',
            '$devdesval',
            '$langval',
            '$platval',
            '$styleval',
            '$deviceval'
        )";

        if($this->hookup->query($this->sql))
        {
            printf("Dane wstawione do tabeli: $this->tableMaser");
        }
        elseif ( ($result = $this->hookup->query($this->sql)) === false )
        {
            printf("Błąd w zapytaniu: %s <br> Zapytanie: %s <br>", $this->hookup->error, $this->sql);
            exit();
        }

        $this->hookup->close();
    }
}