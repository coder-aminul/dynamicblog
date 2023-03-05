<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <title>
        <?php
        if (isset($view)) {
            if ($view === "deshboard") {
                echo "Deshboard";
            } elseif ($view === "addpost") {
                echo "Add Post";
            } elseif ($view === "manage_post") {
                echo "Mnaage Post";
            } else if ($view === "add_user") {
                echo "Add User";
            } elseif ($view === "manage_user") {
                echo "Manage User";
            } elseif ($view === "add_category") {
                echo "Add Category";
            } elseif ($view === "manage_category") {
                echo "Manage Categories";
            } elseif ($view === "profile") {
                echo "Prodile";
            } elseif ($view === "settings") {
                echo "Settings";
            } elseif ($view === "edit_category") {
                echo "Edit Category";
            } elseif ($view === "edit_profile") {
                echo "Edit Profile";
            }
        } else {
            echo $app_data['app_name'];
        }

        ?>
    </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="smart Materials Techologies" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- morris css -->
    <link rel="stylesheet" href="./plugins/morris/morris.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="./assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
</head>