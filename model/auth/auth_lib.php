<?php

function processAuth($user, $pass) {

    $userlist = array();
    $userlist["allen"] = "test1234";
    $userlist["admin"] = "admin1234";
    $userlist["user"] = "user1234";

    $auth = array();
    $auth["return"] = false;
    $auth["message"] = "";

    //Check if user exists
    $userArray = array_keys($userlist);
    if (in_array($user, $userArray)) {

        //Check if password is valid
        if ($pass == $userlist[$user]) {
            $auth["return"] = true;
        }
        else{
            $auth["message"] = "Password is not correct";
        }
    }
    else {
        $auth["message"] = "User does not exist";
    }

    return($auth);
}