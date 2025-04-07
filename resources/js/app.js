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

// Contact Form Handling
document.addEventListener('DOMContentLoaded', function() {
    const contactForms = document.querySelectorAll('form[id^="contact-form"]');
    
    contactForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.textContent;
            
            // Disable submit button and show loading state
            submitButton.disabled = true;
            submitButton.textContent = 'Sending...';
            
            fetch(adminAjax.url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    const successMessage = document.createElement('div');
                    successMessage.className = 'mt-4 p-4 bg-green-100 text-green-700 rounded-lg';
                    successMessage.textContent = data.data;
                    form.parentNode.insertBefore(successMessage, form.nextSibling);
                    
                    // Reset form
                    form.reset();
                } else {
                    // Show error message
                    const errorMessage = document.createElement('div');
                    errorMessage.className = 'mt-4 p-4 bg-red-100 text-red-700 rounded-lg';
                    errorMessage.textContent = data.data;
                    form.parentNode.insertBefore(errorMessage, form.nextSibling);
                }
            })
            .catch(error => {
                // Show error message
                const errorMessage = document.createElement('div');
                errorMessage.className = 'mt-4 p-4 bg-red-100 text-red-700 rounded-lg';
                errorMessage.textContent = 'There was an error sending your message. Please try again later.';
                form.parentNode.insertBefore(errorMessage, form.nextSibling);
            })
            .finally(() => {
                // Re-enable submit button
                submitButton.disabled = false;
                submitButton.textContent = originalButtonText;
            });
        });
    });
});