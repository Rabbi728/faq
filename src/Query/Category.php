<?php


namespace Rabbi\Query;


use Rabbi\Db\Db;

class Category extends Db
{
    public function push_cat($data){
        $ref = 'FAQ Category';
        $this->dbh->getReference($ref)->push($data);
    }

    public function update_cat($ref,$data){
        $this->dbh->getReference($ref)->update($data);
    }

    public function get_cat($ref){
        return $this->dbh->getReference($ref)->getValue();
    }
    public function delete_cat($data){
        return $this->dbh->getReference($data)->remove();
    }
}