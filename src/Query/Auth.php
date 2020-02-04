<?php
namespace Rabbi\Query;
use Rabbi\Db\Db;

class Auth extends Db
{
    public function auth_create($data){
        $auth = $this->factory->createAuth();
        return $auth->createUser($data);
    }
    public function auth_login($email,$pass){
        $auth = $this->factory->createAuth();
        return $auth->verifyPassword($email,$pass);
    }

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