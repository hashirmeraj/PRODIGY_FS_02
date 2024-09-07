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
    <link href="./src/styles.css" rel="stylesheet">
    <script src="./src/script/script.js"></script>
    <script src="//cdn.datatables.net/2.1.5/js/dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/b01bd35356.js" crossorigin="anonymous"></script>




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
            <div class="conten bg-gray-800 flex-grow ">

                <div class=" main-area">
                    <!-- component -->

                    <div class=" mt-12 ">

                        <div class="flex flex-col  w-[75%] ml-24">
                            <div class="  flex items-center justify-between mb-2">
                                <a href="./addEmp.php">
                                    <span class="  p-2 bg-gray-700 rounded-lg text-white cursor-pointer hover:bg-slate-600  active:bg-slate-700 ">Add Employee</span>
                                </a>
                                <form action="./index.php?search" method="get" class="flex">
                                    <input name="search" type="search" class=" emp-input " placeholder="Search...">
                                    <button type="submit" class=" ml-2 p-2 bg-gray-700 rounded-lg text-white cursor-pointer hover:bg-slate-600  active:bg-slate-700 ">Search</button>
                                </form>
                            </div>
                            <?php


                            // Determine current page and set records per page
                            $records_per_page = 5;
                            $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            $offset = ($current_page - 1) * $records_per_page;


                            // Determine if a search term is provided
                            $searchTerm = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';


                            // Build SQL query based on whether a search term is provided
                            if ($searchTerm) {
                                $sql = "SELECT * FROM `employee_table`
                                WHERE MATCH (`emp_name`, `emp_email`, `emp_phone`, `emp_country`)
                                AGAINST ('$searchTerm' IN BOOLEAN MODE)
                                LIMIT $offset, $records_per_page";
                            } else {
                                $sql = "SELECT * FROM `employee_table`
                                LIMIT $offset, $records_per_page";
                            }

                            // Fetch records with pagination
                            $result = $conn->query($sql);

                            // Fetch total number of records based on search term
                            if ($searchTerm) {
                                $total_sql = "SELECT COUNT(*) FROM `employee_table`
                                WHERE MATCH (`emp_name`, `emp_email`, `emp_phone`, `emp_country`)
                                AGAINST ('$searchTerm' IN BOOLEAN MODE)";
                            } else {
                                $total_sql = "SELECT COUNT(*) FROM `employee_table`";
                            }
                            $total_result = $conn->query($total_sql);
                            $total_records = $total_result->fetch_array()[0];
                            $total_pages = ceil($total_records / $records_per_page);
                            ?>


                            <div class=" overflow-x-auto shadow-md sm:rounded-lg">
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
                                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700">
                                                <?php while ($row = $result->fetch_assoc()): ?>
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td class="t-data"><?php echo htmlspecialchars($row['emp_name']); ?></td>
                                                        <td class="t-data"><?php echo htmlspecialchars($row['emp_email']); ?></td>
                                                        <td class="t-data"><?php echo htmlspecialchars($row['emp_country']); ?></td>
                                                        <td class="t-data"><?php echo htmlspecialchars($row['emp_phone']); ?></td>
                                                        <td class="t-data flex justify-evenly">
                                                            <a href="./addEmp.php?action=edit&&id=<?php echo $row['emp_id']; ?>" title="Edit">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <a href="./particles/actionEmp.php?action=delete&&id=<?php echo $row['emp_id']; ?>" title="Delete">
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

    <script src="./src/script/script.js"></script>
</body>

</html>