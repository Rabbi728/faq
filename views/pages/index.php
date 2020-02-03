<?php

include_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Kreait\Firebase\Factory;


$factory = (new Factory)
    ->withServiceAccount('../../secret/faq-application-cbf24f34bc30.json')
    ->withDatabaseUri('https://faq-application.firebaseio.com/');

$database = $factory->createDatabase();

print_r($database);