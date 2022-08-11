<?php

require_once "database.php";
session_start();

if( !isset($_SESSION['username']) ){
    if( isset($_COOKIE['username']) && isset($_COOKIE['password']) ){
        if( $_COOKIE['username'] == USERNAME && $_COOKIE['password'] == PASSWORD) {
            $_SESSION['username'] = $_COOKIE['username'];
            header("Location: adminpanel.php");
            die;
        }
    }
    header("Location: login.php");
    die;
}

require "View/index.view.php";