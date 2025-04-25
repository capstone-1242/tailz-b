document.addEventListener('DOMContentLoaded', function() {
    // Find the clear button
    const clearButton = document.getElementById('cf7-clear-button');
    
    if (clearButton) {
        clearButton.addEventListener('click', function() {
            // Find the closest form
            const form = this.closest('.wpcf7-form');
            
            if (form) {
                // Reset all inputs and textareas
                const inputs = form.querySelectorAll('input[type="text"], input[type="email"], textarea');
                inputs.forEach(function(input) {
                    input.value = '';
                });
            }
        });
    }
}); 