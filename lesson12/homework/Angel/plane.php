<?php

require_once "vehicle.php";

class Plane extends Vehicle
{
	public $stewardess;
	//public $blonde;
	//public $brunette;

	public function __construct($stew, $a, $b)
	{
		$this->stewardess = $stew;
	
		parent::__construct($a,$b);
	}

	public function staff($stew)
	{
		if($this->stewardess == 'Blonde')
		{
			echo "Rusichkoto e dobre.";
		}
		else if($this->stewardess == 'Brunette')
		{
			echo "E chernichkoto i to.";
		}
		else
		{
			echo "Ne znam chovek.";
		}
	}
}