<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Dream Adventure - Ceylon Classic Tours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="css/booking-style.css">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <a href="index.html" class="logo"><i class="fas fa-hiking"></i> travel.com</a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="index.html#home">home</a>
            <a href="index.html#category">Adventures</a>
            <a href="index.html#packages">packages</a>
            <a href="index.html#contact">contact</a>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
        </div>
    </header>

    <!-- Search form -->
    <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>
        <form action="">
            <input type="search" name="" placeholder="Search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div>

    <!-- Floating Book Now Button -->
    <div class="floating-book-btn" id="floatingBookBtn" onclick="scrollToBooking(event)">
        <i class="fas fa-calendar-check"></i>
        <span>Book Now</span>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Book Your Dream Adventure</h1>
            <p>Discover the breathtaking beauty of destinations with our expertly crafted tour packages. From pristine beaches to ancient temples, wildlife safaris to cultural experiences - your perfect getaway awaits.</p>
            <div class="hero-buttons">
                <a href="#booking" class="btn primary-btn" onclick="scrollToBooking(event)">
                    <i class="fas fa-calendar-check"></i>
                    Book Now
                </a>
                <a href="#package-details" class="btn secondary-btn">
                    <i class="fas fa-info-circle"></i>
                    View Details
                </a>
            </div>
        </div>
    </section>

    <!-- Package Details Section -->
    <section class="package-details-section" id="package-details">
        <div class="container">
            <!-- Package Header -->
            <div class="package-header">
                <div class="package-title-section">
                    <h1 class="package-title">Manali Adventure Package</h1>
                    <p class="package-subtitle">Experience the breathtaking beauty of the Himalayas</p>
                    <div class="package-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-text">4.8/5 (124 reviews)</span>
                    </div>
                </div>
                <div class="package-price-section">
                    <div class="price-container">
                        <span class="original-price">₹25,000</span>
                        <span class="current-price">₹18,999</span>
                        <span class="per-person">per person</span>
                        <div class="discount-badge">Save 24%</div>
                    </div>
                    <button class="book-now-btn" onclick="scrollToBooking(event)">
                        <i class="fas fa-calendar-check"></i>
                        Book This Package
                    </button>
                </div>
            </div>

            <!-- Ultra Modern Gallery Section -->
            <div class="modern-gallery-section">
                <!-- Gallery Header -->
                <div class="gallery-header">
                    <div class="gallery-title-area">
                        <h2>Experience Manali</h2>
                        <p>Discover breathtaking views and unforgettable moments</p>
                    </div>
                    <div class="gallery-actions">
                        <button class="view-all-btn" onclick="openGalleryModal()">
                            <i class="fas fa-expand"></i>
                            View All 12 Photos
                        </button>
                    </div>
                </div>

                <!-- Modern Gallery Grid -->
                <div class="ultra-modern-gallery">
                    <!-- Hero Main Image -->
                    <div class="gallery-hero-main" onclick="openGalleryModal()">
                        <img src="images/category-1.jpg" alt="Manali Adventure Package" id="mainPackageImage">
                        <div class="hero-overlay">
                            <div class="hero-overlay-content">
                                <div class="play-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                                <span class="overlay-text">Explore Gallery</span>
                            </div>
                        </div>
                        <div class="image-indicator">
                            <span class="current-image">1</span>
                            <span class="separator">/</span>
                            <span class="total-images">12</span>
                        </div>
                    </div>

                    <!-- Secondary Images Grid -->
                    <div class="gallery-secondary-grid">
                        <div class="secondary-image-item" data-image="2" onclick="changeGalleryImage(this, 'images/category-2.jpg')">
                            <img src="images/category-2.jpg" alt="Adventure Activities">
                            <div class="image-overlay">
                                <div class="overlay-icon">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="secondary-image-item" data-image="3" onclick="changeGalleryImage(this, 'images/category-3.jpg')">
                            <img src="images/category-3.jpg" alt="Cultural Sites">
                            <div class="image-overlay">
                                <div class="overlay-icon">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="secondary-image-item" data-image="4" onclick="changeGalleryImage(this, 'images/category-4.jpg')">
                            <img src="images/category-4.jpg" alt="Scenic Beauty">
                            <div class="image-overlay">
                                <div class="overlay-icon">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="secondary-image-item show-more-item" onclick="openGalleryModal()">
                            <img src="images/img-1.jpg" alt="More Photos">
                            <div class="show-more-overlay">
                                <div class="more-count">+8</div>
                                <div class="more-text">More Photos</div>
                                <div class="grid-icon">
                                    <i class="fas fa-th-large"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interactive Gallery Tags -->
                <div class="gallery-tags">
                    <div class="tag-item active" data-category="all">
                        <i class="fas fa-globe"></i>
                        <span>All Views</span>
                    </div>
                    <div class="tag-item" data-category="adventure">
                        <i class="fas fa-mountain"></i>
                        <span>Adventure</span>
                    </div>
                    <div class="tag-item" data-category="culture">
                        <i class="fas fa-landmark"></i>
                        <span>Culture</span>
                    </div>
                    <div class="tag-item" data-category="nature">
                        <i class="fas fa-leaf"></i>
                        <span>Nature</span>
                    </div>
                </div>

                <!-- Modern Stats Bar -->
                <div class="modern-stats-bar">
                    <div class="stats-left">
                        <div class="stat-item">
                            <i class="fas fa-camera"></i>
                            <span>12 High-Quality Photos</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-star"></i>
                            <span>4.9 Star Rating</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-heart"></i>
                            <span>124 Reviews</span>
                        </div>
                    </div>
                    <div class="stats-right">
                        <button class="social-share-btn" onclick="shareGallery()">
                            <i class="fas fa-share-alt"></i>
                            <span>Share Gallery</span>
                        </button>
                        <button class="download-btn" onclick="downloadGallery()">
                            <i class="fas fa-download"></i>
                            <span>Download</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Premium Gallery Modal -->
            <div class="premium-gallery-modal" id="galleryModal">
                <div class="modal-backdrop" onclick="closeGalleryModal()"></div>
                <div class="premium-modal-content">
                    <!-- Modern Modal Header -->
                    <div class="premium-modal-header">
                        <div class="modal-title-section">
                            <h2>Manali Adventure Gallery</h2>
                            <p>Discover the beauty that awaits you</p>
                        </div>
                        <div class="modal-controls">
                            <button class="modal-control-btn" onclick="toggleSlideshow()">
                                <i class="fas fa-play" id="slideshowIcon"></i>
                            </button>
                            <button class="modal-control-btn" onclick="downloadCurrentImage()">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="modal-close-btn" onclick="closeGalleryModal()">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Main Image Display -->
                    <div class="modal-main-display">
                        <div class="main-image-container">
                            <img src="images/category-1.jpg" alt="Gallery Image" id="modalMainImage">
                            <div class="image-navigation">
                                <button class="nav-btn prev-btn" onclick="navigateImage(-1)">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="nav-btn next-btn" onclick="navigateImage(1)">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <div class="image-counter">
                                <span id="currentImageIndex">1</span> / <span id="totalImageCount">12</span>
                            </div>
                        </div>
                        <div class="image-info-panel">
                            <h3 id="imageTitle">Breathtaking Mountain Views</h3>
                            <p id="imageDescription">Experience the majestic Himalayan peaks and pristine valleys that make Manali a perfect adventure destination.</p>
                            <div class="image-tags">
                                <span class="tag">Mountain Views</span>
                                <span class="tag">Adventure</span>
                                <span class="tag">Nature</span>
                            </div>
                        </div>
                    </div>

                    <!-- Thumbnail Strip -->
                    <div class="modal-thumbnail-strip">
                        <div class="thumbnail-container" id="thumbnailContainer">
                            <div class="thumbnail-item active" data-index="0" onclick="selectModalImage(0)">
                                <img src="images/category-1.jpg" alt="Mountain Views">
                            </div>
                            <div class="thumbnail-item" data-index="1" onclick="selectModalImage(1)">
                                <img src="images/category-2.jpg" alt="Adventure Activities">
                            </div>
                            <div class="thumbnail-item" data-index="2" onclick="selectModalImage(2)">
                                <img src="images/category-3.jpg" alt="Cultural Sites">
                            </div>
                            <div class="thumbnail-item" data-index="3" onclick="selectModalImage(3)">
                                <img src="images/category-4.jpg" alt="Scenic Beauty">
                            </div>
                            <div class="thumbnail-item" data-index="4" onclick="selectModalImage(4)">
                                <img src="images/img-1.jpg" alt="Adventure Sports">
                            </div>
                            <div class="thumbnail-item" data-index="5" onclick="selectModalImage(5)">
                                <img src="images/img-2.jpg" alt="Local Culture">
                            </div>
                            <div class="thumbnail-item" data-index="6" onclick="selectModalImage(6)">
                                <img src="images/img-3.jpg" alt="Accommodation">
                            </div>
                            <div class="thumbnail-item" data-index="7" onclick="selectModalImage(7)">
                                <img src="images/img-4.jpg" alt="Local Cuisine">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Package Overview -->
            <div class="package-overview-section">
                <h2>Package Overview</h2>
                <p class="overview-description">
                    Discover the enchanting beauty of Manali, nestled in the heart of the Himalayas. This comprehensive 6-day package takes you through snow-capped mountains, lush valleys, ancient temples, and adventure activities that will create memories to last a lifetime. From paragliding in Solang Valley to exploring the mystical Rohtang Pass, every moment is designed to give you the ultimate Himalayan experience.
                </p>
                
                <div class="package-highlights">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <h3>Himalayan Views</h3>
                        <p>Stunning panoramic views of snow-capped peaks and pristine valleys</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-skiing"></i>
                        </div>
                        <h3>Adventure Sports</h3>
                        <p>Thrilling paragliding, river rafting, and mountain trekking experiences</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-spa"></i>
                        </div>
                        <h3>Hot Springs</h3>
                        <p>Relaxing natural hot water springs at Vashisht for ultimate wellness</p>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-camera"></i>
                        </div>
                        <h3>Scenic Beauty</h3>
                        <p>Picture-perfect landscapes perfect for photography enthusiasts</p>
                    </div>
                </div>
            </div>

            <!-- What Makes This Special Section -->
            <div class="special-features-section">
                <div class="section-header">
                    <h2>What Makes This Experience Unforgettable</h2>
                    <p>Join thousands of travelers who've discovered the magic of Manali</p>
                </div>

                <div class="features-showcase">
                    <!-- Feature 1 -->
                    <div class="feature-showcase-item">
                        <div class="feature-image">
                            <img src="images/category-2.jpg" alt="Adventure Activities">
                            <div class="feature-badge">Most Popular</div>
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-parachute-box"></i>
                            </div>
                            <h3>Thrilling Adventures</h3>
                            <p>Experience heart-pumping paragliding, river rafting, and mountain trekking in the stunning Himalayas</p>
                            <div class="feature-stats">
                                <span><i class="fas fa-star"></i> 4.8/5 Rating</span>
                                <span><i class="fas fa-users"></i> 500+ Reviews</span>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-showcase-item">
                        <div class="feature-image">
                            <img src="images/category-3.jpg" alt="Cultural Experience">
                            <div class="feature-badge">Authentic</div>
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-temple-buddhist"></i>
                            </div>
                            <h3>Cultural Immersion</h3>
                            <p>Visit ancient temples, interact with locals, and experience authentic Himachali culture and cuisine</p>
                            <div class="feature-stats">
                                <span><i class="fas fa-camera"></i> Photo Opportunities</span>
                                <span><i class="fas fa-utensils"></i> Local Cuisine</span>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="feature-showcase-item">
                        <div class="feature-image">
                            <img src="images/category-4.jpg" alt="Scenic Beauty">
                            <div class="feature-badge">Breathtaking</div>
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <h3>Himalayan Landscapes</h3>
                            <p>Witness snow-capped peaks, pristine valleys, and breathtaking views at 13,000+ feet altitude</p>
                            <div class="feature-stats">
                                <span><i class="fas fa-eye"></i> Scenic Views</span>
                                <span><i class="fas fa-snowflake"></i> Snow Activities</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trust Indicators -->
                <div class="trust-indicators">
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="trust-content">
                            <h4>100% Safe</h4>
                            <p>Certified guides & safety equipment</p>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-undo"></i>
                        </div>
                        <div class="trust-content">
                            <h4>Free Cancellation</h4>
                            <p>Cancel up to 24 hours before</p>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="trust-content">
                            <h4>24/7 Support</h4>
                            <p>Round-the-clock assistance</p>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="trust-content">
                            <h4>Award Winning</h4>
                            <p>Top-rated tour operator</p>
                        </div>
                    </div>
                </div>

                <!-- Quick Itinerary Overview -->
                <div class="quick-itinerary">
                    <h3>6-Day Journey Overview</h3>
                    <div class="itinerary-overview-grid">
                        <div class="overview-day">
                            <div class="day-num">1-2</div>
                            <div class="day-info">
                                <h4>Arrival & Local Exploration</h4>
                                <p>Temple visits, Mall Road, local cuisine</p>
                            </div>
                        </div>
                        <div class="overview-day">
                            <div class="day-num">3-4</div>
                            <div class="day-info">
                                <h4>Adventure & High Altitude</h4>
                                <p>Solang Valley activities, Rohtang Pass</p>
                            </div>
                        </div>
                        <div class="overview-day">
                            <div class="day-num">5-6</div>
                            <div class="day-info">
                                <h4>Villages & Departure</h4>
                                <p>Kasol, Tosh village, farewell</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Package Inclusions & Exclusions -->
            <div class="inclusions-section">
                <div class="inclusions-grid">
                    <div class="inclusions-card">
                        <h3><i class="fas fa-check-circle"></i> What's Included</h3>
                        <ul class="inclusions-list">
                            <li><i class="fas fa-bed"></i> 5 nights luxury mountain resort accommodation</li>
                            <li><i class="fas fa-utensils"></i> Daily breakfast and dinner with local cuisine</li>
                            <li><i class="fas fa-car"></i> Private vehicle for all transfers and sightseeing</li>
                            <li><i class="fas fa-user-tie"></i> Professional English-speaking guide</li>
                            <li><i class="fas fa-parachute-box"></i> Paragliding experience in Solang Valley</li>
                            <li><i class="fas fa-mountain"></i> Rohtang Pass permits and transfers</li>
                            <li><i class="fas fa-ticket-alt"></i> All temple and monument entry fees</li>
                            <li><i class="fas fa-headset"></i> 24/7 customer support and assistance</li>
                            <li><i class="fas fa-shield-alt"></i> Comprehensive travel insurance</li>
                            <li><i class="fas fa-camera"></i> Professional photography sessions</li>
                        </ul>
                    </div>
                    <div class="exclusions-card">
                        <h3><i class="fas fa-times-circle"></i> What's Not Included</h3>
                        <ul class="exclusions-list">
                            <li><i class="fas fa-plane"></i> Airfare or train tickets to/from Manali</li>
                            <li><i class="fas fa-utensils"></i> Lunch during sightseeing days</li>
                            <li><i class="fas fa-wallet"></i> Personal expenses and gratuities</li>
                            <li><i class="fas fa-skiing"></i> Optional adventure activities</li>
                            <li><i class="fas fa-camera"></i> Camera fees at certain monuments</li>
                            <li><i class="fas fa-tshirt"></i> Laundry and room service charges</li>
                            <li><i class="fas fa-gamepad"></i> Personal entertainment activities</li>
                            <li><i class="fas fa-wine-bottle"></i> Alcoholic beverages and drinks</li>
                            <li><i class="fas fa-shopping-bag"></i> Shopping and souvenirs</li>
                            <li><i class="fas fa-first-aid"></i> Medical expenses and medication</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2>What Our Customers Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-image">
                            <img src="images/img-1.jpg" alt="Customer">
                        </div>
                        <div class="customer-info">
                            <h4>Priya Sharma</h4>
                            <span class="customer-location">Mumbai, Maharashtra</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "Amazing experience in Manali! The team organized everything perfectly. The hotel was beautiful, 
                        the food was delicious, and our guide was incredibly knowledgeable. The adventure activities 
                        were thrilling yet safe. Highly recommend this package!"
                    </p>
                    <div class="testimonial-date">February 2024</div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-image">
                            <img src="images/img-2.jpg" alt="Customer">
                        </div>
                        <div class="customer-info">
                            <h4>Rahul & Anita Gupta</h4>
                            <span class="customer-location">Delhi, India</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "Perfect honeymoon package! Every detail was taken care of. The scenic beauty of Manali 
                        combined with adventure activities made our trip unforgettable. The hot springs visit 
                        was incredibly relaxing. Thank you for making our honeymoon magical!"
                    </p>
                    <div class="testimonial-date">January 2024</div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-image">
                            <img src="images/img-3.jpg" alt="Customer">
                        </div>
                        <div class="customer-info">
                            <h4>Vikram Singh</h4>
                            <span class="customer-location">Bangalore, Karnataka</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "Outstanding service and value for money! The itinerary was well-planned with perfect 
                        balance of adventure and relaxation. Rohtang Pass was breathtaking, and paragliding 
                        was an incredible experience. Will definitely book again!"
                    </p>
                    <div class="testimonial-date">March 2024</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us-section">
        <div class="container">
            <div class="section-header">
                <h2>Why Travel With Us?</h2>
                <p>Experience the difference with our award-winning tour services</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>15+ Years Experience</h3>
                    <p>Over a decade of expertise in organizing unforgettable mountain adventures and cultural experiences across India.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>50,000+ Happy Travelers</h3>
                    <p>Join thousands of satisfied customers who have created lifelong memories with our expertly crafted tour packages.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Customer Support</h3>
                    <p>Round-the-clock assistance before, during, and after your trip. We're always here to help you.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>100% Safe & Secure</h3>
                    <p>Your safety is our priority. All activities are conducted with highest safety standards and experienced guides.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Best Price Guarantee</h3>
                    <p>We offer competitive pricing with no hidden costs. Get the best value for your money with premium services.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3>Customizable Tours</h3>
                    <p>Flexible itineraries that can be tailored to your preferences, group size, and special requirements.</p>
                </div>
            </div>
        </div>
    </section>







    <!-- Booking Form Section -->
    <section class="booking-section" id="booking">
        <div class="heading">Complete Your Booking</div>
        <div class="booking-container">
            <div class="booking-form-wrapper">
                <div class="booking-form-header">
                    <h2>Secure Your Adventure</h2>
                    <p>Fill in your details below and we'll contact you within 24 hours to confirm your booking</p>
                </div>

                <form id="bookingForm" class="booking-form" action="process_booking.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="fullName">
                                <i class="fas fa-user"></i>
                                Full Name
                            </label>
                            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">
                                <i class="fas fa-envelope"></i>
                                Email Address
                            </label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">
                                <i class="fas fa-phone"></i>
                                Phone Number
                            </label>
                            <input type="tel" id="phone" name="phone" placeholder="Your contact number" required>
                        </div>

                        <div class="form-group">
                            <label for="packageSelect">
                                <i class="fas fa-map-marked-alt"></i>
                                Choose Your Package
                            </label>
                            <select id="packageSelect" name="packageSelect" required>
                                <option value="">-- Select your preferred package --</option>
                                <option value="Highlights of Sri Lanka – 10 Days" data-price="865" selected>
                                        Highlights of Sri Lanka – 10 Days – $865
                                </option>
                                <option value="Highlights of Sri Lanka 5 Days" data-price="380">
                                         Highlights of Sri Lanka 5 Days – $380
                                </option>
                                <option value="Sri Lanka 9 Day Tour Package" data-price="660">
                                        Sri Lanka 9 Day Tour Package – $660
                                </option>
                                <option value="Sri Lanka Budget Tour Package" data-price="640">
                                        Sri Lanka Budget Tour Package – $640
                                </option>
                                <option value="Sri Lankan Heritage Tour" data-price="515">
                                        Sri Lankan Heritage Tour – $515
                                </option>
                                <option value="Sri Lanka Beach Holiday" data-price="495">
                                        Sri Lanka Beach Holiday – $495
                                </option>
                            </select>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="travelDate">
                                <i class="fas fa-calendar-alt"></i>
                                Preferred Travel Date
                            </label>
                            <input type="date" id="travelDate" name="travelDate" required>
                        </div>

                        <div class="form-group">
                            <label for="numTravelers">
                                <i class="fas fa-users"></i>
                                Number of Travelers
                            </label>
                            <input type="number" id="numTravelers" name="numTravelers" min="1" max="20" value="1" required>
                        </div>
                    </div>

                    <div class="price-summary" 
     style="background:#f9fafc; border:2px solid #e0e6ed; border-radius:12px; 
            padding:20px; margin:20px 0; text-align:center; 
            box-shadow:0 4px 12px rgba(0,0,0,0.05); transition:all 0.3s ease-in-out;">

    <h3 style="font-size:1.6rem; font-weight:bold; color:#2c3e50; margin-bottom:10px;">
        Total Price: 
        <span id="totalPrice" style="color:#27ae60; font-size:1.8rem; font-weight:700;">$0</span>
    </h3>

    <p id="priceBreakdown" style="font-size:1rem; color:#555; margin:0;"></p>
</div>



                    <div class="form-group full-width">
                        <label for="message">
                            <i class="fas fa-comment-dots"></i>
                            Special Requests & Notes
                        </label>
                        <textarea id="message" name="message" rows="4" placeholder="Any special requirements, dietary restrictions, or specific interests? Let us know how we can make your adventure perfect!"></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="submit-booking">
                            <i class="fas fa-check-circle"></i>
                            Secure My Adventure
                        </button>
                    </div>
                </form>

                <div id="bookingMessage" class="booking-message"></div>
            </div>

            <div class="booking-info">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>100% Secure Booking</h3>
                    <p>Your personal information and payment details are protected with bank-level encryption and security measures.</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Expert Support 24/7</h3>
                    <p>Our experienced travel consultants are available round the clock to help plan your perfect Sri Lankan adventure.</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Best Price Promise</h3>
                    <p>We guarantee the most competitive prices with transparent pricing and no hidden costs. If you find better, we'll match it!</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <h3>Flexible Cancellation</h3>
                    <p>Life happens. That's why we offer flexible cancellation policies and easy rescheduling options for your peace of mind.</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Exclusive Perks</h3>
                    <p>Enjoy complimentary upgrades, welcome gifts, and special access to unique experiences not available elsewhere.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <div class="footer-intro">
            <p>Experience the luxuries of Sri Lanka with our specially crafted luxury tours and indulge in its quintessential charms.</p>   
        </div>        
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="index.html#home">home</a>
                <a href="index.html#packages">packages</a>
                <a href="index.html#contact">ask questions</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+94763936557"> <i class="fas fa-phone"></i>+94 76 393 6557</a>
                <a href="https://www.google.com/maps/search/?api=1&query=59%2F58+Hanthana+Gemunu+Mawatha,+Kandy,+Sri+Lanka" target="_blank"><i class="fas fa-map"></i>59/58 Hanthana Gemunu Mawatha Kandy</a>
                <a href="mailto: info@ceylonclassictours.com"><i class="fas fa-envelope"></i>info@ceylonclassictours.com</a>
            </div>

            <div class="box">
                <h3 class="cen">Corporate Registration Numbers</h3>
                <p>CR NO: PV00232694</p>
                <p>SLTDA/SQA/PRO/TA00511</p>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/ceyloncclassictours/"> <i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="https://www.instagram.com/ceylon.ctour/?hl=en"> <i class="fab fa-instagram"></i>Instagram</a>
                <a href="tel:+353873839726"> <i class="fas fa-phone"></i>+353873839726</a>
                <a href="https://www.youtube.com/channel/UClH9GsgZyDERbvGj680THRQ"> <i class="fab fa-youtube"></i>Youtube</a>
                <a href="https://www.google.com/maps/search/?api=1&query=Apt+4+M.J.s+Diner+Cloon+Moor,+Tralee,+V92T975" target="_blank"><i class="fab fa-map"></i>Apt 4 M.J.s Diner Cloon Moor, Tralee, V92T975</a>
                <a href="mailto: lishan@ceylonclassictours.com"><i class="fas fa-envelope"></i>lishan@ceylonclassictours.com</a>
            </div>
        </div>
        <div class="credit">@ 2025 Ceylon Classic Tours. All rights Reserved.<br>Designed & Developed by <span>PixAll Designs</span></div>
    </section>

    <!-- Scripts -->
    <script src="js/script.js"></script>
    <script src="booking-script.js"></script>
    <script>
        // Smooth Scroll to Booking Section
        function scrollToBooking(event) {
            event.preventDefault();
            const bookingSection = document.getElementById('booking');
            if (bookingSection) {
                bookingSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Add a visual highlight effect
                bookingSection.style.animation = 'highlightSection 2s ease-in-out';
                setTimeout(() => {
                    bookingSection.style.animation = '';
                }, 2000);
            }
        }
        
        // Ultra Modern Gallery Functions
        let currentImageIndex = 0;
        let isSlideshow = false;
        let slideshowInterval;
        
        const galleryImages = [
            { src: 'images/category-1.jpg', title: 'Breathtaking Mountain Views', description: 'Experience the majestic Himalayan peaks and pristine valleys that make Manali a perfect adventure destination.', tags: ['Mountain Views', 'Adventure', 'Nature'] },
            { src: 'images/category-2.jpg', title: 'Thrilling Adventure Activities', description: 'Get your adrenaline pumping with exciting outdoor activities like paragliding, trekking, and river rafting.', tags: ['Adventure', 'Sports', 'Outdoor'] },
            { src: 'images/category-3.jpg', title: 'Rich Cultural Heritage', description: 'Discover ancient temples, traditional architecture, and immerse yourself in local culture and traditions.', tags: ['Culture', 'Heritage', 'Traditional'] },
            { src: 'images/category-4.jpg', title: 'Scenic Natural Beauty', description: 'Explore pristine valleys, lush green landscapes, and breathtaking natural formations.', tags: ['Nature', 'Scenic', 'Landscape'] },
            { src: 'images/img-1.jpg', title: 'Adventure Sports Paradise', description: 'Experience world-class adventure sports in one of India\'s most beautiful destinations.', tags: ['Adventure', 'Sports', 'Extreme'] },
            { src: 'images/img-2.jpg', title: 'Local Cultural Experiences', description: 'Connect with local communities and experience authentic Himalayan culture.', tags: ['Culture', 'Local', 'Community'] },
            { src: 'images/img-3.jpg', title: 'Premium Accommodation', description: 'Stay in comfortable, well-appointed accommodations with stunning mountain views.', tags: ['Accommodation', 'Comfort', 'Luxury'] },
            { src: 'images/img-4.jpg', title: 'Authentic Himalayan Cuisine', description: 'Savor delicious local cuisine and traditional Himalayan flavors.', tags: ['Food', 'Cuisine', 'Traditional'] }
        ];

        function changeGalleryImage(element, imageSrc) {
            const mainImage = document.getElementById('mainPackageImage');
            const imageIndicator = document.querySelector('.current-image');
            
            if (mainImage) {
                // Find image index
                const imageIndex = galleryImages.findIndex(img => img.src === imageSrc);
                currentImageIndex = imageIndex !== -1 ? imageIndex : 0;
                
                // Smooth transition effect
                mainImage.style.transform = 'scale(0.95)';
                mainImage.style.opacity = '0.6';
                
                setTimeout(() => {
                    mainImage.src = imageSrc;
                    mainImage.style.transform = 'scale(1)';
                    mainImage.style.opacity = '1';
                    
                    // Update indicator
                    if (imageIndicator) {
                        imageIndicator.textContent = currentImageIndex + 1;
                    }
                }, 200);
                
                // Add click effect
                element.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    element.style.transform = 'scale(1)';
                }, 150);
            }
        }

        function openGalleryModal() {
            const modal = document.getElementById('galleryModal');
            if (modal) {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
                updateModalImage(currentImageIndex);
                
                // Smooth entrance animation
                setTimeout(() => {
                    modal.querySelector('.premium-modal-content').style.transform = 'scale(1)';
                    modal.querySelector('.premium-modal-content').style.opacity = '1';
                }, 10);
            }
        }

        function closeGalleryModal() {
            const modal = document.getElementById('galleryModal');
            if (modal) {
                modal.querySelector('.premium-modal-content').style.transform = 'scale(0.95)';
                modal.querySelector('.premium-modal-content').style.opacity = '0';
                
                setTimeout(() => {
                    modal.classList.remove('active');
                    document.body.style.overflow = 'auto';
                    stopSlideshow();
                }, 300);
            }
        }

        function selectModalImage(index) {
            currentImageIndex = index;
            updateModalImage(index);
            updateThumbnailSelection(index);
        }

        function updateModalImage(index) {
            const modalImage = document.getElementById('modalMainImage');
            const imageTitle = document.getElementById('imageTitle');
            const imageDescription = document.getElementById('imageDescription');
            const currentIndexSpan = document.getElementById('currentImageIndex');
            const imageTags = document.querySelector('.image-tags');
            
            if (galleryImages[index]) {
                const image = galleryImages[index];
                
                // Smooth transition
                modalImage.style.opacity = '0.5';
                setTimeout(() => {
                    modalImage.src = image.src;
                    modalImage.style.opacity = '1';
                    
                    if (imageTitle) imageTitle.textContent = image.title;
                    if (imageDescription) imageDescription.textContent = image.description;
                    if (currentIndexSpan) currentIndexSpan.textContent = index + 1;
                    
                    // Update tags
                    if (imageTags && image.tags) {
                        imageTags.innerHTML = image.tags.map(tag => `<span class="tag">${tag}</span>`).join('');
                    }
                }, 150);
            }
        }

        function updateThumbnailSelection(index) {
            const thumbnails = document.querySelectorAll('.thumbnail-item');
            thumbnails.forEach((thumb, i) => {
                thumb.classList.toggle('active', i === index);
            });
        }

        function navigateImage(direction) {
            currentImageIndex += direction;
            
            if (currentImageIndex >= galleryImages.length) {
                currentImageIndex = 0;
            } else if (currentImageIndex < 0) {
                currentImageIndex = galleryImages.length - 1;
            }
            
            updateModalImage(currentImageIndex);
            updateThumbnailSelection(currentImageIndex);
        }

        function toggleSlideshow() {
            const slideshowIcon = document.getElementById('slideshowIcon');
            
            if (isSlideshow) {
                stopSlideshow();
                slideshowIcon.className = 'fas fa-play';
            } else {
                startSlideshow();
                slideshowIcon.className = 'fas fa-pause';
            }
        }

        function startSlideshow() {
            isSlideshow = true;
            slideshowInterval = setInterval(() => {
                navigateImage(1);
            }, 3000);
        }

        function stopSlideshow() {
            isSlideshow = false;
            if (slideshowInterval) {
                clearInterval(slideshowInterval);
            }
        }

        function downloadCurrentImage() {
            const currentImage = galleryImages[currentImageIndex];
            if (currentImage) {
                const link = document.createElement('a');
                link.href = currentImage.src;
                link.download = currentImage.title.replace(/\s+/g, '_') + '.jpg';
                link.click();
            }
        }

        function downloadGallery() {
            alert('Gallery download feature would be implemented with server-side support. For now, you can right-click and save individual images.');
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('galleryModal');
            if (modal && modal.classList.contains('active')) {
                switch(e.key) {
                    case 'ArrowLeft':
                        navigateImage(-1);
                        break;
                    case 'ArrowRight':
                        navigateImage(1);
                        break;
                    case 'Escape':
                        closeGalleryModal();
                        break;
                    case ' ':
                        e.preventDefault();
                        toggleSlideshow();
                        break;
                }
            }
        });

        // Enhanced Share Gallery Function
        function shareGallery() {
            if (navigator.share) {
                navigator.share({
                    title: 'Manali Adventure Package Gallery',
                    text: 'Check out these amazing photos from our Manali tour package! 🏔️✨',
                    url: window.location.href
                }).catch(console.error);
            } else {
                // Fallback for browsers without Web Share API
                const url = window.location.href;
                if (navigator.clipboard) {
                    navigator.clipboard.writeText(url).then(() => {
                        showToast('Gallery link copied to clipboard! 📋');
                    });
                } else {
                    // Fallback for older browsers
                    const textArea = document.createElement('textarea');
                    textArea.value = url;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textArea);
                    showToast('Gallery link copied! 📋');
                }
            }
        }

        // Toast notification function
        function showToast(message) {
            const toast = document.createElement('div');
            toast.className = 'toast-notification';
            toast.textContent = message;
            document.body.appendChild(toast);
            
            setTimeout(() => {
                toast.classList.add('show');
            }, 100);
            
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 300);
            }, 3000);
        }

        // Add modern ripple effect on click
        function createRippleEffect(element) {
            const ripple = document.createElement('div');
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(255, 107, 53, 0.6)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'ripple 0.6s linear';
            ripple.style.left = '50%';
            ripple.style.top = '50%';
            ripple.style.width = '20px';
            ripple.style.height = '20px';
            ripple.style.marginLeft = '-10px';
            ripple.style.marginTop = '-10px';
            ripple.style.pointerEvents = 'none';
            
            element.style.position = 'relative';
            element.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        }

        // Add CSS for ripple animation
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(rippleStyle);

        // Enhanced form interaction - Does NOT affect backend processing
        document.addEventListener('DOMContentLoaded', function() {
            // Pre-select Manali package if coming from main page
            const urlParams = new URLSearchParams(window.location.search);
            const selectedPackage = urlParams.get('package');
            if (selectedPackage === 'manali') {
                document.getElementById('packageSelect').value = 'Manali Adventure Package';
            }

            // Add smooth scrolling to booking section
            document.querySelectorAll('a[href="#booking"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.getElementById('booking').scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Floating booking button scroll detection
            const floatingBtn = document.getElementById('floatingBookBtn');
            const bookingSection = document.getElementById('booking');
            
            function handleFloatingButton() {
                if (bookingSection && floatingBtn) {
                    const heroSection = document.querySelector('.hero-section');
                    const bookingSectionTop = bookingSection.offsetTop;
                    const scrollPosition = window.scrollY;
                    const heroHeight = heroSection ? heroSection.offsetHeight : 600;
                    
                    // Show button after scrolling past hero section
                    // Hide button when reaching booking section
                    if (scrollPosition > heroHeight && scrollPosition < bookingSectionTop - 200) {
                        floatingBtn.classList.add('visible');
                    } else {
                        floatingBtn.classList.remove('visible');
                    }
                }
            }
            
            window.addEventListener('scroll', handleFloatingButton);
            handleFloatingButton(); // Check initial state

            // Set minimum date to today for travel date
            const today = new Date().toISOString().split('T')[0];
            const travelDateInput = document.getElementById('travelDate');
            
            if (travelDateInput) travelDateInput.min = today;

            // Add visual feedback for form submission (without changing backend)
            const bookingForm = document.getElementById('bookingForm');
            const submitButton = document.querySelector('.submit-booking');
            
            if (bookingForm && submitButton) {
                bookingForm.addEventListener('submit', function() {
                    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
                    submitButton.disabled = true;
                });
            }
        });
    </script>
    <script src="calculate.js"></script>
</body>

</html>