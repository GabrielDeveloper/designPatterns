<?php

include_once('vendor/autoload.php');

use App\Repository\UserController;
use App\Repository\UserRepositoryActiveRecord;
use App\Repository\UserRepositoryTableGateway;

$user = new UserController(new UserRepositoryTableGateway);
$user->actives();
$user->view();

$user2 = new UserController(new UserRepositoryActiveRecord);
$user2->index();
