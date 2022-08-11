<?php

session_start();
session_destroy();
if( isset($_COOKIE['username']) && isset($_COOKIE['password']) ){
    setcookie("username" , "" , time() - 60 );
    setcookie("password" , "" , time() - 60 );
}

header("location: login.php");
die;