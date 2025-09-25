// Dark Mode Toggle Functionality

document.addEventListener('DOMContentLoaded', function() {
    const darkModeBtn = document.getElementById('dark-mode-btn');
    const body = document.body;
    
    // Check if dark mode was previously enabled
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    
    // Apply dark mode if it was previously enabled
    if (isDarkMode) {
        enableDarkMode();
    }
    
    // Add click event listener to the dark mode button
    darkModeBtn.addEventListener('click', function() {
        if (body.classList.contains('dark-mode')) {
            disableDarkMode();
        } else {
            enableDarkMode();
        }
    });
    
    // Function to enable dark mode
    function enableDarkMode() {
        body.classList.add('dark-mode');
        darkModeBtn.classList.remove('fa-moon');
        darkModeBtn.classList.add('fa-sun');
        darkModeBtn.title = 'Switch to Light Mode';
        localStorage.setItem('darkMode', 'true');
        
        // Add smooth animation
        darkModeBtn.style.transform = 'rotate(180deg) scale(1.1)';
        setTimeout(() => {
            darkModeBtn.style.transform = 'rotate(180deg) scale(1)';
        }, 200);
    }
    
    // Function to disable dark mode
    function disableDarkMode() {
        body.classList.remove('dark-mode');
        darkModeBtn.classList.remove('fa-sun');
        darkModeBtn.classList.add('fa-moon');
        darkModeBtn.title = 'Switch to Dark Mode';
        localStorage.setItem('darkMode', 'false');
        
        // Add smooth animation
        darkModeBtn.style.transform = 'rotate(-180deg) scale(1.1)';
        setTimeout(() => {
            darkModeBtn.style.transform = 'rotate(0deg) scale(1)';
        }, 200);
    }
    
    // Optional: Listen for system preference changes
    if (window.matchMedia) {
        const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
        
        // Check if user hasn't manually set a preference
        if (localStorage.getItem('darkMode') === null) {
            if (mediaQuery.matches) {
                enableDarkMode();
            }
        }
        
        // Listen for changes in system preference
        mediaQuery.addEventListener('change', function(e) {
            // Only auto-switch if user hasn't manually set a preference
            if (localStorage.getItem('darkMode') === null) {
                if (e.matches) {
                    enableDarkMode();
                } else {
                    disableDarkMode();
                }
            }
        });
    }
    
    // Add keyboard shortcut (Ctrl+Shift+D)
    document.addEventListener('keydown', function(e) {
        if (e.ctrlKey && e.shiftKey && e.key === 'D') {
            e.preventDefault();
            darkModeBtn.click();
        }
    });
});

// Additional utility functions
const darkModeUtils = {
    // Get current dark mode status
    isEnabled: function() {
        return document.body.classList.contains('dark-mode');
    },
    
    // Toggle dark mode programmatically
    toggle: function() {
        const darkModeBtn = document.getElementById('dark-mode-btn');
        if (darkModeBtn) {
            darkModeBtn.click();
        }
    },
    
    // Force enable dark mode
    enable: function() {
        if (!this.isEnabled()) {
            this.toggle();
        }
    },
    
    // Force disable dark mode
    disable: function() {
        if (this.isEnabled()) {
            this.toggle();
        }
    }
};

// Make utils available globally
window.darkModeUtils = darkModeUtils;