<?php

if ($_GET['status']) {
    if ($_GET['status'] === 'editimg') {
        $id = $_GET['id'];
        $retrundata = $adminObj->display_post_byid($id);

    }
}
if (isset($_POST['update_img_btn'])) {
    $message = $adminObj->update_post_image($_POST);
}

?>

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Edit Post Image</h4>
                </div>
                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <a class="btn btn-primary" href="./manage_post.php">
                                <i class="ti-settings mr-1"></i> Manage Post
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title-box -->
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <?php
            if (isset($message)) {
                echo $message;
            }

            ?>
            <div class="card-body" style="padding-bottom: 36px;">
                <div class="m-b-30">
                    <form action="" method="POST" enctype="multipart/form-data" class="dropzone">
                        <div class="fallback">
                            <input name="update_post_img" type="file">
                        </div>
                        <div class="text-center m-t-15 from-btn">
                            <button type="submit" name="update_img_btn"
                                class="btn btn-primary waves-effect waves-light">Send Files</button>
                        </div>
                        <input type="hidden" name="post_id" value="<?php echo $retrundata['post_id'] ?>">
                    </form>
                    <div class="d-flex justify-content-center">
                        <img class="my-2" width="200" src="./assets/images/upload/<?php echo $retrundata['post_img'] ?>"
                            alt="<?php echo $retrundata['post_title'] ?>">
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end col -->
</div> <!-- end row -->