// Login/Signup Popup
document.addEventListener('DOMContentLoaded', function() {
    // Login/Signup Popup
    const loginPopup = document.querySelector('.login-signup-popup');
    const loginPopupClose = document.querySelector('.login-signup-close');
    
    // Handle login/signup popup
    function showLoginPopup() {
        if (loginPopup && !sessionStorage.getItem('loginPopupClosed')) {
            loginPopup.classList.remove('pointer-events-none');
            loginPopup.classList.remove('opacity-0');
            
            // Automatically hide after 5 seconds
            setTimeout(hideLoginPopup, 5000);
        }
    }
    
    function hideLoginPopup() {
        if (loginPopup) {
            loginPopup.classList.add('opacity-0');
            setTimeout(() => {
                loginPopup.classList.add('pointer-events-none');
            }, 300);
            sessionStorage.setItem('loginPopupClosed', 'true');
        }
    }
    
    // Show popup on page load with delay if not previously closed
    if (!sessionStorage.getItem('loginPopupClosed')) {
        setTimeout(showLoginPopup, 500);
    }
    
    // Hide popup on scroll
    let scrollTimeout;
    window.addEventListener('scroll', function() {
        if (loginPopup && !loginPopup.classList.contains('opacity-0') && !sessionStorage.getItem('loginPopupClosed')) {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(hideLoginPopup, 150); // Debounce scroll events
        }
    }, { passive: true });
    
    // Handle close button click
    if (loginPopupClose) {
        loginPopupClose.addEventListener('click', function(e) {
            e.preventDefault();
            hideLoginPopup();
        });
    }
    
    // Close popup on ESC key press
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && loginPopup && !loginPopup.classList.contains('opacity-0')) {
            hideLoginPopup();
        }
    });
});

// Training Preview Video Carousel
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.video-carousel');
    if (!carousel) return;

    const items = carousel.querySelectorAll('.carousel-item');
    const prevBtn = document.querySelector('.carousel-prev');
    const nextBtn = document.querySelector('.carousel-next');
    let currentIndex = 0;

    function showSlide(index) {
        items.forEach(item => item.classList.remove('active'));
        items[index].classList.add('active');
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            showSlide(currentIndex);
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % items.length;
            showSlide(currentIndex);
        });
    }
});