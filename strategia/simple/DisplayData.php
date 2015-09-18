<?php

/**
 * Created by bswiatek on 17.09.15.
 */
class DisplayData implements IStrategy
{
    private $tableMaster;
    private $hookup;
    private $sql;

    public function algorithm(Array $dataPack)
    {
        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = UniversalConnect::doConnect();

        $this->sql = "SELECT * FROM $this->tableMaster";

        if($result = $this->hookup->query($this->sql))
        {
            printf("Zwrócono %d wierszy. <p/>", $result->num_rows);
            echo "<table><tr>";

            while ($finfo = mysqli_fetch_field($result))
            {
                echo "<th>{$finfo->name}</th>";
            }
            echo "</tr>\n";

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