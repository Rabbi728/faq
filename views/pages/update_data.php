<?php
include_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Rabbi\Query\Users;

$users = new Users();
$data = array_slice($_POST,0,3,true);
$ref = array_slice($_POST,-1,1,true);

$users->update_data($ref['ref'],$data);

header('location:user_list.php');