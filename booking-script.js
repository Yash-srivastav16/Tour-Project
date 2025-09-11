document.addEventListener('DOMContentLoaded', () => {
    // Enhanced form submission with modern AJAX
    const bookingForm = document.getElementById('bookingForm');
    const bookingMessage = document.getElementById('bookingMessage');
    const submitButton = bookingForm.querySelector('.submit-booking');

    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('travelDate').setAttribute('min', today);

    bookingForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Disable submit button and show loading state
        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
        
        // Hide any previous messages
        bookingMessage.style.display = 'none';

        try {
            // Collect form data
            const formData = new FormData(bookingForm);

            // Send data to PHP backend using modern fetch API
            const response = await fetch('process_booking.php', {
                method: 'POST',
                body: formData
            });

            // Check if response is ok
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            // Parse JSON response
            const data = await response.json();

            if (data.success) {
                // Success handling
                bookingMessage.classList.remove('error');
                bookingMessage.classList.add('success');
                bookingMessage.innerHTML = `
                    <i class="fas fa-check-circle"></i> 
                    ${data.message}
                `;
                
                // Reset form
                bookingForm.reset();
                
                // Optional: Scroll to success message
                bookingMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
            } else {
                // Error handling
                bookingMessage.classList.remove('success');
                bookingMessage.classList.add('error');
                bookingMessage.innerHTML = `
                    <i class="fas fa-exclamation-triangle"></i> 
                    ${data.message}
                `;
            }

            // Show message with smooth animation
            bookingMessage.style.display = 'block';
            bookingMessage.style.opacity = '0';
            bookingMessage.style.transform = 'translateY(-10px)';
            
            // Animate message appearance
            setTimeout(() => {
                bookingMessage.style.transition = 'all 0.3s ease';
                bookingMessage.style.opacity = '1';
                bookingMessage.style.transform = 'translateY(0)';
            }, 100);

            // Auto-hide message after 8 seconds
            setTimeout(() => {
                bookingMessage.style.transition = 'all 0.3s ease';
                bookingMessage.style.opacity = '0';
                bookingMessage.style.transform = 'translateY(-10px)';
                setTimeout(() => {
                    bookingMessage.style.display = 'none';
                }, 300);
            }, 8000);

        } catch (error) {
            // Network or parsing error
            console.error('Booking submission error:', error);
            
            // More specific error messages
            let errorMessage = 'Network error. Please check your connection and try again.';
            if (error.message.includes('HTTP error')) {
                errorMessage = 'Server error. Please try again later.';
            } else if (error.message.includes('JSON')) {
                errorMessage = 'Server response error. Please try again.';
            }
            
            bookingMessage.classList.remove('success');
            bookingMessage.classList.add('error');
            bookingMessage.innerHTML = `
                <i class="fas fa-wifi"></i> 
                ${errorMessage}
            `;
            bookingMessage.style.display = 'block';
        } finally {
            // Re-enable submit button
            submitButton.disabled = false;
            submitButton.innerHTML = '<i class="fas fa-check"></i> Complete Booking';
        }
    });

    // Real-time form validation
    const inputs = bookingForm.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', validateField);
        input.addEventListener('input', clearFieldError);
    });

    function validateField(e) {
        const field = e.target;
        const value = field.value.trim();
        
        // Remove existing error styling
        field.style.borderColor = '';
        
        if (field.hasAttribute('required') && !value) {
            showFieldError(field, 'This field is required');
            return false;
        }
        
        if (field.type === 'email' && value && !isValidEmail(value)) {
            showFieldError(field, 'Please enter a valid email address');
            return false;
        }
        
        if (field.name === 'numTravelers' && value && (value < 1 || value > 20)) {
            showFieldError(field, 'Number of travelers must be between 1 and 20');
            return false;
        }
        
        return true;
    }

    function showFieldError(field, message) {
        field.style.borderColor = '#f44336';
       
    }

    function clearFieldError(e) {
        e.target.style.borderColor = '';
    }

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
