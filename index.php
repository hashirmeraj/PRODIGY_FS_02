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

                    <div class=" mt-12 ">

                        <div class="flex flex-col  w-[75%] ml-24">
                            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden ">
                                        <table id="myTable" class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                            <thead class="bg-gray-100 dark:bg-gray-700">
                                                <tr>

                                                    <th scope="col" class="t-head">
                                                        Employee Name
                                                    </th>
                                                    <th scope="col" class="t-head">
                                                        Email
                                                    </th>
                                                    <th scope="col" class="t-head">
                                                        Country
                                                    </th>
                                                    <th scope="col" class="t-head">
                                                        Phone
                                                    </th>

                                                    <th scope="col" class="t-head">
                                                        Actions
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                                    <td class="t-data">Hashir Meraj</td>
                                                    <td class="t-data">hashirmeraj1@gmail.com</td>
                                                    <td class="t-data">Pakistan</td>
                                                    <td class="t-data">03202262028</td>
                                                    <td class="t-data flex justify-evenly">
                                                        <a href="http://" title="Edit">
                                                            <i class="fa-solid fa-pen-to-square "></i>
                                                        </a>
                                                        <a href="http://" title="Delete">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>
                                                    </td>



                                                </tr>
                                                <tr>
                                                    <td colspan="5">
                                                        <div class="pagination flex justify-between p-2 text-gray-400 items-center">
                                                            <div class="total">Showing 5 out of 25</div>
                                                            <div class="pg-no flex">
                                                                <div class=" ">
                                                                    <a href="http://">
                                                                        <button type="button" class=" btn">Previous</button>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="http://">
                                                                        <button type="button" class="btn">1</button>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="http://">
                                                                        <button type="button" class="btn">Next</button>
                                                                    </a>
                                                                </div>



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