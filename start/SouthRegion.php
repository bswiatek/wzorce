<?php
include_once('IAbstract.php');

class SouthRegion extends IAbstract
{
	protected function giveCost()
	{
		return 60;
	}
	
	protected function giveCity()
	{
		return "Zakopane";
	}
}
?>