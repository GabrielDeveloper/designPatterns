<?php

namespace App\Repository;

class UserModel
{

    public function findAllActives($users)
    {
        $result = [];
        foreach ($users as $user) {
            if ($user['active'] == true) {
                $result[] = $user;
            }
        }
        return $result;    
    }
}
