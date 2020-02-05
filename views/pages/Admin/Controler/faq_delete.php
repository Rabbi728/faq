<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

use Rabbi\Query\Faq;

Faq::start_session();
Faq::auth_session();

$faq = new Faq();

$ref = 'FAQ List/'.$_GET['id'];
$faq->delete($ref);

header('location:/views/pages/Admin/faq_list.php');