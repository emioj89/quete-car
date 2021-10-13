<?php
require_once 'Bicycle.php';
$bike = new Bicycle();
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();



require_once 'car.php';
$cars = new Car('red', 4, 'gasoline');

echo '<br> cayonero is a  '. $cars->getColor() .' car, it has '. $cars->getNbSeats() .' seats and it is a '. $cars->getEnergy() .'<br>';
echo $cars->demarrage();
echo '<br> speed of the car is  : ' . $cars->getcurrentSpeed() . ' km/h ' . $cars->getEnergyLevel().' liters of gasoline'. '<br>';
echo $cars->brake();
echo '<br> speed of the car is  : ' . $cars->getcurrentSpeed() . ' km/h ' . $cars->getEnergyLevel().' liters of gasoline'. '<br>';



