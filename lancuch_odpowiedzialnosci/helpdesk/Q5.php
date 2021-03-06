<?php

/**
 * Created by bswiatek on 18.09.15.
 */
class Q5 extends Handler
{
    public function setSuccessor($nextService)
    {
        $this->successor = $nextService;
    }

    public function handleRequest($request)
    {
        $this->handle = "q5";
        if ($request->getService() == $this->handle)
        {
            $this->tableMaster="helpdesk";
            $this->hookup = UniversalConnect::doConnect();

            $this->sql = "SELECT response FROM $this->tableMaster WHERE chain='$this->handle'";

            if($result=$this->hookup->query($this->sql))
            {
                $row = $result->fetch_assoc();
                echo $row["response"];
            }
            $this->hookup->close();
        }
        else if ($this->successor != NULL)
        {
            $this->successor->handleRequest ($request);
        }
    }
}