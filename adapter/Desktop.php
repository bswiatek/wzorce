<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 11.07.15
 * Time: 19:39
 */

include_once("IFormat.php");

class Desktop implements IFormat{
    private $head="<!doctype html><html><head>";
    private $headClose="<meta charset='UTF-8'>
            <title>Komputery osobiste</title>";
    private $sampleText;

    public function formatCSS()
    {
        echo $this->head;
        echo "<link rel='desktop.css'>";
        echo $this->headClose;
        echo "<h1>Witajcie wszyscy!</h1>";
    }

    public function formatGraphics()
    {
        echo "<img class='pixRight' src='https://phayemuss.files.wordpress.com/2009/09/p9290055.jpg' width='720' height='480' alt='river'";
    }

    public function horizontalLayout()
    {
        $textFile = "text/lorem.txt";
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