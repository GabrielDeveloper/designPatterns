<?php

include_once('vendor/autoload.php');

use App\PHPUnit\Cliente;
use App\Factory\FactoryCar;

$cliente = new Cliente();


$car = FactoryCar::createCar("Astra", 2002);
echo $car->getinformation();

