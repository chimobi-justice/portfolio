let openMenu = document.querySelector('#menu');
let closeMenu = document.querySelector('.close_menu');
let iconList = document.querySelector('#ham_wrapper_list');
let copyRight = document.getElementById('copyright');



openMenu.onclick = () => {
    if (openMenu) {
        iconList.style.display = 'block';
        openMenu.style.display = 'none';
        closeMenu.style.display = 'block';
    }
}

closeMenu.onclick = () => {
    if (closeMenu) {
        iconList.style.display = 'none';
        openMenu.style.display = 'block';
        closeMenu.style.display = 'none';
    }
}

// get fullyear and update copyright
let d = new Date();
copyRight.textContent = d.getFullYear();