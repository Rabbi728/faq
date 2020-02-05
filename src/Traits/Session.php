<?php


namespace Rabbi\Traits;


trait Session
{
    public static function auth_session(){
        if (!isset($_SESSION['Auth_User']) and empty($_SESSION['Auth_User_details'])){
            header('location:/views/pages/Admin/login.php');
        }
    }

    public static function start_session(){
        if (!isset($_SESSION)){
            session_start();
        }
    }
}