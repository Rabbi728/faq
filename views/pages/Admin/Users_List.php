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

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users List</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Eamil</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list_values as $key => $list_value):
                    ?>
                    <tr>
                        <td><?= $list_value['name'] ?></td>
                        <td><?= $list_value['email'] ?></td>
                        <td><?= $list_value['password'] ?></td>
                        <td>
                            <a href="Controler/faq_delete.php?id=<?= $key ?>" class="btn btn-danger" type="button" onclick="return confirm('Are You Sure')">Delete</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Page</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" class="register-form" id="register-form"
                                                  action="Controler/cat_update.php">
                                                <div class="form-group">
                                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                                    <input type="text" name="name" id="name" value="<?= $list_value['name'] ?>"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                                    <input type="email" name="email" id="email" value="<?= $list_value['email'] ?>"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                                    <input type="password" name="password" id="pass"
                                                           value="<?= $list_value['password'] ?>"/>
                                                </div>
                                                <div class="form-group form-button">
                                                    <input type="hidden" name="ref" value="Users Registration Data/<?= $key ?>">
                                                    <input type="submit" id="signup" class="form-submit" value="Update Data"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/elements/Admin/Footer.php" ?>