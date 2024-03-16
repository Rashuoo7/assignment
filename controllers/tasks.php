<?php
$title = "Tasks";

$db = new Database();
$users = $db->query("select * from users")->fetchAll();

if (is_admin()){
$tasks = $db->query('select * from tasks')->fetchAll();


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['submit'])){
            $db->query("INSERT INTO `tasks` (`title`, `user_id`) values ('{$_POST['task_title']}', '{$_POST['user_id']}')");
        }
        header('location: /tasks');
    }

}else
    if (is_logged_in()){
    $tasks = $db->query("select * from tasks where user_id = '{$_SESSION['user']['id']}'")->fetchAll();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_POST['submit'])){
                $db->query("INSERT INTO `tasks` (`title`, `user_id`) values ('{$_POST['task_title']}', '{$_SESSION['user']['id']}')");
            }
            header('location: /tasks');
        }
}




require './views/tasks.view.php';

