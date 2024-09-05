
document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.getElementById('menu-toggle');
  const closeMenu = document.getElementById('close-menu');
  const menu = document.getElementById('menu');

  // Open menu when the menu icon is clicked
  menuToggle.addEventListener('click', function() {
    menu.style.display = 'block';
    menuToggle.style.display = 'none';
    closeMenu.style.display = 'block';
  });

  // Close menu when the close icon is clicked
  closeMenu.addEventListener('click', function() {
    menu.style.display = 'none';
    menuToggle.style.display = 'block';
    closeMenu.style.display = 'none';
  });
});