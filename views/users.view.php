<?php require 'components/head.php' ?>
    <?php require 'components/nav.php'; ?>
    <?php require 'components/header.php'; ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="my-5">
                <a href="/register" class="bg-violet-600 text-white hover:bg-violet-800 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Create a User</a>
            </div>
            <?php
            foreach($users as $user){
                    $role = $user['is_admin']?'Admin':'User';
                echo "ID: <span>". $user['id']."</span><br>";
                echo "First Name: <span>". $user['first_name']."</span><br>";
                echo "Last Name: <span>". $user['last_name']."</span><br>";
                echo "Role: <span>". $role ."</span><br>";
                echo '<br>';
            }
            ?>
        </div>
    </main>
    <?php require 'components/footer.php' ?>