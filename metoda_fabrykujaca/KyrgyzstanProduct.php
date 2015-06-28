<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 28.06.15
 * Time: 20:50
 */
include_once('FormatHelper.php');
include_once('Product.php');

class KyrgyzstanProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;

    public function getProperties()
    {
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= <<<KYRGYZSTAN
Kirgistan jest republiką parlamentarną z systemem wielopartyjnym. W organie władzy ustawodawczej – jednoizbowej Radzie Najwyższej – zasiada 120 deputowanych wybieranych w głosowaniu powszechnym co 5 lat z list partyjnych. W następstwie ostatnich wyborów przeprowadzonych 10 października 2010 roku miejsca w parlamencie uzyskały partie:
    Ata-Dżurt (28)
    Socjaldemokratyczna Partia Kirgistanu (26)
    Ar-Namys (25)
    Partia Respublika (23)
    Ata Meken (18)
Głową państwa jest Prezydent Republiki Kirgiskiej, wybierany co 6 lat w wyborach powszechnych bez możliwości reelekcji. Kompetencje prezydenta zostały ograniczone po referendum konstytucyjnym z 27 czerwca 2010 roku. Obecnym prezydentem jest Ałmazbek Atambajew z Socjaldemokratycznej Partii Kirgistanu.
KYRGYZSTAN;
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
} 