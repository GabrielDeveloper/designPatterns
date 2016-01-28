<?php

namespace App\Repository\UserDomain;

interface UserRepositoryInterface
{

    public function findAll();

    public function findById($id);

}
