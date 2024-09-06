<?php
$error = false;
$success = false;
$updateError = false;
$update = false;

include './particles/config.php';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    header("Location:./login.php");
    exit();
}

if (isset($_GET['success']) && $_GET['success'] == "false") {
    $error = true;
} elseif (isset($_GET['success']) && $_GET['success'] == "true") {
    $success = true;
} elseif (isset($_GET['update']) && $_GET['update'] == "true") {
    $update  = true;
} elseif (isset($_GET['update']) && $_GET['update'] == "false") {
    $updateError  = true;
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/styles.css" rel="stylesheet">
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
            <div class="content bg-slate-800 flex-grow ">
                <!-- Alert -->

                <?php
                if ($success) {
                    echo '
                    <div  class="success alert-border-1 " role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                Employee details added successfully!
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
                    <div  class="error alert-border-1" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                Employee already exists. Please check the details and try again.
            </div>
            <button  type="button" class="error-close close" data-dismiss-target="#alert-border-1" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
            ';
                } elseif ($updateError) {
                    echo '
                    <div  class="error  alert-border-1" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                An error occurred while updating employee details.
            </div>
            <button  type="button" class="error-close close" data-dismiss-target="#alert-border-1" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
            ';
                } elseif ($update) {
                    echo '
                    <div  class="success alert-border-1" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                Employee details updated successfully.
            </div>
            <button  type="button" class="success-close close" data-dismiss-target="#alert-border-1" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
            </div>
                ';
                }
                ?>
                <div class=" main-area">

                    <!-- component -->
                    <?php
                    if (isset($_GET['action']) &&  $_GET['action'] == 'edit') {

                        $empId = $_GET['id'];
                        $sql = "SELECT * FROM `employee_table` WHERE `emp_id` = '$empId'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);

                        echo '
                        <div class="form mt-14 ml-24">
                            <div class=" mt-11 sm:mt-0">
                                <div class="md:grid md:grid-cols-3 md:gap-6">

                                    <div class="mt-6 md:mt-0 md:col-span-2">
                                        <form action="./particles/actionEmp.php?action=update&&id=' . $empId . '"   method="POST">
                                            <div class="shadow overflow-hidden sm:rounded-md">
                                                <div class="px-4 py-5 bg-gray-900 sm:p-6 ">
                                                    <div class="grid grid-cols-6 gap-6">
                                                        <div class="col-span-6 sm:col-span-6">
                                                            <label for="first_name" class="label">Edit Name</label>
                                                            <input required type="text" name="name" autocomplete="given-name" class="emp-input" value="' . $row['emp_name'] . '">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="email_address" class="label">Email address</label>
                                                            <input required type="email" name="email" id="email_address" placeholder="Email" autocomplete="email" class="emp-input" value="' . $row['emp_email'] . '">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="phone" class="label">Phone Number</label>
                                                            <input required type="number" name="Phone" autocomplete="given-name" class="emp-input" min="6" placeholder="Phone"  value="' . $row['emp_phone'] . '">
                                                        </div>

                                                        <div class="col-span-6">
                                                            <label for="street_address" class="label">Street address</label>
                                                            <input required type="text" name="street" id="street_address" autocomplete="street-address" class="emp-input" placeholder="Street Adress" value="' . $row['emp_street_ad'] . '">
                                                        </div>

                                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                            <label for="country" class="label">Country</label>
                                                            <input required type="text" name="country" id="city" class="emp-input" placeholder="Country" value="' . $row['emp_country'] . '">
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="px-4 py-3  bg-gray-900 text-right sm:px-6 ">
                                                    <button type="reset" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-700 hover:bg-gray-500 active:bg-gray-700">
                                                        <a href="./index.php">Close </a>
                                                    </button>
                                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-700 hover:bg-gray-500 active:bg-gray-700">
                                                        Update
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                ';
                    } else {
                        echo '
                                    <div class="form mt-14 ml-24">
                        <div class=" mt-11 sm:mt-0">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                
                                <div class="mt-6 md:mt-0 md:col-span-2">
                                    <form action="./particles/handleAddEmp.php" method="POST">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-gray-900 sm:p-6 ">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6 sm:col-span-6">
                                                        <label for="first_name" class="label">Full name</label>
                                                        <input required type="text" name="name" placeholder="Name" autocomplete="given-name" class="emp-input">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="email_address" class="label">Email address</label>
                                                        <input required type="email" name="email" id="email_address" placeholder="Email" autocomplete="email" class="emp-input">
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="phone" class="label">Phone Number</label>
                                                        <input required type="number" name="Phone" autocomplete="given-name" class="emp-input" min="6" placeholder="Phone">
                                                    </div>

                                                    <div class="col-span-6">
                                                        <label for="street_address" class="label">Street address</label>
                                                        <input required type="text" name="street" id="street_address" autocomplete="street-address" class="emp-input" placeholder="Street Adress">
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                        <label for="country" class="label">Country</label>
                                                        <input required type="text" name="country" id="city" class="emp-input" placeholder="Country">
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="px-4 py-3  bg-gray-900 text-right sm:px-6 ">
                                                <button type="reset" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-700 hover:bg-gray-500 active:bg-gray-700">
                                                    Discard
                                                </button>
                                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-700 hover:bg-gray-500 active:bg-gray-700">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                            ';
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
    <script>

    </script>
    <script src="./src/script/script.js"></script>
</body>

</html>