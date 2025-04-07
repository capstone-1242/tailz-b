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
        
        const isOpen = mobileMenu.style.transform === 'translateX(0px)';
        
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
                if (submenu) {
                    submenu.style.maxHeight = null;
                }
            });
            
            // Reset all toggle buttons
            const toggleButtons = document.querySelectorAll('.mobile-submenu-toggle');
            toggleButtons.forEach(button => {
                if (button) {
                    button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line></svg>';
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
    if (submenuToggles) {
        submenuToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const targetId = this.getAttribute('data-target');
                if (!targetId) return;
                
                const submenu = document.getElementById(targetId);
                if (!submenu) return;
                
                const isOpen = submenu.style.maxHeight;
                
                // Close all other submenus first
                submenuToggles.forEach(otherToggle => {
                    if (otherToggle !== toggle) {
                        const otherTargetId = otherToggle.getAttribute('data-target');
                        if (otherTargetId) {
                            const otherSubmenu = document.getElementById(otherTargetId);
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
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu && mobileMenu.style.transform === 'translateX(0px)') {
            toggleMenu();
        }
    });
}); 