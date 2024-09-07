<?php
echo '
    
    <div class="relative h-screen w-[15%] bg-gray-900 flex justify-center text-gray-200 border-r-[1px] border-gray-500">
            <div class="material flex flex-col items-center pt-20  ">
                <div class=" mb-8">
                    <a href="./index.php">
                        <img src="./src/images/logo.png" alt="" srcset="">
                    </a>

                </div>
                <div class="scoial-Icon flex w-4/5 justify-around text-2xl text-gray-200">
                    <a href="https://www.facebook.com/hashirmerajofficial" target="_blank">
                        <i class=" fa-brands fa-facebook hover:text-gray-500"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/hashir-meraj-dev1/" target="_blank">
                        <i class=" fa-brands fa-linkedin hover:text-gray-500"></i>
                    </a>
                    <a href="https://github.com/hashirmeraj" target="_blank">
                        <i class=" fa-brands fa-github hover:text-gray-500"></i>
                    </a>
                </div>
                <hr class=" m-4 border-gray-800  w-full">

                <div class=" text-gray-300 w-4/5">

                    <nav onclick="Dropdown()">
                        <div class="nav-heading">
                            <div class="flex items-center">
                                <i class="fa-solid fa-house mr-2"></i>
                                <span>Dashboard</span>
                            </div>
                            <span>
                                <i class="fa-solid fa-angles-up rotate-180 transition-transform duration-300" id="arrow"></i>
                            </span>
                        </div>

                        <div class="nav-items cursor-pointer hidden" id="submenu">
                            <a href="./index.php">
                                <h1 class="nav-item">Employee List</h1>
                            </a>
                            <a href="./addEmp.php">
                                <h1 class="nav-item">Add Employee</h1>
                            </a>

                        </div>
                    </nav>


                </div>

                <hr class=" m-4 border-gray-800  w-full">
                <div class=" text-gray-300 w-4/5">


                    <div class="nav-heading ">
                        <div class="flex items-center">
                            <a href="./particles/logout.php">
                                <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>
                                <span>Logout</span>
                            </a>
                        </div>





                    </div>
                </div>

            </div>
        </div>
    
    
    ';
