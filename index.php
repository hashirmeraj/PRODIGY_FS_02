<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/output.css" rel="stylesheet">
    <script src="./src/script/script.js"></script>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/b01bd35356.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="main flex">
        <!-- Sidebar -->
        <div class="relative h-screen w-1/5 bg-black ">
            <div class="material flex flex-col items-center pt-20">
                <div class=" mb-8">
                    <img src="./src/images/Nightmare Ninja.png" alt="" srcset="">


                </div>
                <div class="scoial-Icon flex text-white w-4/5 justify-between">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-github"></i>
                </div>
                <div class="line w-52 border-solid border-[1px] border-gray-300 "></div>
            </div>
        </div>
        <!-- Main Content Area -->
        <div class="flex flex-col w-4/5">
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
                                    <span class="material-symbols-outlined">
                                        manage_accounts
                                    </span>
                                    Profile
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100 flex">
                                    <span class="material-symbols-outlined">
                                        lock
                                    </span>
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