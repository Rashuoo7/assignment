<?php


function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function is_logged_in(){
    return isset($_SESSION['user']);
}

function is_admin()
{
    if (is_logged_in()){
        if($_SESSION['user']['is_admin']){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}
