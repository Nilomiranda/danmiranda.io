const menuButton = document.querySelector('#menu-button');
const menu = document.querySelector('.menu-navigation');

const showMenu = () => {
  /* this will show or hide the menu on mobile */
  menu.classList.toggle('menu-active');
}

menuButton.addEventListener('click', showMenu);
