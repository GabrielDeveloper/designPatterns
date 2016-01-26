<?php

namespace App\Repository;

use App\Repository\UserRepositoryInterface;
use App\Repository\UserModel;
use App\Repository\UserTableGateway;

class UserRepositoryTableGateway extends UserTableGateway implements UserRepositoryInterface
{

    protected $user;

    public function findAllUsers()
    { 
        return parent::getAll();
    }

}
