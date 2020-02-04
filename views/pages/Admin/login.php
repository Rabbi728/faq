<?php
if (!isset($_SESSION)){
    session_start();
}
if (isset($_SESSION['Auth_User']) and !empty($_SESSION['Auth_User_details'])){
    header('location:/views/pages/Admin/index.php');
}
include_once $_SERVER['DOCUMENT_ROOT'] . "/views/elements/Auth/head.php";

?>
  <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../../../assets/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Signin</h2>
                        <form method="POST" class="register-form" id="login-form" action="Controler/user_chack.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/views/elements/Auth/footer.php";
?>