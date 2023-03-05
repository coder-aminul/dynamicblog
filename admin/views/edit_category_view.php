<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] === 'edit') {
        $id = $_GET['id'];
        $retrunData = $adminObj->display_categoryBy_id($id);
    }
}

//update
if (isset($_POST['update_category'])) {
    $adminObj->update_category($_POST);
}

?>

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Update Category</h4>
                </div>

                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <a href="manage_category.php" class="btn btn-primary text-white" type="button">
                            <i class="far fa-list-alt mr-1"></i> Manage Category
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
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="update_cat_name" type="text"
                                        value="<?php echo $retrunData['cat_name'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category Description</label>
                                <div class="col-sm-10">
                                    <textarea name="update_cat_des"
                                        class="form-control"><?php echo $retrunData['cat_desc'] ?></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="cat_id" value="<?php echo $retrunData['cat_id'] ?>">
                            <div class="float-left mt-3">
                                <button type="submit" class="btn btn-success" name="update_category">Update
                                    Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
</div>