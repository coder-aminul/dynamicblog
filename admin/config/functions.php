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
                $_SESSION['image'] = $admin_data['admin_photo'];
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
    //Add User
    public function addUser($data)
    {
        $user_name = $data['add_user_name'];
        $user_email = $data['add_user_email'];
        $user_password = md5($data['add_user_password']);
        $user_photo = $_FILES['add_user_photo']['name'];
        $temp = $_FILES['add_user_photo']['tmp_name'];

        $query = "INSERT INTO admin_info(admin_email,admin_name,admin_pass,admin_photo) VALUES('$user_email','$user_name','$user_password','$user_photo')";

        if (mysqli_query($this->connection, $query)) {
            move_uploaded_file($temp, './assets/images/upload/' . $user_photo);
            return "Add User Successfully!";
        }


    }
    //Profile Display

    public function display_profile()
    {
        $query = "SELECT * FROM admin_info";
        if (mysqli_query($this->connection, $query)) {
            $admin_info = mysqli_query($this->connection, $query);
            return $admin_info;
        }
    }

    public function display_profileBy_id($id)
    {
        $query = "SELECT * FROM admin_info WHERE id=$id";
        if (mysqli_query($this->connection, $query)) {
            $profle = mysqli_query($this->connection, $query);
            $profiledata = mysqli_fetch_assoc($profle);
            return $profiledata;

        }
    }

    //Update Profile
    public function updateProfile($data)
    {

        $adminname_update = $data['update_name'];
        $update_email = $data['update_email'];
        $update_password = md5($data['update_password']);
        $update_photo = $_FILES['update_photo']['name'];
        $tmp_names = $_FILES['update_photo']['tmp_name'];
        $adminId = $data['id'];

        $query = "UPDATE admin_info SET admin_email='$update_email',admin_name='$adminname_update',admin_pass='$update_password',admin_photo='$update_photo' WHERE id='$adminId'";
        if (mysqli_query($this->connection, $query)) {
            move_uploaded_file($tmp_names, './assets/images/upload/' . $update_photo);
            return "Profile Update Successfully!";
        }


    }
    //Delete User Profile
    public function delete_user($id)
    {
        $query = "DELETE FROM admin_info WHERE id=$id";
        if (mysqli_query($this->connection, $query)) {
            return "User Deleted Successfully!";
        }

    }
    //Add Category
    public function add_category($data)
    {
        $cat_name = $data['cat_name'];
        $cat_desc = $data['cat_des'];

        //Insert Data IN Data Base
        $query = "INSERT INTO category(cat_name,cat_desc) VALUES('$cat_name','  $cat_desc')";

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

    //Admin App Setting
    public function displaySettings()
    {
        $query = "SELECT * FROM app_info";
        if (mysqli_query($this->connection, $query)) {
            $response = mysqli_query($this->connection, $query);
            return $response;
        }
    }
    //Update Deshboard App
    public function updateApp($data)
    {
        $app_id = $data['id'];
        $app_name = $data['up_app_name'];
        $app_logo = $_FILES['up_app_logo']['name'];
        $tmpname = $_FILES['up_app_logo']['tmp_name'];
        $app_copywrtt = $data['up_app_copywrt'];

        $query = "UPDATE app_info SET app_name='$app_name', app_logo='$app_logo',app_copywrt='$app_copywrtt' WHERE id=$app_id";

        if (mysqli_query($this->connection, $query)) {
            move_uploaded_file($tmpname, './assets/images/upload/' . $app_logo);
            return "App Update Update Successfully!";
        }
    }
    //Add New Post
    public function addnewpost($data)
    {
        $post_title = $data['post_title'];
        $post_content = $data['post_content'];
        $post_status = $data['post_status'];
        $post_catg = $data['post_category'];
        $post_date = $data['post_date'];
        $post_tag = $data['post_tag'];
        $post_img = $_FILES['post_img']['name'];
        $tmp_name = $_FILES['post_img']['tmp_name'];
        $post_author = $_SESSION['adminName'];

        $query = 'INSERT INTO `post`(`post_title`,`post_content`,`post_img`,`post_catg`,`post_author`,`post_comment_count`,`post_tag`,`post_date`,post_status) VALUES("' . $post_title . '","' . $post_content . '","' . $post_img . '","' . $post_catg . '","' . $post_author . '",3,"' . $post_tag . '","' . $post_date . '","' . $post_status . '")';

        if (mysqli_query($this->connection, $query)) {
            move_uploaded_file($tmp_name, './assets/images/upload/' . $post_img);
            return '<div class="alert alert-success alert-dismissible fade show my-4" role="alert" style="margin-top: 85px;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Successfully!</strong> Add New Post.
        </div>';
        } else {
            return '<div class="alert alert-success alert-dismissible fade show my-2" role="alert" style="margin-top: 85px;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Sorry!</strong> Failed to Add New Post!.
        </div>';
        }
    }

    //MANAGE POST
//Dispaly Post
    public function displayPost()
    {
        $query = "SELECT * FROM post_with_ctg";
        if (mysqli_query($this->connection, $query)) {
            $responseData = mysqli_query($this->connection, $query);
            return $responseData;
        }
    }

}
?>