document.addEventListener('DOMContentLoaded', function() {
    // Initialize Testimonials Swiper
    const testimonialsSwiper = new Swiper('.testimonials-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'slide',
        speed: 800,
        slidesPerView: 1,
        spaceBetween: 25,
        width: null, // Remove fixed width to use container width
        grabCursor: false, // Disable grab cursor
        
        // Disable touch/mouse dragging
        allowTouchMove: false, // Disable touch movement
        simulateTouch: false, // Disable simulated touch
        touchRatio: 0, // Set touch ratio to 0
        shortSwipes: false,
        longSwipes: false,
        touchStartPreventDefault: true,
        
        // Disable mousewheel control
        mousewheel: {
            enabled: false
        },
        
        // Enable keyboard control
        keyboard: {
            enabled: true,
            onlyInViewport: true
        },
        
        // Responsive breakpoints adjusted to match CSS styles
        breakpoints: {
            // when window width is >= 480px (small mobile devices)
            480: {
                slidesPerView: 1,
                spaceBetween: 20,
                width: null // Remove fixed width for percentage-based sizing
            },
            // when window width is >= 768px (tablets)
            768: {
                slidesPerView: 2,
                spaceBetween: 25,
                width: null
            },
            // when window width is >= 1024px (desktops)
            1024: {
                slidesPerView: 2.5, // Show partial next slide
                spaceBetween: 30,
                width: null
            },
            // when window width is >= 1280px (large desktops)
            1280: {
                slidesPerView: 3,
                spaceBetween: 35,
                width: null
            }
        },
        
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '" aria-label="Go to slide ' + (index + 1) + '"></span>';
            }
        },
        
        // Navigation arrows - enhanced to match CSS styles
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            hideOnClick: false,
            disabledClass: 'swiper-button-disabled',
        },
        
        // A11y accessibility features
        a11y: {
            enabled: true,
            prevSlideMessage: 'Previous testimonial',
            nextSlideMessage: 'Next testimonial',
            firstSlideMessage: 'This is the first testimonial',
            lastSlideMessage: 'This is the last testimonial',
            paginationBulletMessage: 'Go to testimonial {{index}}'
        },
        
        // On slide change animation - enhanced to match CSS styling
        on: {
            init: function() {
                // Apply consistent card heights
                document.querySelectorAll('.testimonial-card').forEach(card => {
                    card.style.height = '420px';
                    card.style.minHeight = '420px';
                    card.style.maxHeight = '460px';
                    
                    // Ensure fonts are consistent with CSS
                    const customerName = card.querySelector('.customer-info h4');
                    if (customerName) customerName.style.fontSize = '1.5rem';
                    
                    const testimonialText = card.querySelector('.testimonial-text');
                    if (testimonialText) testimonialText.style.fontSize = '1.25rem';
                });
            },
            slideChangeTransitionStart: function() {
                document.querySelectorAll('.swiper-slide-active .testimonial-card')
                    .forEach(card => {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                    });
            },
            slideChangeTransitionEnd: function() {
                document.querySelectorAll('.swiper-slide-active .testimonial-card')
                    .forEach(card => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                        card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    });
            },
        },
    });
    
    // Add mouse wheel control for desktop
    testimonialsSwiper.on('mouseenter', function() {
        testimonialsSwiper.autoplay.stop();
    });
    
    testimonialsSwiper.on('mouseleave', function() {
        testimonialsSwiper.autoplay.start();
    });
    
    // Add accessibility features
    const swiperContainer = document.querySelector('.testimonials-swiper');
    swiperContainer.setAttribute('aria-label', 'Customer Testimonials Carousel');
    
    // Add focus trap for keyboard navigation
    const swiperSlides = document.querySelectorAll('.testimonials-swiper .swiper-slide');
    swiperSlides.forEach(slide => {
        slide.setAttribute('tabindex', '0');
    });
    
    // Enhanced navigation buttons with styling from testimonials-swiper.css
    const nextButton = document.querySelector('.testimonials-swiper .swiper-button-next');
    const prevButton = document.querySelector('.testimonials-swiper .swiper-button-prev');
    
    if (nextButton && prevButton) {
        // Apply styles from CSS to ensure consistency
        [nextButton, prevButton].forEach(button => {
            // Set sizes to match CSS
            button.style.width = '60px';
            button.style.height = '60px';
            button.style.borderRadius = '50%';
            button.style.boxShadow = '0 3px 10px rgba(0, 0, 0, 0.08)';
            button.style.color = '#ff6b35';
            button.style.transition = 'all 0.3s ease';
            
            // Apply hover effects
            button.addEventListener('mouseenter', function() {
                this.style.background = 'rgba(255, 255, 255, 0.25)';
                this.style.transform = 'scale(1.15)';
                this.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.12)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.background = 'rgba(255, 255, 255, 0.1)';
                this.style.transform = 'scale(1)';
                this.style.boxShadow = '0 3px 10px rgba(0, 0, 0, 0.08)';
            });
            
            // Add click effect
            button.addEventListener('mousedown', function() {
                this.style.transform = 'scale(0.95)';
            });
            
            button.addEventListener('mouseup', function() {
                this.style.transform = 'scale(1.15)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 200);
            });
            
            // Add focus styles for accessibility
            button.addEventListener('focus', function() {
                this.style.boxShadow = '0 0 0 2px rgba(255, 107, 53, 0.2)';
            });
            
            button.addEventListener('blur', function() {
                this.style.boxShadow = '0 3px 10px rgba(0, 0, 0, 0.08)';
            });
        });
        
        // Set arrow size to match CSS
        const arrows = document.querySelectorAll('.testimonials-swiper .swiper-button-next:after, .testimonials-swiper .swiper-button-prev:after');
        arrows.forEach(arrow => {
            arrow.style.fontSize = '28px';
            arrow.style.fontWeight = 'bold';
            arrow.style.textShadow = '0 1px 3px rgba(0,0,0,0.2)';
        });
    }
});