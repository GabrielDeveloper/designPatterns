<?php

namespace App\Repository\Laravel;

abstract class ActiveRecord
{

    public $table;
    abstract public function setTable();

    // Tables of Database
    private $users = [
            ['id' => 1, 'name' => "Gabriel", 'email' => "gabrielll_07@hotmail.com", 'active' => true],
            ['id' => 2, 'name' => "Batman", 'email' => "batman@gmail.com", 'active' => false],
            ['id' => 3, 'name' => "Flash", 'email' => "flash@gmail.com", 'active' => true],
            ['id' => 4, 'name' => "Hulk", 'email' => "hulk@gmail.com", 'active' => false],
        ];

    private $posts = [
            ['id' => 1, 'title' => "First Post", "content" => "This is the firts post", "author" => 1],
            ['id' => 2, 'title' => "Second Post", "content" => "This is the secondpost", "author" => 1],
            ['id' => 3, 'title' => "Third Post", "content" => "This is the third post", "author" => 2],
            ['id' => 4, 'title' => "Fourth Post", "content" => "This is the fourth post", "author" => 3],
        ];

    public function getTable()
    {
        return $this->table;
    }

    public function findAll()
    {
        return $this->{$this->getTable()};
    }

    public function findOne($id)
    {
        foreach($this->{$this->getTable()} as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
            return false;
        }
    }

}
