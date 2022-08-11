<?php

/*session_start();
if( !isset($_SESSION['username']) ) {
    header("Location: login.php");
    die;}*/


function isPost() {
    return $_SERVER["REQUEST_METHOD"] == "post";
}

function redirect($location){
    header("Location: {$location}");
    die;
}

function validation_required($items){
    $counter_error = 0;
    foreach ($items as $item) {
        if(empty($item))
            $counter_error++;
    }
    return $counter_error == 0;
}

function AuthLogin($location = "login.php"){
    if( !isset($_SESSION['username']))
        redirect($location);
}

function AuthLogout($location = "index.php"){
    if( isset($_SESSION['username']))
        redirect($location);
}

function old($key) {
    if( !empty($_REQUEST[$key]) )
        return htmlspecialchars($_REQUEST[$key]);
    return '';
}