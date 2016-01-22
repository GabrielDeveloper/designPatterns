<?php

namespace App\Repository;

use App\Repository\UserRepository;

class UserController
{

    public function __construct($user)
    {
        $this->user = new UserRepository($user);
    }

    public function index()
    {
        var_dump($this->user->findAll());
    }

    public function actives()
    {
        var_dump($this->user->findAllActives());
    }

}
