<?php
echo '
            <header class=" bg-gray-900 h-20 flex">
                <nav class="container h-20 mx-auto flex justify-between items-center relative">
                    <div class="left">
                        <img src="./src/images/logo.png" alt="Logo" class="h-10">
                    </div>

                    <div class="right flex items-center">
                        <div class="image w-[50px] h-[50px] rounded-full">
                            <img class="rounded-full"
                                src="https://t3.ftcdn.net/jpg/06/19/26/46/360_F_619264680_x2PBdGLF54sFe7kTBtAvZnPyXgvaRw0Y.jpg"
                                alt="">
                        </div>
                        <div id="dropDown" class="relative">
                            <i id="dropdownButton" onclick="toggleDropdown()" class="fa-solid fa-sort-down select-none mt-3 w-[50px] h-[50px] rounded-full  text-gray-500 cursor-pointer text-2xl pl-3"></i>

                            <ul id="dropDownMenu" class="hidden absolute right-0 mt-2 text-white border rounded shadow-lg">


                                <li class="px-4 py-2 bg-gray-700 hover:bg-gray-500  ">


                                    <a href="./particles/logout.php" class="flex items-center">
                                        <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
    
    ';
