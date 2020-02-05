<?php
namespace Rabbi\Query;
use Rabbi\Db\Db;
use Rabbi\Traits\Session;

class Auth extends Db
{
    use Session;
    public function auth_create($data){
        $auth = $this->factory->createAuth();
        return $auth->createUser($data);
    }
    public function auth_login($email,$pass){
        $auth = $this->factory->createAuth();
        return $auth->verifyPassword($email,$pass);
    }



}