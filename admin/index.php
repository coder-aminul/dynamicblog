<?php
include('./config/functions.php');

$mainObj = new Main();

//Admin Login

if (isset($_POST['login_btn'])) {
    $mainObj->adminLogin($_POST);
}
session_start();
if (isset($_SESSION['adminID'])) {
    $id = $_SESSION['adminID'];
}
if (isset($id)) {
    header('location: deshboard.php');
}
//App Name Set Index Title
$getapp_info = $mainObj->displaySettings();
$app_data = mysqli_fetch_assoc($getapp_info);
?>
<?php
include_once('./includes/header.php');
?>

<body class="fixed-left">
    <div class="account-pages">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="p-2">
                                <h4 class="text-muted float-right font-18 mt-4">Sign In</h4>
                                <div>
                                    <a href="index.php" class="logo logo-admin"><img src="assets/images/sm_logo.png"
                                            height="40" alt="logo" /></a>
                                </div>
                            </div>

                            <div class="p-2">
                                <form class="form-horizontal m-t-20" action="" method="POST">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" name="admin_email" required=""
                                                placeholder="Username,E-Mail,Phone No...." />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" name="password" type="password" required=""
                                                placeholder="Password" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                                <label class="custom-control-label" for="customCheck1">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group text-center row m-t-20">
                                        <div class="col-12">
                                            <button name="login_btn"
                                                class="btn btn-primary btn-block waves-effect waves-light"
                                                type="submit">
                                                Log In
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group m-t-10 mb-0 row">
                                        <div class="col-sm-7 m-t-20">
                                            <a href="pages-recoverpw.html" class="text-muted"><i
                                                    class="mdi mdi-lock"></i> Forgot your
                                                password?</a>
                                        </div>
                                        <div class="col-sm-5 m-t-20">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <?php
    include_once('./includes/script.php');

    ?>
</body>

</html>