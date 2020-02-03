<?php
include_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Rabbi\Query\Users;

$users = new Users();

$users->push_data($_POST);

header('location:user_list.php');