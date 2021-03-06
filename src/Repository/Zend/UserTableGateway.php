<?php

namespace App\Repository\Zend;

use App\Repository\UserDomain\Storage;
use App\Repository\UserDomain\UserModel;

class UserTableGateway extends TableGateway implements Storage
{

    protected $user;
    public $table;

    public function __construct()
    {
        $this->setTable();
    }

    public function setTable()
    {
        $this->table = "users";
    }

    public function findAll()
    {
        return parent::getAll();
    }

    public function findById($id)
    {
        return parent::getOne($id);
    }

}
