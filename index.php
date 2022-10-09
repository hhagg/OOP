<?php

require_once 'Bicycle.php';
require_once 'Car.php';

//Moving bike using class Bycicle : 
$bike = new Bicycle();
$bike->getColor = 'green';
$bike->getCurrentSpeed = 0;
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo "</br>";

// moving car using class Car : 
$myCar = new Car();
$myCar->getColor ='red';
$myCar->getNbSeats = 5;
$myCar->getNbWheels = 4;
$myCar->getEnergy = "diesel";
$myCar->getEnergyLevel = 50;
$myCar->getCurrentSpeed = 100;
echo "My car has a " .$myCar->getColor ." ". "color.</br>";
echo "There are " . $myCar->getNbSeats . " " . "seats.</br>";
echo "There are" . " " . $myCar->getNbWheels . " " . "wheels.</br>";
echo "My car's energy is " . " " . $myCar->getEnergy.".</br>";
echo $myCar->getEnergyLevel . " " . "% of the fuel tank remains.</br>";
echo $myCar->start(). "</br>";
echo $myCar->forward()."</br>";
echo "My current speed :" . " " . $myCar->getCurrentSpeed . " " . "km/h.<br>";
echo $myCar->brake()."</br>";