// Enhanced Contact Form JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Handle URL parameters for success/error messages
    handleFormMessages();
    
    // Form validation and enhancement
    enhanceContactForm();
    
    // Smooth scrolling for contact section
    smoothScrollToContact();
    
    // Add loading animation to submit button
    addSubmitButtonAnimation();
});

function handleFormMessages() {
    const urlParams = new URLSearchParams(window.location.search);
    const successMessage = urlParams.get('success');
    const errorMessage = urlParams.get('error');
    
    if (successMessage) {
        showFormMessage('success', successMessage);
        // Clear URL parameters
        window.history.replaceState({}, document.title, window.location.pathname + '#contact');
    }
    
    if (errorMessage) {
        showFormMessage('error', errorMessage);
        // Clear URL parameters
        window.history.replaceState({}, document.title, window.location.pathname + '#contact');
    }
}

function showFormMessage(type, message) {
    const contactForm = document.querySelector('.modern-contact-form');
    if (!contactForm) return;
    
    // Remove existing messages
    const existingMessage = contactForm.querySelector('.form-message');
    if (existingMessage) {
        existingMessage.remove();
    }
    
    // Create new message element
    const messageDiv = document.createElement('div');
    messageDiv.className = `form-message ${type}`;
    messageDiv.innerHTML = message;
    
    // Insert at the beginning of the form
    contactForm.insertBefore(messageDiv, contactForm.firstChild);
    
    // Smooth scroll to message
    messageDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
    
    // Auto-remove success messages after 5 seconds
    if (type === 'success') {
        setTimeout(() => {
            messageDiv.style.opacity = '0';
            setTimeout(() => messageDiv.remove(), 300);
        }, 5000);
    }
}

function enhanceContactForm() {
    const form = document.querySelector('.modern-contact-form');
    if (!form) return;
    
    const inputs = form.querySelectorAll('input, select, textarea');
    
    // Add real-time validation
    inputs.forEach(input => {
        input.addEventListener('blur', validateField);
        input.addEventListener('input', clearFieldError);
    });
    
    // Form submission handling
    form.addEventListener('submit', function(e) {
        if (!validateForm()) {
            e.preventDefault();
        } else {
            // Show loading state
            showLoadingState();
        }
    });
    
    // Phone number formatting
    const phoneInput = form.querySelector('input[name="phone"]');
    if (phoneInput) {
        phoneInput.addEventListener('input', formatPhoneNumber);
    }
}

function validateField(e) {
    const field = e.target;
    const value = field.value.trim();
    let isValid = true;
    let errorMessage = '';
    
    // Clear previous error
    clearFieldError({ target: field });
    
    // Required field validation
    if (field.hasAttribute('required') && !value) {
        isValid = false;
        errorMessage = 'This field is required';
    }
    
    // Email validation
    if (field.type === 'email' && value && !isValidEmail(value)) {
        isValid = false;
        errorMessage = 'Please enter a valid email address';
    }
    
    // Phone validation
    if (field.name === 'phone' && value && !isValidPhone(value)) {
        isValid = false;
        errorMessage = 'Please enter a valid phone number';
    }
    
    // Message length validation
    if (field.name === 'message' && value && value.length < 10) {
        isValid = false;
        errorMessage = 'Message must be at least 10 characters long';
    }
    
    if (!isValid) {
        showFieldError(field, errorMessage);
    }
    
    return isValid;
}

function clearFieldError(e) {
    const field = e.target;
    const errorElement = field.parentNode.querySelector('.field-error');
    if (errorElement) {
        errorElement.remove();
    }
    field.style.borderColor = '#ecf0f1';
}

function showFieldError(field, message) {
    // Remove existing error
    const existingError = field.parentNode.querySelector('.field-error');
    if (existingError) {
        existingError.remove();
    }
    
    // Create error element
    const errorDiv = document.createElement('div');
    errorDiv.className = 'field-error';
    errorDiv.style.cssText = `
        color: #e74c3c;
        font-size: 1.3rem;
        margin-top: 0.5rem;
        animation: slideInUp 0.3s ease;
    `;
    errorDiv.textContent = message;
    
    // Add error styling to field
    field.style.borderColor = '#e74c3c';
    
    // Insert error message
    field.parentNode.appendChild(errorDiv);
}

function validateForm() {
    const form = document.querySelector('.modern-contact-form');
    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!validateField({ target: field })) {
            isValid = false;
        }
    });
    
    return isValid;
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isValidPhone(phone) {
    // Clean the phone number by removing any non-digit characters
    const cleanPhone = phone.replace(/\D/g, '');
    
    // Sri Lankan phone number validation (10 digits starting with 0)
    const sriLankanPhoneRegex = /^0[0-9]{9}$/;
    
    return sriLankanPhoneRegex.test(cleanPhone);
}

function formatPhoneNumber(e) {
    // Remove any non-digit characters to keep only numbers
    let value = e.target.value.replace(/\D/g, '');
    
    // Limit to 10 digits for Sri Lankan phone numbers
    if (value.length > 10) {
        value = value.slice(0, 10);
    }
    
    // Set the cleaned value back without any formatting
    e.target.value = value;
}

function smoothScrollToContact() {
    const contactLinks = document.querySelectorAll('a[href="#contact"]');
    
    contactLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const contactSection = document.getElementById('contact');
            if (contactSection) {
                contactSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

function addSubmitButtonAnimation() {
    const submitBtn = document.querySelector('.modern-submit-btn');
    if (!submitBtn) return;
    
    submitBtn.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-3px) scale(1.02)';
    });
    
    submitBtn.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
}

function showLoadingState() {
    const submitBtn = document.querySelector('.modern-submit-btn');
    if (!submitBtn) return;
    
    // Save original content
    const originalHTML = submitBtn.innerHTML;
    
    // Show loading state
    submitBtn.innerHTML = `
        <span class="loading-spinner"></span>
        <span>Sending...</span>
    `;
    
    submitBtn.disabled = true;
    submitBtn.style.opacity = '0.7';
    
    // Add loading spinner styles
    if (!document.querySelector('#loading-spinner-styles')) {
        const style = document.createElement('style');
        style.id = 'loading-spinner-styles';
        style.textContent = `
            .loading-spinner {
                width: 20px;
                height: 20px;
                border: 2px solid rgba(255,255,255,0.3);
                border-top: 2px solid white;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }
            
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        `;
        document.head.appendChild(style);
    }
    
    // Reset after 10 seconds if no response
    setTimeout(() => {
        submitBtn.innerHTML = originalHTML;
        submitBtn.disabled = false;
        submitBtn.style.opacity = '1';
    }, 10000);
}

// Add some nice hover effects for info cards
document.addEventListener('DOMContentLoaded', function() {
    const infoCards = document.querySelectorAll('.info-card');
    
    infoCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
});

// Intersection Observer for animations
const observeElements = () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });
    
    const elements = document.querySelectorAll('.info-card, .contact-form-wrapper, .contact-header');
    elements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease';
        observer.observe(el);
    });
};

// Initialize animations when DOM is loaded
document.addEventListener('DOMContentLoaded', observeElements);