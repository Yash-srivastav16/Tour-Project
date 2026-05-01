/* Feedback Form JavaScript */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize feedback form functionality
    initFeedbackForm();
});

function initFeedbackForm() {
    const feedbackForm = document.getElementById('feedbackForm');
    const successMessage = document.querySelector('.feedback-success');
    
    if (!feedbackForm) return;
    
    feedbackForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        let isValid = validateForm(feedbackForm);
        
        if (isValid) {
            // Show loading state
            const submitBtn = feedbackForm.querySelector('.submit-feedback');
            if (submitBtn) {
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
                submitBtn.disabled = true;
            }
            
            // Get form data
            const formData = new FormData(feedbackForm);
            
            // Submit form via AJAX
            fetch('process_feedback.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.text().then(text => {
                    try {
                        return JSON.parse(text);
                    } catch (e) {
                        console.log('Server response (not JSON):', text);
                        throw new Error('Invalid JSON response');
                    }
                });
            })
            .then(data => {
                if (data.success) {
                    // Show success message inline
                    feedbackForm.style.display = 'none';
                    if (successMessage) {
                        successMessage.classList.add('visible');
                        successMessage.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                    
                    // Reset form
                    feedbackForm.reset();
                } else {
                    // Show error message
                    alert('Error submitting feedback: ' + (data.message || 'Please try again.'));
                    
                    // Reset button
                    if (submitBtn) {
                        submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Feedback';
                        submitBtn.disabled = false;
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while submitting your feedback. Please try again.');
                
                // Reset button
                if (submitBtn) {
                    submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Feedback';
                    submitBtn.disabled = false;
                }
            });
        }
    });
    
    // Star rating visual interaction
    const starLabels = document.querySelectorAll('.star-rating label');
    if (starLabels) {
        starLabels.forEach(label => {
            label.addEventListener('click', function() {
                const rating = this.getAttribute('for').replace('star', '');
                console.log(`Rating selected: ${rating} stars`);
            });
        });
    }
}

function validateForm(form) {
    let isValid = true;
    const requiredFields = form.querySelectorAll('[required]');
    
    // Remove all previous error states
    const allFields = form.querySelectorAll('input, textarea, select');
    allFields.forEach(field => {
        field.classList.remove('error');
    });
    
    // Check required fields
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            field.classList.add('error');
            field.focus();
            isValid = false;
        }
    });
    
    // Validate email if present
    const emailField = form.querySelector('input[type="email"]');
    if (emailField && emailField.value.trim()) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailField.value.trim())) {
            emailField.classList.add('error');
            emailField.focus();
            alert('Please enter a valid email address');
            isValid = false;
        }
    }
    
    // Check if rating is selected
    const ratingInputs = form.querySelectorAll('input[name="rating"]');
    if (ratingInputs.length > 0) {
        let ratingSelected = false;
        ratingInputs.forEach(input => {
            if (input.checked) {
                ratingSelected = true;
            }
        });
        
        if (!ratingSelected) {
            const ratingGroup = document.querySelector('.rating-group');
            if (ratingGroup) {
                ratingGroup.classList.add('error');
                alert('Please select a rating for your experience');
                isValid = false;
            }
        }
    }
    
    return isValid;
}

// Add floating feedback button functionality
document.addEventListener('DOMContentLoaded', function() {
    const floatingBtn = document.querySelector('.floating-feedback-btn');
    
    if (floatingBtn) {
        // Show button when user scrolls down
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                floatingBtn.classList.add('visible');
            } else {
                floatingBtn.classList.remove('visible');
            }
        });
        
        // Scroll to feedback form when button is clicked
        floatingBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = 'feedback.php';
        });
    }
});
