<?php

namespace App\Repository;

use App\Repository\UserModel;

class UserController
{

    public function __construct($user)
    {
        $this->user = new UserModel($user);
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
