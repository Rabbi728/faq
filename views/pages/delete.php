<?php
include_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Rabbi\Query\Users;

$users = new Users();

$ref = 'Users Registration Data/'.$_GET['id'];
$users->delete($ref);

header('location:user_list.php');