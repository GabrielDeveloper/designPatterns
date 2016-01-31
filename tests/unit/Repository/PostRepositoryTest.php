<?php

namespace App\Test\Repository;

use \PHPUnit_Framework_TestCase;
use App\Repository\PostDomain\PostRepository;
use App\Repository\Zend\PostTableGateway;

class PostRepositoryTest extends PHPUnit_Framework_TestCase
{
    public function testRetornaUmArrayDeObjetosDoTipoPostsModel()
    {
        $array = [
            ['id' => 1, 'title' => "First Post", "content" => "This is the firts post", "author" => 1],
            ['id' => 2, 'title' => "Second Post", "content" => "This is the secondpost", "author" => 1],
        ];

        $mock = $this->getMock('\App\Repository\Zend\PostTableGateway');
        $mock->method('findAll')
             ->willReturn($array);

        $model = new PostRepository($mock);
        $result = $model->findAllPosts();
        $this->assertEquals(count($result), 2);
        foreach ($result as $data) {
            $this->assertInstanceOf('App\Repository\PostDomain\PostModel', $data);
        }
        $this->assertTrue($model != null);

    }
}
