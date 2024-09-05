<?php
include './particles/config.php';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    header("Location:./login.php");
    exit();
}
?>
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
        <div class="relative h-screen w-[15%] bg-gray-900 flex justify-center text-gray-200">
            <div class="material flex flex-col items-center pt-20  ">
                <div class=" mb-8">
                    <img src="./src/images/Nightmare Ninja.png" alt="" srcset="">


                </div>
                <div class="scoial-Icon flex w-4/5 justify-around text-2xl text-gray-200">
                    <i class=" fa-brands fa-facebook"></i>
                    <i class=" fa-brands fa-linkedin"></i>
                    <i class=" fa-brands fa-github"></i>
                </div>
                <hr class=" m-4 border-gray-800  w-full">

                <div class=" text-gray-300 w-4/5">

                    <nav onclick="Dropdown()">
                        <div class="nav-heading ">
                            <div class="flex items-center">
                                <i class="fa-solid fa-house mr-2"></i>
                                <span>Dashboard</span>
                            </div>
                            <span>
                                <i class="fa-solid fa-angles-up rotate-0 transition-transform duration-300" id="arrow"></i>
                            </span>
                        </div>

                        <div class="nav-items cursor-pointer" id="submenu">
                            <a href="./index.php">
                                <h1 class="nav-item "> Employee List</h1>
                            </a>
                            <a href="./addEmp.php">
                                <h1 class="nav-item"> Add Employee</h1>
                            </a>
                            <a href="http://">
                                <h1 class="nav-item"> Employee List</h1>
                            </a>

                        </div>

                    </nav>


                </div>

                <hr class=" m-4 border-gray-800  w-full">
                <div class=" text-gray-300 w-4/5">


                    <div class="nav-heading ">
                        <div class="flex items-center">
                            <a href="#">
                                <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>
                                <span>Logout</span>
                            </a>
                        </div>





                    </div>
                </div>

            </div>
        </div>

        <!-- Main Content Area -->
        <div class="flex flex-col  w-[86%]">
            <!-- Header -->
            <header class="bg-gray-500 h-20 flex">
                <nav class="container h-20 mx-auto flex justify-between items-center relative">
                    <div class="left">
                        <img src="./src/images/Nightmare Ninja.png" alt="Logo" class="h-10">
                    </div>

                    <div class="right flex items-center">
                        <div class="image w-[50px] h-[50px] rounded-full">
                            <img class="rounded-full"
                                src="https://t3.ftcdn.net/jpg/06/19/26/46/360_F_619264680_x2PBdGLF54sFe7kTBtAvZnPyXgvaRw0Y.jpg"
                                alt="">
                        </div>
                        <div id="dropDown" class="relative">
                            <i id="dropdownButton" onclick="toggleDropdown()" class="fa-solid fa-sort-down select-none mt-3 w-[50px] h-[50px] rounded-full  text-gray-700 cursor-pointer text-2xl pl-3"></i>

                            <ul id="dropDownMenu" class="hidden absolute right-0 mt-2 bg-white border rounded shadow-lg">
                                <li class="px-4 py-2 hover:bg-gray-100 flex items-center justify-between">
                                    <a href="http://">
                                        <i class="fa-solid fa-user"></i>
                                        Profile
                                    </a>
                                </li>

                                <li class="px-4 py-2 hover:bg-gray-100 flex items-center ">

                                    <i class="fa-solid fa-lock mr-1"></i>
                                    <a href="http://">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- New Div for Main Content -->
            <div class="content bg-slate-400 flex-grow ">

                <div class=" main-area">
                    <!-- component -->

                    <div class=" mt-12 ">

                        <div class="flex flex-col  w-[75%] ml-24">
                            <div class="  flex justify-end mb-2">
                                <a href="./addEmp.php">
                                    <span class="  p-2 bg-gray-700 rounded-lg text-white cursor-pointer hover:bg-slate-600  active:bg-slate-700 ">Add Employee</span>
                                </a>
                            </div>
                            <?php


                            // Determine current page and set records per page
                            $records_per_page = 5;
                            $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            $offset = ($current_page - 1) * $records_per_page;

                            // Fetch records with pagination
                            $sql = "SELECT * FROM `employee_table` LIMIT $offset, $records_per_page";
                            $result = $conn->query($sql);

                            // Fetch total number of records
                            $total_sql = "SELECT COUNT(*) FROM `employee_table`";
                            $total_result = $conn->query($total_sql);
                            $total_records = $total_result->fetch_array()[0];
                            $total_pages = ceil($total_records / $records_per_page);
                            ?>

                            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden">
                                        <table id="myTable" class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                            <thead class="bg-gray-100 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="t-head">Employee Name</th>
                                                    <th scope="col" class="t-head">Email</th>
                                                    <th scope="col" class="t-head">Country</th>
                                                    <th scope="col" class="t-head">Phone</th>
                                                    <th scope="col" class="t-head">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                                <?php while ($row = $result->fetch_assoc()): ?>
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td class="t-data"><?php echo htmlspecialchars($row['emp_name']); ?></td>
                                                        <td class="t-data"><?php echo htmlspecialchars($row['emp_email']); ?></td>
                                                        <td class="t-data"><?php echo htmlspecialchars($row['emp_country']); ?></td>
                                                        <td class="t-data"><?php echo htmlspecialchars($row['emp_phone']); ?></td>
                                                        <td class="t-data flex justify-evenly">
                                                            <a href="edit.php?id=<?php echo $row['emp_id']; ?>" title="Edit">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <a href="delete.php?id=<?php echo $row['emp_id']; ?>" title="Delete">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endwhile; ?>
                                                <tr>
                                                    <td colspan="5">
                                                        <div class="pagination flex justify-between p-2 text-gray-400 items-center">
                                                            <div class="total">Showing <?php echo $offset + 1; ?> to <?php echo min($offset + $records_per_page, $total_records); ?> of <?php echo $total_records; ?></div>
                                                            <div class="pg-no flex">
                                                                <?php if ($current_page > 1): ?>
                                                                    <a href="?page=<?php echo $current_page - 1; ?>">
                                                                        <button type="button" class="btn">Previous</button>
                                                                    </a>
                                                                <?php endif; ?>
                                                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                                                    <a href="?page=<?php echo $i; ?>">
                                                                        <button type="button" class="btn"><?php echo $i; ?></button>
                                                                    </a>
                                                                <?php endfor; ?>
                                                                <?php if ($current_page < $total_pages): ?>
                                                                    <a href="?page=<?php echo $current_page + 1; ?>">
                                                                        <button type="button" class="btn">Next</button>
                                                                    </a>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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