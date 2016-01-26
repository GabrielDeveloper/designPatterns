<?php

namespace App\Repository;

class UserTableGateway
{

    public function getAll()
    {
        return [
            ['name' => "Gabriel", 'email' => "gabrielll_07@hotmail.com", 'active' => true],
            ['name' => "Batman", 'email' => "batman@gmail.com", 'active' => false],
            ['name' => "Flash", 'email' => "flash@gmail.com", 'active' => true],
            ['name' => "Hulk", 'email' => "hulk@gmail.com", 'active' => false],
        ];
    }

}
