<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/output.css" rel="stylesheet">
    <script src="./src/script/script.js"></script>
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
                                <i class="fa-solid fa-house mr-1"></i>
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

                <div class=" bg-slate-700 h-12 w-max ab">akjaihsihsi</div>

            </div>
        </div>
    </div>

</body>

</html>