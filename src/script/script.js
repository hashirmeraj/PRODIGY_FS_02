
function toggleDropdown() {
    let dropDownMenu = document.getElementById('dropDownMenu');
    dropDownMenu.classList.toggle("hidden");
}

document.addEventListener('click', function (event) {
    let dropdownButton = document.getElementById('dropdownButton');
    let dropdownMenu = document.getElementById('dropDownMenu');
    // Check if the click is outside the dropdown button and menu
    if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add('hidden');
    }
});

function Dropdown() {
    document.querySelector('#submenu').classList.toggle('hidden');
    document.querySelector('#arrow').classList.toggle('rotate-180');
}

// script.js

// script.js

document.addEventListener('DOMContentLoaded', function () {
    // Select the first element with the 'close' class
    var closeButton = document.querySelector('.close');

    if (closeButton) {
        closeButton.addEventListener('click', function () {
            // Select the first element with the 'alert-border-1' class
            var alert = document.querySelector('.alert-border-1');

            if (alert) {
                alert.style.display = 'none';
            }
        });
    }
});