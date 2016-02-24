<?php


require_once "car.php";
require_once "plane.php";

$car = new Car(5,3,30,'Black');
echo "<pre>";
print_r($car);

$plane = new Plane('Blonde',100,'White');
echo "<pre>";
print_r($plane);


 



?>