<?php
$categories = $adminObj->display_category();

if ($_GET['status']) {
    if ($_GET['status'] === 'edit') {
        $id = $_GET['id'];
        $retrunData = $adminObj->display_post_byid($id);
    }

}
//Update post
if (isset($_POST['update_post_btn'])) {
    $message = $adminObj->update_post($_POST);
}


?>

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Edit Post</h4>
                </div>
                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <a href="manage_post.php" class="btn btn-primary text-white" type="button">
                            <i class="far fa-list-alt mr-1"></i> Manage Posts
                        </a>
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
<?php
if (isset($message)) {
    echo $message;
}
?>
<div class="page-content-wrapper">
    <div class="container-fluid">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label font-16">Add Title</label>
                                <div class="col-sm-12">
                                    <input class="form-control" name="up_post_title" type="text"
                                        value="<?php echo $retrunData['post_title'] ?>" required />
                                </div>
                            </div>
                            <div class="card m-b-30" style="padding-top: 5px;">
                                <div class="card-body">
                                    <div class="row">
                                        <label class="col-sm-12 col-form-label font-16">Add Post Description</label>
                                        <div class="col-12">
                                            <textarea id="elm1"
                                                name="up_post_content"> <?php echo $retrunData['post_content'] ?> </textarea>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <label class="col-sm-12 col-form-label font-weight-500 font-16">Published</label>
                                <hr style="margin: 0 !important;" />
                                <div class="card-body">
                                    <label class="">Status</label>
                                    <select class="form-control" name="up_post_status"
                                        value="<?php echo $retrunData['post_status'] ?>">
                                        <option value="0">Published</option>
                                        <option value="1">Pendding</option>
                                    </select>
                                    <div class="my-2">
                                        <label class="">Date</label>
                                        <input type="date" name="up_post_date" class="form-control"
                                            value="<?php echo $retrunData['post_date'] ?>">
                                    </div>
                                    <input type="hidden" name="post_id" value="<?php echo $retrunData['post_id'] ?>" />
                                    <div class="mt-2 float-lg-right">
                                        <button type="submit" name="update_post_btn" class="btn btn-primary">Update
                                            Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <label class="col-sm-12 col-form-label font-weight-500 font-16">Categories</label>
                                <hr style="margin: 0 !important;" />
                                <div class="card-body">
                                    <select size="3" class="form-control" name="up_post_category"
                                        value="<?php echo $retrunData['post_category'] ?>">
                                        <?php while ($category = mysqli_fetch_assoc($categories)) { ?>
                                            <option value="<?php echo $category['cat_id'] ?>">
                                                <?php echo $category['cat_name'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <label class="col-sm-12 col-form-label font-weight-500 font-16">Tags</label>
                                <hr style="margin: 0 !important;" />
                                <div class="card-body">
                                    <input type="text" id="tag-input1" class="form-control" name="up_post_tag"
                                        value="<?php echo $retrunData['post_tag'] ?>" />
                                    <span class="mt-2">
                                        <i class="fas fa-tag"></i>
                                        <?php echo $retrunData['post_tag'] ?>
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <label class="col-sm-12 col-form-label font-weight-500 font-16">Featured image</label>
                                <hr style="margin: 0 !important;" />
                                <div class="card-body">
                                    <div class="">
                                        <div class="dropzone dz-clickable" style="min-height:auto;">
                                            <div class="fallback">
                                                <div class="dz-default dz-message">
                                                    <input class="form-control" type="file" multiple="multiple"
                                                        style="padding-top: 3px;">
                                                    <img width="200" class="mt-2"
                                                        src="./assets/images/upload/<?php echo $retrunData['post_img'] ?>"
                                                        alt="<?php echo $retrunData['post_img'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end col -->
    </div>
</div>
</div>