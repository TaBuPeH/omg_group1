<?php

require_once("vehicle.php");

class Truck extends Vehicle
{
	public $load;
	
	
	function add($amount)
	{
		$this->load += $amount;
	}
	
}
?>