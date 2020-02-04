<?php


namespace Rabbi\Query;


use Rabbi\Db\Db;

class Faq extends Db
{
    public function push_faq($data){
        $ref = 'FAQ List';
        $this->dbh->getReference($ref)->push($data);
    }

    public function update_faq($ref,$data){
        $this->dbh->getReference($ref)->update($data);
    }

    public function get_faq($ref){
        return $this->dbh->getReference($ref)->getValue();
    }
    public function delete_faq($data){
        return $this->dbh->getReference($data)->remove();
    }
}