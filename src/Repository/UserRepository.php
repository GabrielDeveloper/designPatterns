<?php

namespace App\Repository;

use App\Repository\UserRepositoryInterface;
use App\Repository\UserModel;

class UserRepository implements UserRepositoryInterface
{

    protected $user;

    public function __construct(UserTableGatway $user){
        $this->user = $user;
    }

    public function findAll()
    { 
        return $this->user->getAll();
    }

    public function findAllActives()
    {
        $model = new UserModel;
        $result = $model->findAllActives($this->user->getAll());

        return $result;
    }

}
