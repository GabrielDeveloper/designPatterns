<?php

namespace App\Repository\UserDomain;

interface Storage
{

    public function findAll();

    public function findById($id);

}
