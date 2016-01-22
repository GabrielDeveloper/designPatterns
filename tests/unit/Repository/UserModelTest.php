<?php

namespace App\Test\Repository;

use \PHPUnit_Framework_TestCase;
use App\Repository\UserModel;

class UserModelTest extends PHPUnit_Framework_TestCase
{
    public function testRetornaModelo()
    {
        $model = new UserModel;
        $this->assertTrue($model != null);
    }

    public function testRetornaUsuarioAtivos()
    {
        $array = [
            ["name" => "Gabriel", 'active' => true],
            ["name" => "João", 'active' => false],
        ];

        $model = new UserModel;
        $results = $model->findAllActives($array);
        $this->assertTrue(count($results) == 1);
        foreach ($results as $data) {
            $this->assertEquals($data['name'], "Gabriel");
        }
    }
} 
