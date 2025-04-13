document.addEventListener('DOMContentLoaded', function() {
    // DOM elements
    const menuToggle = document.getElementById('primary-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const body = document.body;
    
    // Toggle mobile menu
    function toggleMenu() {
        if (!mobileMenu || !mobileMenuOverlay) return;
        
        const isOpen = mobileMenu.style.transform === 'translateX(0)';
        
        if (!isOpen) {
            // Opening menu
            mobileMenu.style.transform = 'translateX(0)';
            mobileMenuOverlay.classList.remove('hidden');
            body.classList.add('overflow-hidden');
        } else {
            // Closing menu
            mobileMenu.style.transform = 'translateX(-100%)';
            mobileMenuOverlay.classList.add('hidden');
            body.classList.remove('overflow-hidden');
            
            // Reset all submenus when closing the menu
            const submenus = document.querySelectorAll('.sub-menu');
            submenus.forEach(submenu => {
                submenu.classList.add('hidden');
            });
            
            // Reset all toggle buttons
            const toggleButtons = document.querySelectorAll('.mobile-submenu-toggle');
            toggleButtons.forEach(button => {
                button.setAttribute('aria-expanded', 'false');
                button.style.backgroundColor = '';
                const icon = button.querySelector('.toggle-icon');
                if (icon) {
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        }
    }
    
    // Only add event listeners if elements exist
    if (menuToggle) {
        menuToggle.addEventListener('click', toggleMenu);
    }
    
    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', toggleMenu);
    }
    
    if (mobileMenuOverlay) {
        mobileMenuOverlay.addEventListener('click', toggleMenu);
    }
    
    // Handle submenu toggles
    const submenuToggles = document.querySelectorAll('.mobile-submenu-toggle');
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const targetId = this.getAttribute('data-target');
            if (!targetId) return;
            
            const submenu = document.getElementById(targetId);
            if (!submenu) return;
            
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            // Close all other submenus first
            submenuToggles.forEach(otherToggle => {
                if (otherToggle !== toggle) {
                    const otherTargetId = otherToggle.getAttribute('data-target');
                    if (otherTargetId) {
                        const otherSubmenu = document.getElementById(otherTargetId);
                        if (otherSubmenu) {
                            otherSubmenu.classList.add('hidden');
                        }
                    }
                    otherToggle.setAttribute('aria-expanded', 'false');
                    otherToggle.style.backgroundColor = '';
                    const otherIcon = otherToggle.querySelector('.toggle-icon');
                    if (otherIcon) {
                        otherIcon.style.transform = 'rotate(0deg)';
                    }
                }
            });
            
            if (!isExpanded) {
                // Opening submenu
                submenu.classList.remove('hidden');
                this.setAttribute('aria-expanded', 'true');
                this.style.backgroundColor = '#1E2B79';
                const icon = this.querySelector('.toggle-icon');
                if (icon) {
                    icon.style.transform = 'rotate(180deg)';
                }
            } else {
                // Closing submenu
                submenu.classList.add('hidden');
                this.setAttribute('aria-expanded', 'false');
                this.style.backgroundColor = '';
                const icon = this.querySelector('.toggle-icon');
                if (icon) {
                    icon.style.transform = 'rotate(0deg)';
                }
            }
        });
    });
    
    // Close menu on ESC key press
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu && mobileMenu.style.transform === 'translateX(0)') {
            toggleMenu();
        }
    });
}); 