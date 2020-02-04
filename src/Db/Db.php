<?php
namespace Rabbi\Db;
include_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use PDO;
use PDOException;
use Kreait\Firebase\Factory;

class Db
{
    protected $dbh;
    protected $factory;
    public function __construct()
    {
        $this->factory = (new Factory)
            ->withServiceAccount($_SERVER['DOCUMENT_ROOT'] . '/secret/faq-application-5451907f7157.json')
            ->withDatabaseUri('https://faq-application.firebaseio.com/');
    
        $this->dbh = $this->factory->createDatabase();
    }

}