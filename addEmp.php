<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/output.css" rel="stylesheet">
    <script src="./src/script/script.js"></script>
    <script src="//cdn.datatables.net/2.1.5/js/dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/b01bd35356.js" crossorigin="anonymous"></script>
    <!-- Theeeeeeee -->



</head>

<body>
    <div class="main flex">
        <!-- Sidebar -->
        <?php
        include './particles/sidebar.php';
        ?>
        <!-- Main Content Area -->
        <div class="flex flex-col  w-[86%]">
            <!-- Header -->
            <?php
            include './particles/header.php';
            ?>
            <!-- New Div for Main Content -->
            <div class="content bg-slate-400 flex-grow ">

                <div class=" main-area">
                    <!-- component -->
                    <div class="form mt-12 ml-24">
                        <div class="mt-10 sm:mt-0">
                            <div class="md:grid md:grid-cols-3 md:gap-6">

                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <form action="#" method="POST">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-gray-900 sm:p-6 ">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6 sm:col-span-6">
                                                        <label for="first_name" class="label">Full name</label>
                                                        <input required type="text" name="first_name" id="first_name" autocomplete="given-name" class="emp-input">
                                                    </div>



                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="email_address" class="label">Email address</label>
                                                        <input required type="email" name="email_address" id="email_address" autocomplete="email" class="emp-input">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="phone" class="label">Phone Number</label>
                                                        <input required type="number" name="Phone_Number" autocomplete="given-name" class="emp-input" min="6">
                                                    </div>

                                                    <div class="col-span-6">
                                                        <label for="street_address" class="label">Street address</label>
                                                        <input required type="text" name="street_address" id="street_address" autocomplete="street-address" class="emp-input">
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                        <label for="city" class="label">Country</label>
                                                        <input required type="text" name="city" id="city" class="emp-input">
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="px-4 py-3  bg-gray-900 text-right sm:px-6 ">
                                                <button type="reset" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 active:bg-gray-700">
                                                    Discard
                                                </button>
                                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script>

    </script>
</body>

</html>