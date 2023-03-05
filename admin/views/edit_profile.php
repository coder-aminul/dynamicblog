<?php
$currentadminId = $_SESSION['adminID'];
if (isset($_GET['status'])) {
    if ($_GET['status'] === 'edit') {
        $id = $_GET['id'];
        $retrunData = $adminObj->display_profileBy_id($id);
    }
}
//Update Profile
if (isset($_POST['update_profile'])) {
    $adminObj->updateProfile($_POST);
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
                        <a href="profile.php?status=view&&id=<?php echo $currentadminId ?>"
                            class="btn btn-primary text-white" type="button">
                            <i class="far fa-list-alt mr-1"></i> Manage Profile
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
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Admin Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="update_name" type="text"
                                        value="<?php echo $retrunData['admin_name'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="update_email" type="email"
                                        value="<?php echo $retrunData['admin_email'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="update_password" type="password" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Photo</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="update_photo" type="file" value="">
                                    <img class="mt-2" width="80"
                                        src="./assets/images/upload/<?php echo $retrunData['admin_photo'] ?>" alt="">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $retrunData['id'] ?>">
                            <input type="hidden" name="admin_id" value="">
                            <div class="float-left mt-3">
                                <button type="submit" class="btn btn-success" name="update_profile">Update
                                    Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
</div>