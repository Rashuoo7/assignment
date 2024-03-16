<?php
$title = "Login Page";
$db = new Database();

if(is_logged_in()){
    header('location: /');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['submit'])) {
        $data = $db->query("select * from users where email = '{$_POST['email']}'")->fetch();
        if (md5($_POST['password']) == $data['password']) {

            $_SESSION['user'] = [
                'email' => $data['email'],
                'id' => $data['id'],
                'last_password_change' => $data['last_password_change'],
                'is_admin' => $data['is_admin'],
                'last_login' => $data['last_login']
            ];
            header('location: /');
            $_SESSION['logged'] = true;
        }else{
            $error = "Password or Email Does not match";
        }

    }
}

require './views/login.view.php';