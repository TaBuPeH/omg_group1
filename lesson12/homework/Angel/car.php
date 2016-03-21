<?php

require_once "vehicle.php";

class Car extends Vehicle
{
	public $seats;
	public $passengers;
	
	public function __construct($s,$pass,$a,$b)
	{
		$this->seats = $s;
		$this->passengers = $pass;

		parent::__construct($a,$b);
	}

	public function peopleInCar($pass)
	{
		$result = $this->seats;
		
		if($result <= $this->passengers)
		{
			$this->passengers = $pass;
		}
		else
		{
			echo "Otivai v bagajnika.";
		}

	}



}

?>