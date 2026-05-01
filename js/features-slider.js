document.addEventListener('DOMContentLoaded', function() {
    // Initialize Features Slider
    const featuresSlider = new Swiper('.features-slider', {
        // Basic parameters
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        effect: 'slide',
        speed: 800,
        slidesPerView: 1,
        spaceBetween: 25,
        grabCursor: true,  // Enable grab cursor for better UX
        
        // Improved touch behavior for better navigation
        allowTouchMove: true,
        simulateTouch: true,
        touchRatio: 1.5,  // Increased for more responsive swipes
        shortSwipes: true,
        longSwipes: true,
        followFinger: true,
        threshold: 10,  // Lower threshold for more responsive swipes
        
        // Disable mousewheel control to allow normal page scrolling
        mousewheel: {
            enabled: false,
        },
        
        // Enable keyboard control
        keyboard: {
            enabled: true,
            onlyInViewport: true
        },
        
        // Responsive breakpoints - Show 3 features at most, with navigation for the 4th
        breakpoints: {
            // when window width is >= 480px (small mobile devices)
            480: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            // when window width is >= 768px (tablets)
            768: {
                slidesPerView: 2,
                spaceBetween: 25,
            },
            // when window width is >= 1024px (desktops)
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            // when window width is >= 1280px (large desktops)
            1280: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        },
        
        // Add pagination bullets
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '" aria-label="Go to feature ' + (index + 1) + '"></span>';
            }
        },
        
        // Enhanced navigation arrows with more visible styling
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            hideOnClick: false,
            disabledClass: 'swiper-button-disabled',
        },
        
        // A11y accessibility features
        a11y: {
            enabled: true,
            prevSlideMessage: 'Previous feature',
            nextSlideMessage: 'Next feature',
            firstSlideMessage: 'This is the first feature',
            lastSlideMessage: 'This is the last feature',
            paginationBulletMessage: 'Go to feature {{index}}'
        },
        
        // Improved slideChangeTransitionStart for better slide transitions
        slideActiveClass: 'swiper-slide-active',
        slideNextClass: 'swiper-slide-next',
        slidePrevClass: 'swiper-slide-prev',
        
        // On slide change animation
        on: {
            init: function() {
                // Show initial hint that there are more slides to see
                const swiperContainer = document.querySelector('.features-slider');
                if (swiperContainer && window.innerWidth >= 1024) {
                    // Add a slight highlight to the edge to indicate more content
                    setTimeout(() => {
                        this.slideNext(1000);
                        setTimeout(() => {
                            this.slidePrev(1000);
                        }, 1200);
                    }, 1000);
                }
            },
            slideChangeTransitionStart: function() {
                // Fade out current slide content
                document.querySelectorAll('.swiper-slide-active .feature-showcase-item')
                    .forEach(card => {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                    });
            },
            slideChangeTransitionEnd: function() {
                // Fade in new slide content with slight delay for smoother effect
                setTimeout(() => {
                    document.querySelectorAll('.swiper-slide-active .feature-showcase-item')
                        .forEach(card => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                        });
                }, 50);
            },
        },
    });
    
    // Pause autoplay on hover
    const featuresSwiperContainer = document.querySelector('.features-slider');
    if (featuresSwiperContainer) {
        featuresSwiperContainer.addEventListener('mouseenter', function() {
            featuresSlider.autoplay.stop();
        });
        
        featuresSwiperContainer.addEventListener('mouseleave', function() {
            featuresSlider.autoplay.start();
        });
        
        // Add accessibility attributes
        featuresSwiperContainer.setAttribute('aria-label', 'Feature Highlights Carousel');
    
        // Add focus trap for keyboard navigation
        const featureSlides = document.querySelectorAll('.features-slider .swiper-slide');
        featureSlides.forEach(slide => {
            slide.setAttribute('tabindex', '0');
        });
    }
    
    // Enhanced navigation buttons with attention-grabbing animations
    const featureNextButton = document.querySelector('.features-slider .swiper-button-next');
    const featurePrevButton = document.querySelector('.features-slider .swiper-button-prev');
    
    if (featureNextButton && featurePrevButton) {
        // Add initial attention-grabbing animation
        setTimeout(() => {
            // Pulse animation for the next button to hint at more content
            const pulseAnimation = () => {
                featureNextButton.style.transform = 'scale(1.2)';
                featureNextButton.style.boxShadow = '0 8px 20px rgba(0, 0, 0, 0.25)';
                
                setTimeout(() => {
                    featureNextButton.style.transform = 'scale(1.1)';
                    featureNextButton.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.15)';
                }, 500);
            };
            
            // Run the animation twice to draw attention
            pulseAnimation();
            setTimeout(pulseAnimation, 1500);
        }, 2000);
        
        // Enhanced click effects
        [featureNextButton, featurePrevButton].forEach(button => {
            button.addEventListener('mousedown', function() {
                this.style.transform = 'scale(0.9)';
                this.style.boxShadow = '0 3px 10px rgba(0, 0, 0, 0.2)';
            });
            
            button.addEventListener('mouseup', function() {
                this.style.transform = 'scale(1.15)';
                this.style.boxShadow = '0 8px 20px rgba(0, 0, 0, 0.25)';
                setTimeout(() => {
                    this.style.transform = 'scale(1.1)';
                    this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.15)';
                }, 200);
            });
            
            // Add hint tooltips
            button.setAttribute('title', button === featureNextButton ? 'See more features' : 'Previous feature');
        });
    }
    
    // Add animation for viewport entry
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    
    document.querySelectorAll('.feature-showcase-item').forEach(item => {
        observer.observe(item);
    });
});