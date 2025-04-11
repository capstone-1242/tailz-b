document.addEventListener('DOMContentLoaded', function() {
    // Cache DOM elements
    const menuElements = {
        toggle: document.querySelector('.mobile-menu-toggle'),
        menu: document.getElementById('mobile-menu'),
        close: document.querySelector('.mobile-menu-close'),
        overlay: document.getElementById('mobile-menu-overlay'),
        body: document.body
    };

    // Error handling for missing elements
    if (!menuElements.toggle || !menuElements.menu) {
        console.error('Required mobile menu elements not found');
        return;
    }

    // Check if we're on mobile
    function isMobile() {
        return window.innerWidth < 1024;
    }

    // Toggle of the mobile menu
    function toggleMenu() {
        // Only allow toggling on mobile
        if (!isMobile()) {
            return;
        }

        const isOpen = menuElements.menu.classList.contains('active');
        
        if (!isOpen) {
            // Opening menu
            menuElements.menu.style.display = 'block';
            menuElements.overlay.classList.remove('hidden');
            requestAnimationFrame(() => {
                menuElements.menu.classList.add('active');
                menuElements.menu.style.transform = 'translateX(0)';
                menuElements.body.classList.add('overflow-hidden');
                menuElements.toggle.classList.add('active');
                menuElements.toggle.setAttribute('aria-expanded', 'true');
            });
        } else {
            // Closing menu
            menuElements.menu.classList.remove('active');
            menuElements.menu.style.transform = 'translateX(-100%)';
            menuElements.body.classList.remove('overflow-hidden');
            menuElements.toggle.classList.remove('active');
            menuElements.toggle.setAttribute('aria-expanded', 'false');
            menuElements.overlay.classList.add('hidden');
            
            // Reset all submenus
            const submenus = document.querySelectorAll('.submenu-items');
            submenus.forEach(submenu => {
                submenu.classList.remove('active');
                submenu.classList.add('hidden');
            });
            
            // Reset all toggle buttons
            const toggleButtons = document.querySelectorAll('.menu-toggle');
            toggleButtons.forEach(button => {
                button.classList.remove('active');
                button.setAttribute('aria-expanded', 'false');
            });
        }
    }

    // Event listeners
    menuElements.toggle.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        toggleMenu();
    });

    if (menuElements.close) {
        menuElements.close.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMenu();
        });
    }

    // Handle overlay click
    if (menuElements.overlay) {
        menuElements.overlay.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            if (menuElements.menu.classList.contains('active')) {
                toggleMenu();
            }
        });
    }

    // Handle submenu toggles
    const menuToggles = document.querySelectorAll('.menu-toggle');
    if (menuToggles) {
        menuToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const submenu = this.nextElementSibling;
                if (!submenu || !submenu.classList.contains('submenu-items')) return;
                
                const isOpen = submenu.classList.contains('active');
                
                // Close all other submenus first
                menuToggles.forEach(otherToggle => {
                    if (otherToggle !== toggle) {
                        otherToggle.classList.remove('active');
                        otherToggle.setAttribute('aria-expanded', 'false');
                        const otherSubmenu = otherToggle.nextElementSibling;
                        if (otherSubmenu && otherSubmenu.classList.contains('submenu-items')) {
                            otherSubmenu.classList.remove('active');
                            otherSubmenu.classList.add('hidden');
                        }
                    }
                });
                
                // Toggle current submenu
                toggle.classList.toggle('active');
                submenu.classList.toggle('active');
                submenu.classList.toggle('hidden');
                toggle.setAttribute('aria-expanded', !isOpen);
            });
        });
    }

    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            if (!isMobile() && menuElements.menu.classList.contains('active')) {
                toggleMenu();
            }
        }, 250);
    }, { passive: true });

    // Initial setup
    menuElements.menu.style.transform = 'translateX(-100%)';
    
    // Handle transition end
    menuElements.menu.addEventListener('transitionend', function() {
        if (!menuElements.menu.classList.contains('active')) {
            menuElements.menu.style.display = 'none';
        }
    });

    // Initial check for mobile/desktop
    if (!isMobile() && menuElements.menu.classList.contains('active')) {
        toggleMenu();
    }
}); 