<?php

namespace App\Repository;

class UserTableGateway
{
    public $users;

    public function __construct()
    {
        $this->users = [
            ['id' => 1, 'name' => "Gabriel", 'email' => "gabrielll_07@hotmail.com", 'active' => true],
            ['id' => 2, 'name' => "Batman", 'email' => "batman@gmail.com", 'active' => false],
            ['id' => 3, 'name' => "Flash", 'email' => "flash@gmail.com", 'active' => true],
            ['id' => 4, 'name' => "Hulk", 'email' => "hulk@gmail.com", 'active' => false],
        ];
    }

    public function getAll()
    {
        return $this->users;
    }

    public function getOne($id)
    {
        foreach($this->users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
            return false;
        }
    }

}
