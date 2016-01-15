<?php

include_once('vendor/autoload.php');

use App\PHPUnit\Cliente;
use App\Factory\FactoryCar;
use App\Solid\SingleResponsibillity\Pedido;

$cliente = new Cliente();


$car = FactoryCar::createCar("Astra", 2002);
echo $car->getinformation();

$pedido = new Pedido();

