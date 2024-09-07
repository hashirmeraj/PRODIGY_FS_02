<?php
$error = false;
$success = false;
if (isset($_GET['success']) && $_GET['success'] == "false") {
    $error = true;
} elseif (isset($_GET['success']) && $_GET['success'] == "true") {
    $success = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./src/styles.css">
</head>

<body>
    <div class="main w-full h-screen bg-gray-800 flex  items-center flex-col ">
        <!-- Alert -->

        <?php
        if ($success) {
            echo '
                    <div  class="success alert-border-1" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                Your signup was successful. Welcome to our platform.
            </div>
            <button  type="button" class="success-close close" data-dismiss-target="#alert-border-1" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
            </div>
                ';
        } elseif ($error) {
            echo '
                    <div class="error alert-border-1" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <div class="ms-3 text-sm font-medium">
            The credentials you entered are invalid. Please check your username and password and try again.
        </div>
        <button type="button" class="error-close close" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
            ';
        }
        ?>
        <div class=" mt-16">
            <img src="./src/images/logo.png" alt="" srcset="">
        </div>
        <div class="p-4 text-xl  text-white"> Log in to access your account.</div>
        <div class="w-full max-w-xs">
            <form action="./particles/handleLogin.php" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Email
                    </label>
                    <input required required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="userEmail" type="email" placeholder="Email">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>

                    <input required required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="userPassword" type="password" placeholder="******************">
                    <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
                </div>
                <div class="flex items-center justify-between">
                    <button class="btn2" type="submit">
                        Sign In
                    </button>

                </div>

                <div class="flex items-center justify-between mt-2">
                    <span>Don't have an account?<a href="./singup.php"><span class=" font-bold"> Sign up</span></a>.</span>

                </div>

            </form>

        </div>
    </div>

    <script src="./src/script/script.js"></script>
</body>

</html>