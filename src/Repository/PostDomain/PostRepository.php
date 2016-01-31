<?php

namespace App\Repository\PostDomain;

class PostRepository
{

    public $storage;
    
    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

     public function findAllPosts()
    {
        $usersData = $this->storage->findAll();
        return $usersData;
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

}
