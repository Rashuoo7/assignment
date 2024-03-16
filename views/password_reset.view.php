<?php //require 'components/head.php' ?>
<?php //require 'components/nav.php'; ?>
<?php //require 'components/header.php'; ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="text-xl  font-bold leading-7 text-gray-900">Password Reset</div>
            <form method="POST">
                <div class="space-y-12">
                    <div class="">
                        <div class="sm:col-span-3">
                            <label for="old_password" class="block text-sm font-medium leading-6 text-gray-900">Old Password</label>
                            <div class="mt-2">
                                <input required type="password" placeholder="Enter Old Password" name="old_password" id="old_password" autocomplete="old_password" class=" p-2 block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?php echo isset($_POST['old_password']) ? $_POST['old_password'] : '' ?>">
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">New Password</label>
                            <div class="mt-2">
                                <input required type="password" placeholder="Enter New Password" name="password" id="password" autocomplete="old_password" class=" p-2 block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="submit" name="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Change Password</button>
                </div>
            </form>

    </div>
</main>
<?php require 'components/footer.php' ?>
