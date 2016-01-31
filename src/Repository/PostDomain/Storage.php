<?php

namespace App\Repository\PostDomain;

interface Storage
{

    public function findAll();

    public function findById($id);

}
