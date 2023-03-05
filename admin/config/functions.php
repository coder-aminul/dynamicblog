<?php

class Main
{
    private $connection;
    public function __construct()
    {
        //Database Credentials
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = "";
        $db_name = 'blog';

        $this->connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        if (!$this->connection) {
            die("Database Connection Failed!!");
        }
    }

    //Admin Login
    public function adminLogin($data)
    {
        $admin_email = $data['admin_email'];
        $admin_pass = md5($data['password']);

        $query = "SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_pass='$admin_pass'";

        if (mysqli_query($this->connection, $query)) {
            $admin_info = mysqli_query($this->connection, $query);


            if ($admin_info) {
                header('location:deshboard.php');
                $admin_data = mysqli_fetch_assoc($admin_info);
                session_start();
                $_SESSION['adminID'] = $admin_data['id'];
                $_SESSION['adminName'] = $admin_data['admin_name'];
            }

        }
    }

    //Admin Logout
    public function adminLogout()
    {
        unset($_SESSION['adminID']);
        unset($_SESSION['adminName']);
        header('location: index.php');
    }
    //Add Category
    public function add_category($data)
    {
        $cat_name = $data['cat_name'];
        $cat_desc = $data['cat_des'];

        //Insert Data IN Data Base
        $query = "INSERT INTO category(cat_name,cat_desc) VALUE('$cat_name','  $cat_desc')";

        if (mysqli_query($this->connection, $query)) {
            return "Category Add Successfully!";
        }
    }

    //Manage categories
    public function display_category()
    {
        $query = "SELECT * FROM category";
        if (mysqli_query($this->connection, $query)) {
            $response = mysqli_query($this->connection, $query);
            return $response;
        }
    }

    public function count_category()
    {
        $query = "SELECT * FROM category";
        $connection_query_run = mysqli_query($this->connection, $query);
        $totaldata = mysqli_num_rows($connection_query_run);
        return $totaldata;
    }

    public function display_categoryBy_id($id)
    {
        $query = "SELECT * FROM category WHERE cat_id=$id";
        if (mysqli_query($this->connection, $query)) {
            $response = mysqli_query($this->connection, $query);
            $responseData = mysqli_fetch_assoc($response);
            return $responseData;

        }
    }

    public function update_category($data)
    {
        $update_cat_name = $data['update_cat_name'];
        $update_cat_desc = $data['update_cat_des'];
        $id = $data['cat_id'];

        $query = "UPDATE category SET cat_name='$update_cat_name',cat_desc='$update_cat_desc' WHERE cat_id=$id";

        if (mysqli_query($this->connection, $query)) {
            return "Catagory Update SuccessFully!!";
        }
    }


    //Delete Category
    public function delete_catagory($id)
    {
        $query = "DELETE FROM category WHERE cat_id=$id";
        if (mysqli_query($this->connection, $query)) {
            return "Category Deleted Successfully!";
        }

    }

}
?>