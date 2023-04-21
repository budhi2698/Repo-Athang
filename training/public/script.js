// Select the hamburger icon and navigation menu
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('nav ul');

// Add a click event listener to the hamburger icon
hamburger.addEventListener('click', () => {
  // Toggle the "menu-open" class on the navigation menu
  navMenu.classList.toggle('menu-open');
});