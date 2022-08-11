<?php

session_start();
require "database.php";
require "functions.php";


if( !isset($_SESSION['username']) ){
    if( isset($_COOKIE['username']) && isset($_COOKIE['password']) ){
        $password = hash_hmac("sha256" , $password , "Elpateria");
        $users = getDataOfDatabase();
        if( $_COOKIE['username'] == array_key_exists($username,$users) && $_COOKIE['password'] == $users[$username]) {
            $_SESSION['username'] = $_COOKIE['username'];
            header("Location: adminpanel.php");
            die;
        }
    }
    header("Location: login.php");
    die;
}

/*setcookie("website" , "Allin" , time() - 360 * 24 );*/

$username = $_SESSION['username'];

require 'View/adminpanel.view.php';