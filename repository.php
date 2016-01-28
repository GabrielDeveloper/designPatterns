<?php

include_once('vendor/autoload.php');

use App\Repository\UserController;
use App\Repository\Laravel\UserActiveRecord;
use App\Repository\Zend\UserTableGateway;

$user = new UserController(new UserActiveRecord);
$user->index();
$user->view();

$user2 = new UserController(new UserActiveRecord);
$user2->index();
