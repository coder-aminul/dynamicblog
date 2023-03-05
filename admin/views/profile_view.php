<?php
$currentadminId = $_SESSION['adminID'];

if (isset($_GET['status'])) {
    if ($_GET['status'] === 'view') {
        $id = $_GET['id'];
        $retrunData = $adminObj->display_profileBy_id($id);
    }
}


?>

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Admin Profile</h4>

                </div>
                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <a href="edit_profile.php?status=edit&&id=<?php echo $currentadminId ?>"
                                class="btn btn-primary " type="button">
                                <i class="ti-settings mr-1"></i> Manage Profile
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

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="card faq-box">
                    <div class="card-body">
                        <div class="faq-icon">
                            <i class="dripicons-user h2 icon-one"></i>
                            <i class="dripicons-user h2 icon-two"></i>
                        </div>
                        <h5 class="font-16 mb-3">Profile Information</h5>

                        <div class="row justify-content-center mb-3">
                            <div class="col-lg-2">
                                <img class="rounded" alt="200x200" width="100"
                                    src="./assets/images/upload/<?php echo $retrunData['admin_photo'] ?>"
                                    data-holder-rendered="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value=" <?php echo $retrunData['admin_name'] ?>"
                                    id="" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text"
                                    value=" <?php echo $retrunData['admin_email'] ?>" id="" readonly>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
</div>
<!-- end row -->