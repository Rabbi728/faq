<?php


namespace Rabbi\Query;


use Rabbi\Db\Db;

class Auth extends Db
{
    public function auth_create($data){
        $auth = $this->factory->createAuth();
        return $auth->createUser($data);
    }
    public function auth_login($data){
        $auth = $this->factory->createAuth();
        return $auth->verifyPassword($data['email'],$data['password']);
    }


}