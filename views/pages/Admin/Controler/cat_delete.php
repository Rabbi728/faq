<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
use Rabbi\Query\Auth;
Auth::start_session();
Auth::auth_session();
use Rabbi\Query\Category;

$category = new Category();

$ref = 'FAQ Category/'.$_GET['id'];
$category->delete_cat($ref);

header('location:/views/pages/Admin/faq_cat_list.php');