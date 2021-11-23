<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bike = new Bicycle('blue', 1);

$bike->setCurrentSpeed(0);

// moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo '<br><br><br><br>';

$theHomer = new Car('Green', 1, 'Water');

// moving theHomer and test exception
try {
    echo $theHomer->start();
} catch (Exception $e) {
    echo 'Exception reçue : ' . $e->getMessage('ParkBrake is not unuse');
    $theHomer->setHasParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut';
}
echo $theHomer->forward();
echo '<br> Vitesse du voiture : ' . $theHomer->getCurrentSpeed() . ' km/h' . '<br>';
echo $theHomer->brake();
echo '<br> Vitesse du voiture : ' . $theHomer->getCurrentSpeed() . ' km/h' . '<br>';
echo $theHomer->brake();

echo '<br><br><br><br>';

$bristan = new Truck('red', 2, 'fuel', 4);

//fill bristan
echo $bristan->cargoStatus() . '<br>';
echo $bristan->start();
echo $bristan->forward();
echo '<br> Vitesse du camion : ' . $bristan->getCurrentSpeed() . ' km/h' . '<br>';
echo $bristan->brake();
echo '<br> Vitesse du camion : ' . $bristan->getCurrentSpeed() . ' km/h' . '<br>';
echo $bristan->brake();