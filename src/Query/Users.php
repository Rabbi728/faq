<?php

namespace Rabbi\Query;
use Rabbi\Db\Db;

class Users extends Db
{
    public function push_data($data){
        $ref = 'Users Registration Data';
        $this->dbh->getReference($ref)->push($data);
    }

    public function update_data($ref,$data){
        $this->dbh->getReference($ref)->update($data);
    }

    public function get_value($ref){
        return $this->dbh->getReference($ref)->getValue();
    }
    public function delete($data){
        return $this->dbh->getReference($data)->remove();
    }


}
