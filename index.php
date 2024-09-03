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
                            <h1 class="nav-item "> Employee List</h1>
                            <h1 class="nav-item"> Employee List</h1>
                            <h1 class="nav-item"> Employee List</h1>

                        </div>

                    </nav>


                </div>

                <hr class=" m-4 border-gray-800  w-full">
                <div class=" text-gray-300 w-4/5">


                    <div class="nav-heading ">
                        <div class="flex items-center">
                            <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>
                            <span>Logout</span>
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
                            <i id="dropdownButton" onclick="toggleDropdown()" class="fa-solid fa-sort-down select-none mt-3 w-[50px] h-[50px] rounded-full  text-red-200 cursor-pointer"></i>

                            <ul id="dropDownMenu" class="hidden absolute right-0 mt-2 bg-white border rounded shadow-lg">
                                <li class="px-4 py-2 hover:bg-gray-100 flex">
                                    <i class="fa-solid fa-user"></i>
                                    Profile
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100 flex">
                                    <i class="fa-solid fa-lock"></i>
                                    Logout
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
                            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden ">
                                        <table id="myTable" class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                            <thead class="bg-gray-100 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="p-4">
                                                        <div class="flex items-center">
                                                            <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="checkbox-all" class="sr-only">checkbox</label>
                                                        </div>
                                                    </th>
                                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Product Name
                                                    </th>
                                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Category
                                                    </th>
                                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Price
                                                    </th>
                                                    <th scope="col" class="p-4">
                                                        <span class="sr-only">Edit</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="p-4 w-4">
                                                        <div class="flex items-center">
                                                            <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple Imac 27"</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">Desktop PC</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$1999</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="p-4 w-4">
                                                        <div class="flex items-center">
                                                            <input id="checkbox-table-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="checkbox-table-2" class="sr-only">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple MacBook Pro 17"</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">Laptop</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$2999</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="p-4 w-4">
                                                        <div class="flex items-center">
                                                            <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="checkbox-table-3" class="sr-only">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">iPhone 13 Pro</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">Phone</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$999</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="p-4 w-4">
                                                        <div class="flex items-center">
                                                            <input id="checkbox-table-4" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="checkbox-table-4" class="sr-only">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple Magic Mouse 2</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">Accessories</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$99</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="p-4 w-4">
                                                        <div class="flex items-center">
                                                            <input id="checkbox-table-5" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="checkbox-table-5" class="sr-only">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple Watch Series 7</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">Accessories</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$599</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
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