<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 28.06.15
 * Time: 20:50
 */
include_once('FormatHelper.php');
include_once('Product.php');

class MoldovaProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;
    private $countryNow;

    public function getProperties()
    {
        $this->countryNow = file_get_contents("CountryWriteups/Moldova.txt");

        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= "<img src = 'https://upload.wikimedia.org/wikipedia/commons/8/83/Republika_Mo%C5%82dawii_-_Republica_Moldova_-_Republic_of_Moldova.png' class='pixRight' />";
        $this->mfgProduct .= "<header>Mołdawia</header>";
        $this->mfgProduct .= "<p>$this->countryNow</p>";
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
} 