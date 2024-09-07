<?php
$emailError = false;
$passError = false;
if (isset($_GET['success']) && $_GET['success'] == 'false') {
    if (isset($_GET['error']) && $_GET['error'] == 'email') {
        $emailError = true;
    } elseif (isset($_GET['error']) && $_GET['error'] == 'password') {
        $passError = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
    <link rel="stylesheet" href="./src/styles.css">
</head>

<body>
    <div class="main w-full mb bg-gray-800 flex  items-center flex-col ">

        <!-- Alert -->
        <?php
        if ($emailError) {
            echo '
                    <div  class="error alert-border-1" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                An account with this email already exists. Please use a different email or log in.
            </div>
            <button  type="button" class="error-close close" data-dismiss-target="#alert-border-1" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>

                ';
        } elseif ($passError) {
            echo '
            <div  class="error alert-border-1" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <div class="ms-3 text-sm font-medium">
        The passwords you entered do not match. Please try again.
    </div>
    <button  type="button" class="error-close close" data-dismiss-target="#alert-border-1" aria-label="Close">
        <span class="sr-only">Dismiss</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>

        ';
        }
        ?>


        <div class=" mt-14">
            <img src="./src/images/logo.png" alt="" srcset="">
        </div>
        <div class="p-4 text-xl  text-white"> Create an account to continue.</div>
        <div class="w-full max-w-xs mb-7">
            <form action="./particles/handleSingup.php" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Username">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="useremail">
                        Email
                    </label>
                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="useremail" type="email" placeholder="Email">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>

                    <input required required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
                    <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Confirm Password
                    </label>

                    <input required required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="ConfPassword">
                    <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
                </div>
                <div class="flex items-center justify-between">
                    <button class="btn2" type="sumbit">
                        Sign In
                    </button>

                </div>

                <div class="flex items-center justify-between mt-2">
                    <span>Existing user?<a href="./login.php"><span class=" font-bold"> Log in </span></a>here.</span>

                </div>

            </form>

        </div>
    </div>

    <script src="./src/script/script.js"></script>
</body>

</html>