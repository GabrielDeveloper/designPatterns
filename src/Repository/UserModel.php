<?php

namespace App\Repository;

class UserModel
{
    public $user;

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function findAll()
    {
        return $this->user->findAllUsers();
    }

    public function findAllActives()
    {
        $result = [];
        foreach ($this->findAll() as $user) {
            if ($user['active'] == true) {
                $result[] = $user;
            }
        }
        return $result;    
    }

    public function findActivesToArray($array)
    {
        $result = [];
        foreach ($array as $user) {
            if ($user['active'] == true) {
                $result[] = $user;
            }
        }
        return $result;
    }
}
