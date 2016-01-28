<?php

namespace App\Test\Repository;

use \PHPUnit_Framework_TestCase;
use App\Repository\UserDomain\UserRepository;
use App\Repository\Zend\UserTableGatway;

class UserRepositoryTest extends PHPUnit_Framework_TestCase
{
    public function testRetornaUmArrayDeObjetosDoTipoUserModel()
    {
        $array = [
            ["id" => 1, "name" => "Gabriel", "email" => "gabriel@gmail.com", 'active' => true],
            ["id" => 1, "name" => "João", "email" => "joao@gmail.com", 'active' => false],
        ];

        $mock = $this->getMock('\App\Repository\Zend\UserTableGateway');
        $mock->method('findAll')
             ->willReturn($array);

        $model = new UserRepository($mock);
        $result = $model->findAllUsers();
        $this->assertEquals(count($result), 2);
        foreach ($result as $data) {
            $this->assertInstanceOf('App\Repository\UserDomain\UserModel', $data);
        }
        $this->assertTrue($model != null);
    }

    public function testRetornaUsuarioAtivos()
    {
        $array = [
            ["id" => 1, "name" => "Gabriel", "email" => "gabriel@gmail.com", 'active' => true],
            ["id" => 1, "name" => "João", "email" => "joao@gmail.com", 'active' => false],
        ];
        
        $mock = $this->getMock('\App\Repository\Zend\UserTableGateway');
        $mock->method('findAll')
             ->willReturn($array);

        $model = new UserRepository($mock);
        $result = $model->findAllActives();
        $this->assertTrue(count($result) == 1);
        foreach ($result as $data) {
            $this->assertEquals($data->getName(), "Gabriel");
            $this->assertEquals($data->getEmail(), "gabriel@gmail.com");
            $this->assertEquals($data->getId(), 1);
            $this->assertInstanceOf('App\Repository\UserDomain\UserModel', $data);
        }
    }

    public function testRetornaApenasOUsuarioBuscadoPeloId()
    {
        $array = [
            ["id" => 2, "name" => "João", "email" => "joao@gmail.com", 'active' => false],
        ];

        $mock = $this->getMock('\App\Repository\Zend\UserTableGateway');
        $mock->method('findById')
             ->willReturn($array);
        
        $model = new UserRepository($mock);
        $result = $model->findById(2);
        $this->assertTrue(count($result) == 1);
        foreach ($result as $data) {
            $this->assertEquals($data->getName(), "João");
            $this->assertInstanceOf('App\Repository\UserDomain\UserModel', $data);
        }

    }
} 
