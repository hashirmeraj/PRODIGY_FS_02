<?php
echo '
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
    ';
