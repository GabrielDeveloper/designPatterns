<?php

namespace App\Factory;

use App\Factory\Car;

class FactoryCar
{
    public static function createCar($model, $year)
    {
        return new Car($model, $year);
    }
}
