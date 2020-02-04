<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

use Rabbi\Query\Auth;
Auth::start_session();
$auth = new Auth();

$email = $_POST['email'];
$password = $_POST['password'];

try {
    $result = $auth->auth_login($email,$password);


    if (isset($result)){
        $_SESSION['Auth_User'] = true;
        $_SESSION['Auth_User_details'] = $result;
        header('location:/views/pages/Admin/index.php');
    }else{
        header('location:login.php');
    }
}catch (Exception $e){
    echo "Please Enter Email and Password Correctly";
}