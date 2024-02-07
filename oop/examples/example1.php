<?php

require_once "Car.php";

$car1=new Car();
$car1->brand="toyota";
$car1->maxSpeed="255";
$car1->displayBrand();

var_dump($car1);


$car2= new Car();
$car2->brand="peugeot";
$car2->maxSpeed=240;

var_dump($car2);