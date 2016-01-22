<?php

include_once('vendor/autoload.php');

use App\Repository\UserController;
use App\Repository\UserActiveRecord;
use App\Repository\UserTableGatway;

$user = new UserController(new UserTableGatway);
//$user->index();
$user->actives();
