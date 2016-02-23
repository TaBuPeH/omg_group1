<?php

class Vehicle
{
	public $color;
	public $fuel;
	public $position = 0;
	
	function __construct($a, $b)
	{
		$this->fuel = $a;
		$this->color = $b;
	}
	
	public function move($distance)
	{
		
		if($this->fuel - $distance/10 < 0)
		{
			return false;
		}
		else
		{	
			// $this->fuel = 30 - 10/10 = 29
			$this->fuel = $this->fuel - $distance/10; 
			// $this->position = 0 + 10 = 10
			$this->position = $this->position + $distance; 
			
			return true;
		}
		
	}
	

}
?>