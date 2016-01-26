<?php

namespace App\Repository;

use App\Repository\UserRepositoryInterface;
use App\Repository\UserModel;
use App\Repository\UserTableGateway;

class UserRepositoryActiveRecord extends UserActiveRecord implements UserRepositoryInterface
{

    protected $user;

    public function findAllUsers()
    { 
        return parent::findAll();
    }

    public function findAllActives()
    {
        $model = new UserModel;
        $result = $model->findAllActives(parent::findAll());

        return $result;
    }

}
