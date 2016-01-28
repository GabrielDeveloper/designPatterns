<?php

namespace App\Repository;

use App\Repository\UserModel;

class UserController
{

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        var_dump($this->user->findAllUsers());
    }

    public function actives()
    {
        var_dump($this->user->findAllActives());
    }

    public function view()
    {
        // id of Request;
        $id = 1;
        var_dump($this->user->findById($id));
    }

}
