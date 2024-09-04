<?php
echo '<link href="./src/output.css" rel="stylesheet">';
echo '
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
';
