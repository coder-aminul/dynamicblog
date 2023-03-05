<?php
$categories = $adminObj->display_category();
$result = $adminObj->count_category();

//Delete Catagory
if (isset($_GET['status'])) {
    if ($_GET['status'] === 'delete') {
        $id = $_GET['id'];
        $retrundata = $adminObj->delete_catagory($id);
    }
}

?>

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Manage Categories</h4>
                </div>

                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-export mr-1"></i> Export
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                <a class="dropdown-item" href="#">PDF</a>
                                <a class="dropdown-item" href="#">Excel</a>
                                <a class="dropdown-item" href="#">Word</a>
                            </div>
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
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">
                            Manage Categories
                            <span class="float-right">
                                <a href="./add_category.php" class="btn btn-sm btn-success text-white">
                                    <i class="mdi mdi-credit-card-plus"></i> Add
                                </a>
                            </span>
                        </h4>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($result === 0) {
                                        echo '<tr>
                                        <td colspan="4" class="text-center font-weight-bold">Categories Not Found!</td>
                                    </tr>';
                                    } else {
                                        include('category_row.php');
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
</div>