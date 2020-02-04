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
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Not Found</p>
            <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
            <a href="index.php">&larr; Back to Dashboard</a>
        </div>

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/elements/Admin/Footer.php" ?>