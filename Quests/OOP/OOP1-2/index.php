<?php
//vélo
require_once 'Bicycle.php';
require_once 'Truck.php';
$bike = new Bicycle(0,'blue',0,'manpower');
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

//voiture
$homersCar = new Car(1,'pink',6,'diesel');
var_dump($homersCar);


echo $homersCar->forward();
echo '<br> Vitesse du véhicule : ' . $homersCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $homersCar->brake();
echo '<br> Vitesse du véhicule : ' . $homersCar->getCurrentSpeed() . ' km/h' . '<br>';

//truck
$smallTruck= new Truck(5,'white',3,'diesel');
var_dump($smallTruck);
$smallTruck->setCurrentLoad(3);
echo $smallTruck->fill()."<br>";

echo $smallTruck->forward();
echo '<br> Vitesse du véhicule : ' . $smallTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $smallTruck->brake();
echo '<br> Vitesse du véhicule : ' . $smallTruck->getCurrentSpeed() . ' km/h' . '<br>';