<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
use Rabbi\Query\Faq;

Faq::start_session();
Faq::auth_session();

$faq = new Faq();

$data = array_slice($_POST,0,3,true);
$ref = array_slice($_POST,-1,1,true);

$faq->update($ref['ref'],$data);

header('location:/views/pages/Admin/faq_list.php');