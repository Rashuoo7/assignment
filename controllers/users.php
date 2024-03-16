<?php
$title = "Users";

$db = new Database();
$users = $db->query("select * from users")->fetchAll();

require './views/users.view.php';