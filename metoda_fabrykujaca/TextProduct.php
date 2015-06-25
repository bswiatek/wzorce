<?php
/**
 * Created by PhpStorm.
 * User: bartek
 * Date: 24.06.15
 * Time: 21:37
 */
include_once('Product.php');
class TextProduct implements Product
{
    private $mfgProduct;
    public function getProperties()
    {
        $this->mfgProduct= <<<MALI
<!doctype html>
<head>
<style type="text/css">
header{
    color: #900;
    font-weight: bold;
    font-size: 24px;
    font-family: Verdana, Geneva, sans-serif;
    }
    p{
    font-family: Verdana, Geneva, sans-serif;
    font-size: 12px;
    }
</style>
<meta charset="UTF-8"><title>Mali</title></head>
<body>
<p>Mali, Republika Mali (fr. République du Mali, bambara Mali ka Fasojamana) – śródlądowe państwo położone w Afryce Zachodniej, siódme co do wielkości w Afryce ze stolicą Bamako, graniczy z Algierią na północy, Nigrem na wschodzie, Burkiną Faso oraz Wybrzeżem Kości Słoniowej na południu, Gwineą na południowym zachodzie oraz z Senegalem i Mauretanią na zachodzie.

Mali składa się z ośmiu regionów i jego granice na północy sięgają południowej Sahary, podczas gdy południowa część kraju, zamieszkana przez większość społeczeństwa, graniczy z rzekami Niger oraz Senegal. W strukturze gospodarczej kraju przeważa rolnictwo oraz rybołówstwo. Niektóre z bogactw naturalnych Mali to złoto, uran czy sól. Uważa się, że Mali jest jednym z najbiedniejszych państw świata.</p>
</body></html>
MALI;

        return $this->mfgProduct;
    }
}