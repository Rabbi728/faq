<?php


namespace Rabbi\Query;


use Rabbi\Db\Db;
use Rabbi\Traits\Crud;
use Rabbi\Traits\Session;

class Category extends Db
{
    use Session;
    use Crud;

    public function push_cat($data){
        $ref = 'FAQ Category';
        $this->dbh->getReference($ref)->push($data);
    }
}