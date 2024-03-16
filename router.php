<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$AdminRoutes = [
    '/' => 'controllers/homepage.php',
    '/download_tasks' => 'controllers/download_tasks.php',
    '/register' => 'controllers/register.php',
    '/users' => 'controllers/users.php',
    '/admin' => 'controllers/admin_dashboard.php',
    '/logout' => 'controllers/logout.php',
    '/tasks' => 'controllers/tasks.php',
];
$Routes = [
    '/' => 'controllers/homepage.php',
    '/tasks' => 'controllers/tasks.php',
    '/login' => 'controllers/login.php',
    '/logout' => 'controllers/logout.php',

];


if (is_admin()){
    if(array_key_exists($uri, $AdminRoutes)){
        require $AdminRoutes[$uri];
    }
}else if(is_logged_in() && $_SESSION['user']['last_password_change'] == NULL ){

    require 'controllers/password_reset.php';
} else
    if(array_key_exists($uri, $Routes)){
    require $Routes[$uri];
}else{
    require './views/404.view.php';
}
