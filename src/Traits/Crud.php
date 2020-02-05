<?php


namespace Rabbi\Traits;


trait Crud
{
    public function update($ref,$data){
        $this->dbh->getReference($ref)->update($data);
    }

    public function get($ref){
        return $this->dbh->getReference($ref)->getValue();
    }
    public function delete($data){
        return $this->dbh->getReference($data)->remove();
    }
}