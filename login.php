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
            $users = getDataOfDatabase();
            if( $username == array_key_exists($username,$users) && $password == $users[$username]) {
                if($_POST['remember'] == true ){
                    setcookie("username" , $username , time() + 60 * 60 );
                    setcookie("password" , $password , time() + 60 * 60 );
                }
            $_SESSION['username'] = $username;
            header("Location: adminpanel.php");
            die;
        } else {
                $status = "Username or Password incorrect";
            }
    } else {
            $status = "Please enter Username and Password";
        }
}

require 'View/login.view.php';