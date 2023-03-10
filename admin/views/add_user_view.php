<?php
if (isset($_POST['add_user_btn'])) {
    $adminObj->addUser($_POST);
}

?>

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Add User</h4>
                </div>

                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <a href="manage_user.php" class="btn btn-primary text-white" type="button">
                            <i class="far fa-list-alt mr-1"></i> Manage User
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
                                    <input class="form-control" name="add_user_name" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="add_user_email" type="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="add_user_password" type="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Photo</label>
                                <div class="col-sm-10">
                                    <input type="file" name="add_user_photo" class="form-control">
                                </div>
                            </div>
                            <div class="float-left mt-3">
                                <button type="submit" class="btn btn-success" name="add_user_btn">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
</div>