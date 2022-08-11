<?php

session_start();
require "database.php";
require "functions.php";
$status = null;

if( isset($_SESSION['username']) ){
    header("Location: adminpanel.php");
    die;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
        if ( !empty($username) && !empty($password) ){
            $password = hash_hmac("sha256" , $password , "Elpateria");
            $data = $username.",".$password;
            $users = getDataOfDatabase();
                if( !array_key_exists($username , $users) ) {
                    saveData($data);
                    header("Location: login.php");
                } else {
                    $status = "This username already exists";
                }

        } else {
            $status = "Please enter UserName and Password";
        }
}

require "View/register.view.php";