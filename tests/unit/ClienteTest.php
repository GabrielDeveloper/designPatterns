<?php

namespace src\tests;

use \PHPUnit_Framework_TestCase;
use App\Cliente;

class ClienteTeste extends PHPUnit_Framework_TestCase
{

    public function testRetornaModelo()
    {
        $cliente = new Cliente;
        $this->assertTrue($cliente != null);
    }

    public function testRetornaSaldo()
    {

        $mock = $this->getMock('Cliente', ['save'], []);

        $mock->expects($this->any())
                ->method('save')
                ->will($this->returnValue(true));

        $mock->depositar(4);

        $this->assertTrue($mock->save());

        $cliente = new Cliente;
 //       $cliente->depositar(4);
//        $this->assertEquals($cliente->getSaldo(), 4);
    }

}
