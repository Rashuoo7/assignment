<?php
$title = "Register Page";


$db = new Database();

if(isset($_POST['submit'])){
    $password = md5($_POST['password']);

    if(!$db->query("select * from users where email = '{$_POST['email']}'")->fetch()){

        $db->query("INSERT INTO `users` 
    (`first_name`, `last_name`, `email`, `phone`, `password`, `last_login`, `last_password_change`, `is_admin`)
    VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '123456789', '{$password}', NOW(), NULL, false)");
    }

}


require './views/register.view.php';