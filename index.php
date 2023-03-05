<?php
include('./admin/config/functions.php');
$adminObj = new Main();
$get_category = $adminObj->display_category();
$get_categorysidebar = $adminObj->display_category();

?>


<?php
include_once('./includes/header.php');

?>

<body>

    <!-- ***** Preloader Start ***** -->
    <?php
    include_once('./includes/preloader.php');
    ?>
    <!-- ***** Preloader End ***** -->

    <!-- Header Start-->
    <?php
    include_once('./includes/navbar.php');
    ?>
    <!-- Header END-->
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php
    include_once('./includes/main_slider.php');

    ?>
    <!-- Banner Ends Here -->

    <!--Call to Action-->
    <?php
    include_once('./includes/calltoaction.php');
    ?>

    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <?php

                include_once('./includes/home_blog_section.php');
                ?>
                <?php
                include_once('./includes/sidebar.php');
                ?>
            </div>
        </div>
    </section>

    <?php
    include_once('./includes/footer.php');

    ?>
    <?php
    include_once('./includes/script.php');

    ?>

</body>

</html>