<?php

namespace src\tests;

use \PHPUnit_Framework_TestCase;
use App\PHPUnit\Cliente;

class ClienteTeste extends PHPUnit_Framework_TestCase
{

    public function testRetornaModelo()
    {
        $cliente = new Cliente;
        $this->assertTrue($cliente != null);
    }

    public function testDepositaERetornaSaldoValido()
    {
        $cliente = new Cliente;
        $cliente->depositar(4);
        $this->assertEquals($cliente->getSaldo(), 4);
    }

    public function testDeveDepositarESacarERetornarSaldoExato()
    {
        $cliente = new Cliente;
        $cliente->depositar(10);
        $cliente->sacar(5);
        $this->assertEquals($cliente->getSaldo(), 5);
    }

    public function testMockingObject()
    {
        $mock = $this->getMock('Cliente', ['save'], []);

        $mock->expects($this->any())
                ->method('save')
                ->will($this->returnValue(true));

    }

}
