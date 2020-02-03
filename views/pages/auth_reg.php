<?php
include_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Rabbi\Query\Auth;

$auth = new Auth();
$userProperties = [
    'email' => $_POST['email'],
    'emailVerified' => false,
    'password' => $_POST['password'],
    'displayName' => $_POST['name'],
    'disabled' => false,
];
$auth->auth_create($userProperties);