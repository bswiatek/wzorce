<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 13.07.15
 * Time: 20:34
 */

include_once("Desktop.php");

class ClientDesktop extends Desktop{
    private $strona;
    public function __construct(){
        $this->strona = new Desktop();
        $this->strona->formatCSS();
        $this->strona->formatGraphics();
        $this->strona->horizontalLayout();
        $this->strona->closeHTML();
    }
}
$workser = new ClientDesktop();