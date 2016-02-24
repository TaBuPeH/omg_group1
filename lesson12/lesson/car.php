<?php

require_once "vehicle.php";

class Car extends Vehicle
{
	public $seats;
	
	public function __construct($s,$a,$b)
	{
		$this->seats = $s;
		parent::__construct($a,$b);
	}
}

?>