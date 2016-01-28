<?php

namespace App\Repository\UserDomain;

class UserRepository
{

    public $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function findAllUsers()
    {
        $usersData = $this->storage->findAll();
        $result = [];
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
        $data = $this->storage->findById($id);

        $user = new UserModel;
        $user->setId($data['id']);
        $user->setName($data['name']);
        $user->setEmail($data['email']);
        $user->setActive($data['active']);

        return $user;
    }

}
