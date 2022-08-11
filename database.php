<?php

define("DATABASE_LOCATION" , "database.txt");

function getDataOfDatabase() {
    $handle = file_get_contents(DATABASE_LOCATION);
    $userE = explode("\n" , $handle);
    $users = [];

    foreach ($userE as $user ){
        $u = explode("," , $user);
        $users[$u[0]] = $u[1];
    }
    return $users;
}

function saveData($datas){
    file_put_contents(DATABASE_LOCATION , "\n" . $datas , FILE_APPEND);
}