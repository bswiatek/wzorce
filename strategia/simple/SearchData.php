<?php

/**
 * Created by bswiatek on 17.09.15.
 */
class SearchData implements IStrategy
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
        $field = $this->dataPack[0];
        $term = $this->dataPack[1];

        $this->sql = "SELECT * FROM $this->tableMaster WHERE $field='$term'";

        if($result = $this->hookup->query($this->sql))
        {
            echo "<table><tr>";

            while ($row = mysqli_fetch_row($result))
            {
                echo "<tr>";
                foreach($row as $cell)
                {
                    echo "<td>$cell</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            $result->close();
        }
        $this->hookup->close();
    }
}