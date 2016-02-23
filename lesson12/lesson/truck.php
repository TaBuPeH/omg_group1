<?php

require_once "vehicle.php";

class Truck extends Vehicle
{
	public $maxLoad;
	
	public function __construct($ml,$a,$b)
	{
		$this->maxLoad = $ml;
		parent::__construct($a,$b);
	}
}

?>