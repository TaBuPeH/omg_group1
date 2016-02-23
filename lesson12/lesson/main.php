<?php
/*
class automobile 
{
	public $brand;
	public $color;
	
	public $seats;
	public $doors;
	
	public $year;
	public $price; 
	
	public $km;
	
	public function move($distance)
	{
		// $car->km += 6;
		// $car2->km +=15;
		$this->km += $distance;
	}
	
	public function __construct($a,$b,$c,$d,$y,$p)
	{
		$this->brand = $a;
		$this->color = $b;
		$this->seats = $c;
		$this->year = $y;
		$this->doors = $d;
		$this->price = $p;
	}
	
}

$car = new automobile('VW','Purple',5,5,1991,500);
$car2 = new automobile('Audi','Rusa',3,5,1999,4000);

echo "<pre>";
print_r($car);

$car->move(6);

echo "<pre>";
print_r($car);


$car2->move(15);
print_r($car2);




*/
/*
$car->brand = "VW";
$car->color = 'Purple';
$car->seats = 5;
$car->doors = 3;
$car->year = 1991;
$car->price = 500;
*/

/*
$car2 = new automobile;

$car2->brand = "Audi";
$car2->color = 'Rusa';
$car2->seats = 2;
$car2->doors = 3;
$car2->year = 1999;
$car2->price = 4000;
*/

require_once "truck.php";
require_once "car.php";


$x = new Truck(5000,50,'Blue');
$x->move(100);
$x->move(50);

echo "<pre>";
print_r($x);

$car = new Car(5,20,'White');
echo "<pre>";
print_r($car);
