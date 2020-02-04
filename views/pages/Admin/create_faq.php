<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

use Rabbi\Query\Auth;
use Rabbi\Query\Category;

Auth::start_session();

Auth::auth_session();

$category =  new Category();
$category_list = $category->get_cat('FAQ Category');

include_once $_SERVER['DOCUMENT_ROOT'] . "/views/elements/Admin/header.php" ?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/elements/Admin/Sidebar.php" ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/elements/Admin/navbar.php" ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container">

                <form action="Controler/faq_store.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Faq Question</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="question">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Faq Answer</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="answer">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">FAQ Category</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="category">
                            <option>Select FAQ Category</option>
                            <?php foreach ($category_list as $key => $item):?>
                            <option value="<?= $key; ?>"><?= $item['cat_name']; ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Store</button>
                </form>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/elements/Admin/Footer.php" ?>

