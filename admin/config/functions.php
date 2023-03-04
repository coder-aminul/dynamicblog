<?php

class Main
{
    private $connection;
    public function __construct()
    {
        //Database Credentials
        $db_host = 'localhost';
        $db_user= 'root';
        $db_pass="";
        $db_name= 'blog';

        $this->connection= mysqli_connect($db_host,$db_user,$db_pass,$db_name);

        if(!$this->connection){
            die("Database Connection Failed!!");
        }
    }

}
?>