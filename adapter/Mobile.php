<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 13.07.15
 * Time: 20:52
 */

include_once("IMobileFormat.php");

class Mobile implements IMobileFormat{
    private $head="<!doctype html><html><head>";
    private $headClose="<meta charset='UTF-8'>
            <title>Komputery mobilne</title>";
    private $cap = "</body></html>";
    private $sampleText;

    public function formatCSS()
    {
        echo $this->head;
        echo "<link rel='stylesheet' href='mobile.css'>";
        echo $this->headClose;
        echo "<h1>Witajcie wszyscy!</h1>";
    }

    public function formatGraphics()
    {
        echo "<img class='pixRight' src='http://upload.wikimedia.org/wikipedia/commons/1/1e/Starkes_Ferry_Ocklawaha_River_north01.jpg' width=device-width height=device-height alt='river' />";
    }

    public function verticalLayout()
    {
        $textFile = "lorem.txt";
        $openText = fopen($textFile, 'r');
        $textInfo = fread($openText, filesize($textFile));
        fclose($openText);
        $this->sampleText=$textInfo;
        echo "<div>" . $this->sampleText . "</div>";
        echo "<p/><div>" . $this->sampleText . "</div>";
    }

    public function closeHTML()
    {
        echo $this->cap;
    }
}