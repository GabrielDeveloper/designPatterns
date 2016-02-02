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
        $result = [];
        foreach ($usersData as $data) {
            $user = new PostModel;
            $user->setId($data['id']);
            $user->setTitle($data['title']);
            $user->setContent($data['content']);
            $user->setAuthor($data['author']);

            $result[] = $user;
        }
        return $result;
    }

}
