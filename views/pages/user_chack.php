<?php
include_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";
if (!isset($_SESSION)){
    session_start();
}
use Rabbi\Query\Auth;

$auth = new Auth();

$result = $auth->auth_login($_POST);
if (isset($result)){
    $_SESSION['user'] = true;
    header('location:user_list.php');
}else{
    header('location:login.php');
}