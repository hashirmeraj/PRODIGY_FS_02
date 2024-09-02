<?php
echo '<header class="bg-gray-500 h-20 flex items-center justify-between p-4">
                <nav class="container mx-auto flex justify-between relative">
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
                            <span id="dropdownButton" onclick="toggleDropdown()"
                                class="select-none mt-3 w-[50px] h-[50px] rounded-full material-symbols-outlined text-red-200 cursor-pointer">
                                keyboard_arrow_down
                            </span>
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
            </header>';
