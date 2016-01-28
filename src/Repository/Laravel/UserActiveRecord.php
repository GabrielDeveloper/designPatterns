<?php

namespace App\Repository\Laravel;

use App\Repository\UserDomain\Storage;
use App\Repository\UserDomain\UserModel;

class UserActiveRecord extends ActiveRecord implements Storage
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
        return parent::findAll();
    }

    public function findById($id)
    {
        return parent::findOne($id);
    }

}
