<?php

namespace App\Test\Repository;

use \PHPUnit_Framework_TestCase;
use App\Repository\UserModel;
use App\Repository\UserRepositoryTableGateway;
use App\Repository\UserRepositoryActiveRecord;

class UserModelTest extends PHPUnit_Framework_TestCase
{
    public function testRetornaModelo()
    {
        $model = new UserRepositoryTableGateway;
        $this->assertTrue($model != null);
    }

    public function testRetornaUsuarioAtivosPassadosPorUmArray()
    {
        $array = [
            ["name" => "Gabriel", 'active' => true],
            ["name" => "João", 'active' => false],
        ];

        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );

        $model = new UserModel(new UserRepositoryTableGateway);
//        $results = $model->findActivestoArray($array);

        $this->assertTrue(count($results) == 1);
        foreach ($results as $data) {
            $this->assertEquals($data['name'], "Gabriel");
        }
    }

    public function testRetornaUsuariosAtivos()
    {
        $array = [
            ["name" => "Gabriel", 'active' => true],
            ["name" => "João", 'active' => false],
        ];

        $mock = $this->getMockBuilder('\App\Repository\UserRepositoryTableGateway')->getMock();

        $mock->method('findAllUsers')
             ->willReturn($array);
        
        $model = new UserRepositoryTableGateway();
        $results = $model->findAllActives();

        $this->assertTrue(count($results) == 1);
        foreach ($results as $data) {
            $this->assertEquals($data['name'], "Gabriel");
        }
 

    }
} 
