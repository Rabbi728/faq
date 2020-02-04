<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
use Rabbi\Query\Auth;

Auth::start_session();

Auth::auth_session();

use Rabbi\Query\Faq;

$faq = new Faq();

$faq->push_faq($_POST);

header('location:/views/pages/Admin/faq_list.php');