/******/ (() => { // webpackBootstrap
/*!*************************************!*\
  !*** ./resources/js/mobile-menu.js ***!
  \*************************************/
document.addEventListener('DOMContentLoaded', function () {
  // DOM elements
  var menuToggle = document.getElementById('primary-menu-toggle');
  var mobileMenu = document.getElementById('mobile-menu');
  var mobileMenuClose = document.getElementById('mobile-menu-close');
  var mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
  var body = document.body;
  console.log('Mobile Menu Elements:', {
    menuToggle: menuToggle,
    mobileMenu: mobileMenu,
    mobileMenuClose: mobileMenuClose,
    mobileMenuOverlay: mobileMenuOverlay
  });

  // Toggle mobile menu
  function toggleMenu() {
    console.log('Toggle menu called');
    if (!mobileMenu || !mobileMenuOverlay) {
      console.log('Mobile menu or overlay not found');
      return;
    }

    // Check if menu is open using transform property instead of class
    var isOpen = getComputedStyle(mobileMenu).transform !== 'matrix(1, 0, 0, 1, 0, 0)' && !mobileMenu.classList.contains('translate-x-0');
    console.log('Menu is open:', isOpen);
    if (!isOpen) {
      // Opening menu
      console.log('Opening menu');
      mobileMenu.classList.remove('-translate-x-full');
      mobileMenu.classList.add('translate-x-0');
      mobileMenuOverlay.classList.remove('hidden');
      body.classList.add('overflow-hidden');
    } else {
      // Closing menu
      console.log('Closing menu');
      mobileMenu.classList.remove('translate-x-0');
      mobileMenu.classList.add('-translate-x-full');
      mobileMenuOverlay.classList.add('hidden');
      body.classList.remove('overflow-hidden');

      // Reset all submenus when closing the menu
      var submenus = document.querySelectorAll('.sub-menu');
      submenus.forEach(function (submenu) {
        if (submenu) {
          submenu.style.maxHeight = null;
        }
      });

      // Reset all toggle buttons
      var toggleButtons = document.querySelectorAll('.mobile-submenu-toggle');
      toggleButtons.forEach(function (button) {
        if (button) {
          button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line></svg>';
        }
      });
    }
  }

  // Only add event listeners if elements exist
  if (menuToggle) {
    console.log('Adding click listener to menu toggle');
    menuToggle.addEventListener('click', toggleMenu);
  }
  if (mobileMenuClose) {
    console.log('Adding click listener to close button');
    mobileMenuClose.addEventListener('click', toggleMenu);
  }
  if (mobileMenuOverlay) {
    console.log('Adding click listener to overlay');
    mobileMenuOverlay.addEventListener('click', toggleMenu);
  }

  // Handle submenu toggles
  var submenuToggles = document.querySelectorAll('.mobile-submenu-toggle');
  if (submenuToggles) {
    submenuToggles.forEach(function (toggle) {
      toggle.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var targetId = this.getAttribute('data-target');
        if (!targetId) return;
        var submenu = document.getElementById(targetId);
        if (!submenu) return;
        var isOpen = submenu.style.maxHeight;

        // Close all other submenus first
        submenuToggles.forEach(function (otherToggle) {
          if (otherToggle !== toggle) {
            var otherTargetId = otherToggle.getAttribute('data-target');
            if (otherTargetId) {
              var otherSubmenu = document.getElementById(otherTargetId);
              if (otherSubmenu) {
                otherSubmenu.style.maxHeight = null;
              }
            }
            if (otherToggle) {
              otherToggle.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line></svg>';
            }
          }
        });
        if (!isOpen) {
          // Opening submenu
          submenu.style.maxHeight = submenu.scrollHeight + 'px';
          this.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line></svg>';
        } else {
          // Closing submenu
          submenu.style.maxHeight = null;
          this.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line></svg>';
        }
      });
    });
  }

  // Close menu on ESC key press
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('translate-x-0')) {
      toggleMenu();
    }
  });
});
/******/ })()
;