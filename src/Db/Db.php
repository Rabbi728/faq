<?php
<<<<<<< HEAD
<<<<<<< HEAD
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
        ->withServiceAccount('../../secret/faq-application-cbf24f34bc30.json')
        ->withDatabaseUri('https://faq-application.firebaseio.com/');
    
        $this->dbh = $this->factory->createDatabase();
=======
=======
>>>>>>> e0f3ed187d02ac2e774a93fddf2dc21ca555412f


namespace Rabbi\Db;

use PDO;
use PDOException;


class Db
{
    protected $serverName = "localhost";
    protected $dbName = "faq";
    protected$userName = "root";
    protected$password = "";
    protected $dbh;
    public function __construct()
    {
        try{
            $this->dbh = new PDO("mysql:host=$this->serverName;dbname=$this->dbName",$this->userName,$this->password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            echo "Connection Failed".$e->getMessage();
        }
<<<<<<< HEAD
>>>>>>> e0f3ed187d02ac2e774a93fddf2dc21ca555412f
=======
>>>>>>> e0f3ed187d02ac2e774a93fddf2dc21ca555412f
    }

}