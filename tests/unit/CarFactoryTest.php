<?php

namespace App\Test;

use \PHPUnit_Framework_TestCase;
use App\Factory\FactoryCar;
use App\Factory\Car;


class CarFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testDeveRetornarOCarroDesligadoPoisAindaNaoFoiLigado()
    {
        $car = FactoryCar::createCar("Astra", 2002);
        $this->assertFalse($car->getState());
        $this->assertEquals($car->getStateToString(), "Desligado");
    }

    public function testDeveRetornarOEstadoComoLigado()
    {
        $car = FactoryCar::createCar("Gol", 2015);
        $car->turnOn();

        $this->assertTrue($car->getState());
        $this->assertEquals($car->getStateToString(), "Ligado");
    }

    public function testVerificandoValorQuandoLigaEQuandoDesligaOCarro()
    {
        $car = FactoryCar::createCar("Uno", 2016);
        $car->turnOn();

        $this->assertTrue($car->getState());
        $this->assertEquals($car->getStateToString(), "Ligado");

        $car->turnOff();

        $this->assertFalse($car->getState());
        $this->assertEquals($car->getStateToString(), "Desligado");
    }

    public function testRetornarOModeloEAnoDoCarroCriado()
    {
        $car = FactoryCar::createCar("Corola", 2010);
        $this->assertEquals($car->getModel(), "Corola");
        $this->assertEquals($car->getYear(), 2010);

        $this->assertEquals($car->getInformation(), "Corola - 2010");
    
    }

    public function getCarFusion()
    {
        $fusion = new Car("Fusion", 2016);
        $fusion->turnOn();

        return [[$fusion]];
    }

    /**
     * @dataProvider getCarFusion
     */
    public function testVerifyCar(Car $car)
    {
        $car->turnOn();
        
        $this->assertTrue($car->getState());
        $this->assertEquals($car->getStateToString(), "Ligado");
    }

}
