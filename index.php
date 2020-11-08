<?php

// index.php


require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';
require_once 'Highway.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Skateboard.php';


$alfa = new Car('grey',4,'fuel');
$alfa->setParkBrake(true);
$alfa->setEnergyLevel(0);
var_dump($alfa);

try {
    echo $alfa->start();
} catch (NoMoreEnergyException $e){
    echo "Exception received  : ". $e->getMessage() . "<br/>";
    $alfa->setEnergyLevel(30);
    try {
        echo $alfa->start();
    } catch (Exception $e){
        echo "Exception received  : ". $e->getMessage() . "<br/>";
        $alfa->setParkBrake(false);
    }
} catch (Exception $e){
    echo "Exception received  : ". $e->getMessage() . "<br/>";
    $alfa->setParkBrake(false);
    echo $alfa->start();
} finally{
    echo "Ma voiture roule comme un donut";
}


var_dump($alfa);





