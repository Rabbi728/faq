<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

use Rabbi\Query\Users;

$users = new Users();

$list_values = $users->get_value('Users Registration Data');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/assets/auth/css/style.css">

    <title>User list</title>
</head>
<body>
<br>
<br>
<section class="signup">
    <div class="container">
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
                        <a href="delete.php?id=<?= $key ?>" class="btn btn-danger" type="button" onclick="return confirm('Are You Sure')">Delete</a>
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
                                              action="update_data.php">
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
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="/assets/auth/js/main.js"></script>
</body>
</html>