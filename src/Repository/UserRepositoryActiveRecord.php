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
        $result = [];
        $usersData = parent::findAll();
        foreach ($usersData as $data) {
            $user = new UserModel;
            $user->setId($data['id']);
            $user->setName($data['name']);
            $user->setEmail($data['email']);
            $user->setActive($data['active']);

            $result[] = $user;
        }
        return $result;
    }

    public function findAllActives()
    {
        $result = [];
        foreach ($this->findAllUsers() as $user) {
            if ($user->getActive() == true) {
                $result[] = $user;
            }
        }
        return $result;
    }

    public function findById($id)
    {
        $data = parent::findOne($id);

        $user = new UserModel;
        $user->setId($data['id']);
        $user->setName($data['name']);
        $user->setEmail($data['email']);
        $user->setActive($data['active']);

        return $user;
    }

}
