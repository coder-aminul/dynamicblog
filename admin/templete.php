<?php
include('./config/functions.php');

$adminObj = new Main();
session_start();

$id = $_SESSION['adminID'];
if ($id === null) {
    header('location:index.php');
}

//Admin Logout
if (isset($_GET['adminlogout'])) {
    if ($_GET['adminlogout'] === 'logout') {
        $adminObj->adminLogout();
    }
}

?>


<?php
include_once('./includes/header.php');

?>
<!-- <img src="./assets/images/upload/" alt=""> -->

<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <?php
        include_once('./includes/sidebar_menu.php');

        ?>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <!-- Top Bar Start -->
                <?php

                include_once('./includes/topbar.php');
                ?>
                <!-- Top Bar End -->

                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <!-- page-conatiner dynamic-->
                        <!-- Routing Setup -->
                        <?php
                        if (isset($view)) {
                            if ($view === "deshboard") {
                                include('./views/deshboard_view.php');
                            } elseif ($view === "addpost") {
                                include('./views/addpost_view.php');
                            } elseif ($view === "manage_post") {
                                include('./views/managepost_view.php');
                            } else if ($view === "add_user") {
                                include('./views/add_user_view.php');
                            } elseif ($view === "manage_user") {
                                include('./views/manage_user_view.php');
                            } elseif ($view === "add_category") {
                                include('./views/add_cataegory.php');
                            } elseif ($view === "manage_category") {
                                include('./views/manage_category.php');
                            } elseif ($view === "profile") {
                                include('./views/profile_view.php');
                            } elseif ($view === "settings") {
                                include('./views/settings_view.php');
                            } elseif ($view === "edit_category") {
                                include('./views/edit_category_view.php');
                            } elseif ($view === "edit_profile") {
                                include('./views/edit_profile.php');
                            }
                        }
                        ?>
                    </div>
                    <!-- container fluid -->
                </div>
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->

            <?php
            include_once('./includes/footer.php');
            ?>
        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->
    <?php

    include_once('./includes/script.php');
    ?>
</body>

</html>