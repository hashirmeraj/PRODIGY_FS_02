
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