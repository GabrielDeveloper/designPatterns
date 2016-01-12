<?php

namespace App\Factory;

use App\Factory\Automobile;


class Car implements Automobile
{

    protected $model;
    protected $year;
    protected $turnOn = false;

    public function __construct($model, $year)
    {
        $this->model = $model;
        $this->year  = $year;
    }

    public function getInformation()
    {
        return $this->model . ' - ' . $this->year;
    }

    public function turnOn()
    {
        $this->turnOn = true;
    }

    public function turnOff()
    {
        $this->turnOn = false;
    }

    public function getStateToString()
    {
        if ($this->turnOn) {
            return "Ligado";
        }
        return "Desligado";
    }

    public function getState()
    {
        return $this->turnOn;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
        return $this->year;
    }

}
