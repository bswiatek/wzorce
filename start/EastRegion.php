<?php
include_once('IAbstract.php');

class EastRegion extends IAbstract
{
	protected function giveCost()
	{
		return 30;
	}
	
	protected function giveCity()
	{
		return "Zielona Góra";
	}
}
?>