<?php
$title = "Password Reset";
$db = new Database();
require './views/password_reset.view.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['submit'])) {
        $user_data = $db->query("select * from users where id = '{$_SESSION['user']['id']}'")->fetch();

        $old_pswd = md5($_POST['old_password']);
        $new_pswd = md5($_POST['password']);

        if ($old_pswd == $user_data['password']){

            $result = $db->query("update users set `last_password_change` = '{$old_pswd}', `password` = '{$new_pswd}' where id = {$user_data['id']}");

        }else{
            $error = "old password is wrong";
        }

        if ($result){
            $_SESSION['user'] = [
                'email' => $user_data['email'],
                'id' => $user_data['id'],
                'last_password_change' => $old_pswd,
                'is_admin' => $user_data['is_admin'],
                'last_login' => $user_data['last_login']
            ];
        }
        header("Refresh:0");
    }
}