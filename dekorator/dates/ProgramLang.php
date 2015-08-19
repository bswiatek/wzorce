<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 19.08.15
 * Time: 21:31
 */

namespace dates;


class ProgramLang extends Decorator{
    private $languageNow;

    public function __construct(IComponent $dateNow)
    {
        $this->date = $dateNow;
        $this->getDate();
    }

    private $language=array(
        "php" => "PHP",
        "cs" => "C#",
        "js" => "JavaScript",
        "as3" => "ActionScript 3.0"
    );
    public function setFeature($lan)
    {
        $this->languageNow=$this->language[$lan];
    }
    public function getFeature()
    {
        $output=$this->date->getFeature();
        $fmat="<br>$nbsp;$nbsp;";
        $output .= "$fmat Preferowany język programowania: ";
        $output .= $this->languageNow;
        return $output;
    }
} 