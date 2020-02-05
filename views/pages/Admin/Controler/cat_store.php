<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

use Rabbi\Query\Category;

Category::start_session();
Category::auth_session();

$category = new Category();

$category->push_cat($_POST);

header('location:/views/pages/Admin/faq_cat_list.php');