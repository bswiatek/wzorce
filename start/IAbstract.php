<?php
 abstract class IAbstract
 {
    protected $valueNow;
    
    abstract protected function giveCost();
    abstract protected function giveCity();
    
    public function displayShow()
    {
      $stringCost = $this->giveCost();
	  $stringCost = (string)$stringCost;
	  $allTogether = ("Koszt: $" . $stringCost . " dla " . $this->giveCity());
	  return $allTogether;
    }
 }
?>