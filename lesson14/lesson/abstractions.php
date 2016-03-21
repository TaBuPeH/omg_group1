<?php




interface wheel
{
	function rotate();
}

interface tire
{
	function pump();
}



class carTyre implements wheel,tire
{
	protected $moveForward = 0;
	protected $pressure = 0;
	
	function rotate()
	{
		$this->moveForward = 1;	
	}
	
	function pump()
	{
		$this->pressure = 2.2;	
	}
}





$w = new carTyre;


class format
{
	function formatDate()
	{
		$this->something = 0;
		echo 'ss';
	}
	
	function applyDDS($money)
	{
		return $money*1.2;
	}
}


$x = format::applyDDS(100);
echo $x;
$y = format::formatDate();

exit;











abstract class machine
{
	private $isRaining;
	
	abstract function move();
	
	function todayIsRaining()
	{
		$this->isRaining = true;
	}
}

class automobile extends machine
{
	protected $km;
	function move()
	{
		$this->km = $this->km+1;
	}
}


class klimatik extends machine
{
	protected $isOpen = false;
	
	function move()
	{
		$this->isOpen = true;
	}
}


$auto = new automobile;
$klima = new klimatik;

$klima->todayIsRaining();
//$machine = new machine;