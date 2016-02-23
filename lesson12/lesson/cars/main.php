<?php
	
	require_once("car.php");
	require_once("truck.php");
	require_once("taxi.php");
	
	$car = new Car(1, 'Black', 5);
	$result = $car->move(100);
	
	if($result == true)
	{
		echo "We are magicians";
	}
	else
	{
		echo "Sipi nafta";
	}	
	exit;
	
			   // fuel, color, number , perKm, startingMoney, seats
	$taxi = new Taxi(30, 'Black & Yellow','6665', '0.65', 0 , 4);

	echo "<pre>";
	print_r($taxi);
	
	$taxi->move(10);
	
	echo "<pre>";
	print_r($taxi);
	
	
	$taxi->move(6);
	echo "<pre>";
	print_r($taxi);
	
	$taxi->move(200);
	echo "<pre>";
	print_r($taxi);
	
	$taxi->move(100);
	
	echo "<pre>";
	print_r($taxi);
	
?>