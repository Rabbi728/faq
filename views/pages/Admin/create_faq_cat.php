<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

use Rabbi\Query\Auth;

Auth::start_session();

Auth::auth_session();

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

                <form action="Controler/cat_store.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Faq Category Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cat_name">
                    </div>
                    <button type="submit" class="btn btn-primary">Store</button>
                </form>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/elements/Admin/Footer.php" ?>
