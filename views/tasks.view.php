<?php require 'components/head.php' ?>
<?php require 'components/nav.php'; ?>
<?php require 'components/header.php'; ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div>
            <?php
            foreach($tasks as $task){
                ?>
                <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-6 py-5">
                        <div class="flex min-w-0 gap-x-4">
                            <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="../assets/task.png" alt="">
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900"><?= $task['title'] ?></p>
                                <p class="text-sm leading-6 text-gray-900"><?php
                                    foreach($users as $user){
                                        if($user['id'] == $task['user_id']){
                                            echo $user['email'];
                                        }
                                    }
                                    ?></p>
                            </div>
                        </div>
                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <p class="mt-1 text-xs leading-5 text-gray-500"><time datetime="<?= $task['timestamp'] ?>"><?= date('Y-m-d h:i', strtotime($task['timestamp'])) ?></time></p>
                        </div>
                    </li>
                </ul>
            <?php
            }
            ?>
        </div>
        <div class="text-xl  font-bold leading-7 text-gray-900">New Task</div>
        <?php if(is_admin()){?>
        <form method="POST">
            <div class="space-y-12">
                <div class="">
                    <div class="sm:col-span-3">
                        <label for="task_title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <input type="text" placeholder="Enter Title" name="task_title" id="task_title" autocomplete="given-name" class=" p-2 block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-3">
                <label for="user_id" class="block text-sm font-medium leading-6 text-gray-900">User</label>
                <div class="mt-2">
                    <select id="user_id" name="user_id" autocomplete="user_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <?php
                        foreach($users as $user){
                            ?>
                            <option value="<?= $user['id'] ?>"><?= $user['email'] ?></option>
                        <?php }
                        ?>
                    </select>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" name="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
        <?php
        }else if(is_logged_in()){
        ?>
            <form method="POST">
                <div class="space-y-12">
                    <div class="">
                        <div class="sm:col-span-3">
                            <label for="task_title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                            <div class="mt-2">
                                <input required type="text" placeholder="Enter Title" name="task_title" id="task_title" autocomplete="given-name" class=" p-2 block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="submit" name="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
            <?php  }  ?>








    </div>
</main>
<?php require 'components/footer.php' ?>
