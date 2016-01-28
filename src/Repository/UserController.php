<?php

namespace App\Repository;

use App\Repository\UserDomain\UserModel;
use App\Repository\UserDomain\UserRepository;
use App\Repository\UserDomain\Storage;

class UserController
{

    public $dataStorage;
    public $user;

    public function __construct(Storage $storage)
    {
        $this->user = new UserRepository($storage);
        
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
