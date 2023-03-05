<?php
$get_info = $adminObj->displaySettings();
$app = mysqli_fetch_assoc($get_info);


//Update App
if (isset($_POST['update_settings'])) {
    $adminObj->updateApp($_POST);
}
?>

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Settings</h4>
                </div>
                <div class="col-md-4">

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
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">App Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="up_app_name" type="text"
                                        value="<?php echo $app['app_name'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">App Logo</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="up_app_logo" type="file">
                                    <img class="mt-2" width="80"
                                        src="./assets/images/upload/<?php echo $app['app_logo'] ?>"
                                        alt="<?php echo $app['app_name'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Footer Text</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="up_app_copywrt" type="text"
                                        value="<?php echo $app['app_copywrt'] ?>">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $app['id'] ?>">
                            <div class="float-left mt-3">
                                <button type="submit" class="btn btn-success" name="update_settings">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
</div>