<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
use Rabbi\Query\Auth;
Auth::start_session();
Auth::auth_session();

use Rabbi\Query\Faq;

$faq = new Faq();

print_r($_POST);

$data = array_slice($_POST,0,3,true);
$ref = array_slice($_POST,-1,1,true);

$faq->update_faq($ref['ref'],$data);

header('location:/views/pages/Admin/faq_list.php');