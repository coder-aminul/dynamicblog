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

}
?>