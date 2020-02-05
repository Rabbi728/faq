<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

use Rabbi\Query\Category;

Category::start_session();
Category::auth_session();

$category = new Category();

$data = array_slice($_POST,0,1,true);
$ref = array_slice($_POST,-1,1,true);

$category->update($ref['ref'],$data);

header('location:/views/pages/Admin/faq_cat_list.php');