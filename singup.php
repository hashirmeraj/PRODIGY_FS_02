<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
    <link rel="stylesheet" href="./src/output.css">
</head>

<body>
    <div class="main w-full mb bg-gray-800 flex  items-center flex-col ">

        <!-- Alert -->

        
        <div class=" mt-14">
            <img src="./src/images/Nightmare Ninja.png" alt="" srcset="">
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
                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="useremail" type="email" placeholder="Username">
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
                    <span>Existing user?<a href="http://"><span class=" font-bold"> Log in </span></a>here.</span>

                </div>

            </form>

        </div>
    </div>
    <script>
        document.getElementById('close').addEventListener('click', function() {
            var alert = document.getElementById('alert-border-1');
            alert.style.display = 'none';
        });
    </script>
</body>

</html>