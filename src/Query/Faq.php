<?php


namespace Rabbi\Query;


use Rabbi\Db\Db;
use Rabbi\Traits\Crud;
use Rabbi\Traits\Session;

class Faq extends Db
{
    use Session;
    use Crud;

    public function push_faq($data){
        $ref = 'FAQ List';
        $this->dbh->getReference($ref)->push($data);
    }
}