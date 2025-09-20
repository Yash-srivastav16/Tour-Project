<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#ff6b35">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Book Your Dream Adventure - Ceylon Classic Tours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="css/booking-style.css">
    <link rel="stylesheet" href="css/gallery-fixes.css">
    <link rel="stylesheet" href="css/feedback-button.css">
    <!-- Swipper CSS-->
     <link rel="stylesheet" href="css/testimonials-swiper.css">
     <link rel="stylesheet" href="css/features-slider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <a href="index.html" class="logo"><i class="fas fa-hiking"></i> travel.com</a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="Sri_lanka_Budget_Tour_Package.php">home</a>
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
    
    <!-- Floating Feedback Button -->
    <div class="floating-feedback-btn" id="floatingFeedbackBtn" onclick="goToFeedbackPage(event)">
        <i class="fas fa-comment-dots"></i>
        <span>Share Feedback</span>
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
                    <h1 class="package-title">Highlights of Sri Lanka – 10 Days</h1>
                    <p class="package-subtitle">Experience 10 unforgettable days exploring ancient temples, wildlife safaris, whale watching, and pristine beaches across Sri Lanka's diverse landscapes</p>
                    <div class="package-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-text">5.0/5 (0 reviews)</span>
                    </div>
                </div>
                <div class="package-price-section">
                    <div class="price-container">
                        <span class="original-price">$950</span>
                        <span class="current-price">$865</span>
                        <span class="per-person">per person</span>
                        <div class="discount-badge">Save 9%</div>
                    </div>
                    <button class="book-now-btn" onclick="scrollToBooking(event)">
                        <i class="fas fa-calendar-check"></i>
                        Book This Package
                    </button>
                </div>
            </div>

            <!-- Modern Tour Gallery Section -->
            <div class="modern-gallery-section">
                <!-- Gallery Header -->
                <div class="gallery-header">
                    <h2>Experience the Journey</h2>
                    <p>Immerse yourself in stunning destinations and unforgettable adventures</p>
                </div>

                <!-- Main Gallery Layout -->
                <div class="tour-gallery-grid">
                    <!-- Featured Main Image -->
                    <div class="gallery-main-image" onclick="openGalleryLightbox()">
                        <img src="image galary/sigiriya.jpg" alt="Sri Lanka Adventure" id="mainGalleryImage">
                        <div class="image-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">
                                    <i class="fas fa-expand-alt"></i>
                                </div>
                                <span class="view-text">Click to explore</span>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Grid Sidebar -->
                    <div class="gallery-grid-sidebar">
                        <div class="grid-image" onclick="changeMainImage(this, 'image galary/dambullacavetemple1.jpg')">
                            <img src="image galary/dambullacavetemple1.jpg" alt="Dambulla Cave Temple">
                            <div class="grid-overlay">
                                <i class="fas fa-mountain"></i>
                            </div>
                        </div>

                        <div class="grid-image" onclick="changeMainImage(this, 'image galary/yala2.jpg')">
                            <img src="image galary/yala2.jpg" alt="Yala Wildlife Safari">
                            <div class="grid-overlay">
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>

                        <div class="grid-image" onclick="changeMainImage(this, 'image galary/Tea plantation 1.jpg')">
                            <img src="image galary/Tea plantation 1.jpg" alt="Nuwara Eliya Tea Plantations">
                            <div class="grid-overlay">
                                <i class="fas fa-leaf"></i>
                            </div>
                        </div>

                        <div class="grid-image more-photos" onclick="openGalleryLightbox()">
                            <img src="image galary/mirissaBeach.jpg" alt="Mirissa Beach & Whale Watching">
                            <div class="more-overlay">
                                <div class="more-content">
                                    <i class="fas fa-images"></i>
                                    <span class="more-count">+6</span>
                                    <span class="more-text">Show all photos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Features -->
                <div class="gallery-features">
                    <div class="feature-left">
                        <div class="photo-count">
                            <i class="fas fa-camera"></i>
                            <span>8 professional photos</span>
                        </div>
                        <div class="quality-badge">
                            <i class="fas fa-award"></i>
                            <span>High quality images</span>
                        </div>
                    </div>
                    <div class="feature-right">
                        <button class="gallery-action-btn" onclick="openGalleryLightbox()">
                            <i class="fas fa-expand-arrows-alt"></i>
                            View Gallery
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modern Gallery Lightbox -->
            <div class="gallery-lightbox" id="galleryLightbox">
                <div class="lightbox-backdrop" onclick="closeGalleryLightbox()"></div>
                <div class="lightbox-container">
                    <!-- Lightbox Header -->
                    <div class="lightbox-header">
                        <div class="header-left">
                            <h3>Sri Lanka Budget Tour Gallery</h3>
                            <span class="image-counter">
                                <span id="currentLightboxIndex">1</span> / <span id="totalLightboxImages">8</span>
                            </span>
                        </div>
                        <button class="close-lightbox" onclick="closeGalleryLightbox()">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <!-- Main Lightbox Image -->
                    <div class="lightbox-main">
                        <div class="main-image-wrapper">
                            <img src="image galary/sigiriya.jpg" alt="Gallery Image" id="lightboxMainImage">
                            <button class="nav-arrow nav-prev" onclick="navigateLightbox(-1)">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="nav-arrow nav-next" onclick="navigateLightbox(1)">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <!-- Image Info -->
                        <div class="image-info">
                            <div class="image-title-row">
                                <h4 id="lightboxImageTitle">Sigiriya Rock Fortress</h4>
                                <button class="fullscreen-toggle" id="fullscreenToggle" onclick="toggleFullscreenMode()">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                            <p id="lightboxImageDesc">Experience the UNESCO World Heritage Site with ancient royal palace, stunning views, and unique mirror wall.</p>
                        </div>
                    </div>

                    <!-- Thumbnail Navigation -->
                    <div class="lightbox-thumbnails">
                        <div class="thumbnail-item active" onclick="selectLightboxImage(0)">
                            <img src="image galary/sigiriya.jpg" alt="Sigiriya Rock Fortress">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(1)">
                            <img src="image galary/kandyy.jpg" alt="Temple of Sacred Tooth Relic">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(2)">
                            <img src="image galary/ella.jpg" alt="Ella Nine Arch Bridge">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(3)">
                            <img src="image galary/neteapl.jpg" alt="Tea Plantations">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(4)">
                            <img src="image galary/yala-beach.jpg" alt="Yala & Beach">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(5)">
                            <img src="image galary/yalanat.jpg" alt="Yala National Park">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(6)">
                            <img src="image galary/temp.jpg" alt="Buddhist Temples">
                        </div>
                        <div class="thumbnail-item" onclick="selectLightboxImage(7)">
                            <img src="image galary/Breathtaking_Mountain_Views.jpg" alt="Mountain Views">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        <!-- Package Overview -->
        <div class="package-overview-section">
            <h2>Package Overview</h2>
            <p class="overview-description">
                Join us for an unforgettable 10-day journey through Sri Lanka's diverse landscapes and cultural treasures. From ancient rock temples and majestic wild elephants to ocean adventures with whales, this tour offers a range of experiences. You'll embark on a thrilling Jeep safari, savour tea at its source, and relax on the pristine beaches of Mirissa. With a blend of cultural immersion, wildlife encounters, and beachside tranquillity, this itinerary is perfect for those seeking both adventure and relaxation in 10 Days Sri Lanka Tour Package.
            </p>

            <div class="package-highlights">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <h3>Ancient Rock Temples</h3>
                    <p>Visit Sigiriya Rock Fortress and Dambulla Cave Temple with breathtaking views, ancient frescoes and colorful murals dating back thousands of years</p>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <h3>Wildlife Safari Adventure</h3>
                    <p>Experience thrilling Jeep safari in Yala or Wilpattu parks to encounter elephants, leopards, deer, and diverse bird species in their natural habitats</p>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Tea Tasting & Plantation Tour</h3>
                    <p>Journey to Nuwara Eliya's lush tea estates, learn tea-making process and savour freshly brewed Ceylon tea where it's grown</p>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-whale"></i>
                    </div>
                    <h3>Whale Watching in Mirissa</h3>
                    <p>Set off on morning whale-watching cruise to spot blue whales, sperm whales, and playful dolphins in the Indian Ocean</p>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-umbrella-beach"></i>
                    </div>
                    <h3>Mirissa Beach Relaxation</h3>
                    <p>Unwind on golden sands perfect for sunbathing, swimming, surfing, and enjoy fresh seafood at beachside restaurants</p>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-dharmachakra"></i>
                    </div>
                    <h3>Cultural & Historical Sites</h3>
                    <p>Discover Temple of Tooth Relic in Kandy, traditional performances, and colonial streets of Galle Fort</p>
                </div>
            </div>
        </div>

        <!-- What Makes This Special Section -->
        <section class="special-features-section">
            <div class="container">
                <div class="section-header">
                    <h2>What Makes This Experience Unforgettable</h2>
                    <p>Join thousands of travelers who've discovered the magic of Sri Lanka</p>
                </div>

                <!-- Swiper Features Container -->
                <div class="swiper features-slider">
                    <div class="swiper-wrapper">
                        <!-- Feature 1 -->
                        <div class="swiper-slide">
                            <div class="feature-showcase-item">
                                <div class="feature-image">
                                    <img src="image galary/dambullacavetemple1.jpg" alt="Dambulla Cave Temple Complex">
                                    <div class="feature-badge">UNESCO Site</div>
                                </div>
                                <div class="feature-content">
                                    <div class="feature-icon">
                                        <i class="fas fa-temple"></i>
                                    </div>
                                    <h3>Ancient Dambulla Cave Temple</h3>
                                    <p>Explore the largest and best-preserved cave temple complex with 80 documented caves, stunning Buddha statues, and centuries-old murals dating back to 1st century BC</p>
                                    <div class="feature-stats">
                                        <span><i class="fas fa-star"></i> UNESCO World Heritage</span>
                                        <span><i class="fas fa-history"></i> 2000+ Years Old</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <!-- Feature 2 -->
                        <div class="swiper-slide">
                            <div class="feature-showcase-item">
                                <div class="feature-image">
                                    <img src="image galary/Tea plantation.jpg" alt="Nuwara Eliya Tea Plantations">
                                    <div class="feature-badge">Authentic</div>
                                </div>
                                <div class="feature-content">
                                    <div class="feature-icon">
                                    <i class="fas fa-leaf"></i>
                                    </div>
                                    <h3>Ceylon Tea Estate Experience</h3>
                                    <p>Journey through aromatic tea gardens in Nuwara Eliya, witness traditional tea-making process, and taste the world's finest Ceylon tea at its origin</p>
                                    <div class="feature-stats">
                                        <span><i class="fas fa-mountain"></i> Hill Country Views</span>
                                        <span><i class="fas fa-leaf"></i> Tea Tasting Experience</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="swiper-slide">
                            <div class="feature-showcase-item">
                                <div class="feature-image">
                                    <img src="image galary/yala2.jpg" alt="Yala National Park Wildlife">
                                    <div class="feature-badge">Wildlife</div>
                                </div>
                                <div class="feature-content">
                                    <div class="feature-icon">
                                        <i class="fas fa-paw"></i>
                                    </div>
                                    <h3>Yala Wildlife Safari Adventure</h3>
                                    <p>Experience Sri Lanka's most famous national park with the highest leopard density in the world, plus elephants, sloth bears, and over 215 bird species</p>
                                    <div class="feature-stats">
                                        <span><i class="fas fa-paw"></i> Leopard Capital</span>
                                        <span><i class="fas fa-binoculars"></i> 215+ Bird Species</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="swiper-slide">
                            <div class="feature-showcase-item">
                                <div class="feature-image">
                                    <img src="image galary/mirissaBeach.jpg" alt="Mirissa Whale Watching">
                                    <div class="feature-badge">Marine Life</div>
                                </div>
                                <div class="feature-content">
                                    <div class="feature-icon">
                                        <i class="fas fa-whale"></i>
                                    </div>
                                    <h3>Mirissa Whale Watching</h3>
                                    <p>Embark on an early morning whale watching cruise to spot magnificent blue whales, sperm whales, and playful dolphins in their natural habitat</p>
                                    <div class="feature-stats">
                                        <span><i class="fas fa-whale"></i> Blue Whale Spotting</span>
                                        <span><i class="fas fa-water"></i> Ocean Adventure</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 5 -->
                        <div class="swiper-slide">
                            <div class="feature-showcase-item">
                                <div class="feature-image">
                                    <img src="image galary/Galle Fort.jpg" alt="Galle Dutch Fort">
                                    <div class="feature-badge">Historical</div>
                                </div>
                                <div class="feature-content">
                                    <div class="feature-icon">
                                        <i class="fas fa-fort-awesome"></i>
                                    </div>
                                    <h3>Historic Galle Dutch Fort</h3>
                                    <p>Walk through cobblestone streets of this 17th-century Dutch fortification, explore lighthouse, ramparts, and colonial architecture overlooking the Indian Ocean</p>
                                    <div class="feature-stats">
                                        <span><i class="fas fa-star"></i> UNESCO Heritage</span>
                                        <span><i class="fas fa-lighthouse"></i> Ocean Views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Add pagination bullets -->
                    <div class="swiper-pagination"></div>
                    
                    <!-- Add navigation arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>

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
            <div class="quick-itinerary " style="margin-bottom: 6rem;">
                <h3>10-Day Sri Lanka Highlights Overview</h3>
                <div class="itinerary-overview-grid">
                    <div class="overview-day">
                        <div class="day-num">1</div>
                        <div class="day-info">
                            <h4>Negombo "Little Rome"</h4>
                            <p>Arrival, colonial architecture, fish market, lagoon exploration</p>
                        </div>
                    </div>
                    <div class="overview-day">
                        <div class="day-num">2-3</div>
                        <div class="day-info">
                            <h4>Sigiriya & Dambulla</h4>
                            <p>Ancient rock fortress climb, cave temple complex, UNESCO sites</p>
                        </div>
                    </div>
                    <div class="overview-day">
                        <div class="day-num">4</div>
                        <div class="day-info">
                            <h4>Kandy & Tea Country</h4>
                            <p>Royal Botanical Gardens, tea plantation tour, Ceylon tea tasting</p>
                        </div>
                    </div>
                    <div class="overview-day">
                        <div class="day-num">5</div>
                        <div class="day-info">
                            <h4>Yala Wildlife Safari</h4>
                            <p>Rawana Falls, Jeep safari, leopards and elephants spotting</p>
                        </div>
                    </div>
                    <div class="overview-day">
                        <div class="day-num">6-7</div>
                        <div class="day-info">
                            <h4>Mirissa Beach & Whales</h4>
                            <p>Whale watching cruise, beach relaxation, sea turtle hatchery</p>
                        </div>
                    </div>
                    <div class="overview-day">
                        <div class="day-num">8-10</div>
                        <div class="day-info">
                            <h4>Bentota, Galle & Departure</h4>
                            <p>Dutch Fort exploration, Colombo city tour, airport transfer</p>
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
                        <li><i class="fas fa-bed"></i> 7 nights 3-star hotel accommodation</li>
                        <li><i class="fas fa-utensils"></i> Daily breakfast and authentic Sri Lankan cuisine</li>
                        <li><i class="fas fa-car"></i> Private air-conditioned vehicle for all transfers</li>
                        <li><i class="fas fa-user-tie"></i> Professional English-speaking guide</li>
                        <li><i class="fas fa-paw"></i> Yala National Park safari experience</li>
                        <li><i class="fas fa-temple"></i> Temple visits and cultural site entry fees</li>
                        <li><i class="fas fa-ticket-alt"></i> All monument and attraction entry fees</li>
                        <li><i class="fas fa-headset"></i> 24/7 customer support and assistance</li>
                        <li><i class="fas fa-shield-alt"></i> Comprehensive travel insurance</li>
                        <li><i class="fas fa-train"></i> Scenic train ride from Kandy to Ella</li>
                    </ul>
                </div>
                <div class="exclusions-card">
                    <h3><i class="fas fa-times-circle"></i> What's Not Included</h3>
                    <ul class="exclusions-list">
                        <li><i class="fas fa-plane"></i> International flights to/from Colombo</li>
                        <li><i class="fas fa-utensils"></i> Lunch and dinner on some days</li>
                        <li><i class="fas fa-wallet"></i> Personal expenses and gratuities</li>
                        <li><i class="fas fa-cocktail"></i> Optional activities and excursions</li>
                        <li><i class="fas fa-camera"></i> Camera fees at certain attractions</li>
                        <li><i class="fas fa-tshirt"></i> Laundry and room service charges</li>
                        <li><i class="fas fa-gamepad"></i> Personal entertainment activities</li>
                        <li><i class="fas fa-wine-bottle"></i> Alcoholic beverages and drinks</li>
                        <li><i class="fas fa-shopping-bag"></i> Shopping and souvenirs</li>
                        <li><i class="fas fa-first-aid"></i> Travel insurance and medical expenses</li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Detailed Itinerary Section -->
    <section class="itinerary-section">
        <div class="container">
            <h2 class="section-heading">Detailed 10-Day Itinerary</h2>
            <div class="itinerary-timeline">
                
                <!-- Day 1 -->
                <div class="itinerary-day">
                    <div class="day-header">
                        <span class="day-number">01</span>
                        <h3>Arrival in Negombo "Little Rome"</h3>
                        <span class="day-duration">Arrival Day</span>
                    </div>
                    <div class="day-content">
                        <div class="day-schedule">
                            <div class="schedule-item">
                                <span class="time">Upon Arrival</span>
                                <div class="activity">
                                    <h4>Airport Pickup & Transfer</h4>
                                    <p>Meet our representative at Bandaranaike International Airport and transfer to Negombo</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">Afternoon</span>
                                <div class="activity">
                                    <h4>Negombo City Tour</h4>
                                    <p>Explore colonial architecture, visit fish market, and discover why it's called "Little Rome"</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">Evening</span>
                                <div class="activity">
                                    <h4>Negombo Lagoon</h4>
                                    <p>Sunset boat ride in the lagoon, traditional fishing village experience</p>
                                </div>
                            </div>
                        </div>
                        <p><strong>Overnight:</strong> Hotel in Negombo</p>
                    </div>
                </div>

                <!-- Day 2 -->
                <div class="itinerary-day">
                    <div class="day-header">
                        <span class="day-number">02</span>
                        <h3>Negombo to Sigiriya via Dambulla</h3>
                        <span class="day-duration">Travel & Exploration</span>
                    </div>
                    <div class="day-content">
                        <div class="day-schedule">
                            <div class="schedule-item">
                                <span class="time">8:00 AM</span>
                                <div class="activity">
                                    <h4>Departure to Dambulla</h4>
                                    <p>Journey to Cultural Triangle region (3-hour drive)</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">11:30 AM</span>
                                <div class="activity">
                                    <h4>Dambulla Cave Temple Complex</h4>
                                    <p>Explore 80 documented caves with ancient Buddhist murals and statues dating back to 1st century BC</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">2:00 PM</span>
                                <div class="activity">
                                    <h4>Transfer to Sigiriya</h4>
                                    <p>Check-in at hotel, leisure time to enjoy resort facilities</p>
                                </div>
                            </div>
                        </div>
                        <p><strong>Overnight:</strong> Hotel in Sigiriya</p>
                    </div>
                </div>

                <!-- Day 3 -->
                <div class="itinerary-day">
                    <div class="day-header">
                        <span class="day-number">03</span>
                        <h3>Sigiriya Rock Fortress & Minneriya Safari</h3>
                        <span class="day-duration">Adventure Day</span>
                    </div>
                    <div class="day-content">
                        <div class="day-schedule">
                            <div class="schedule-item">
                                <span class="time">6:00 AM</span>
                                <div class="activity">
                                    <h4>Sigiriya Rock Fortress Climb</h4>
                                    <p>Early morning climb to avoid crowds, explore frescoes, mirror wall, and summit palace ruins</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">11:00 AM</span>
                                <div class="activity">
                                    <h4>Rest & Lunch</h4>
                                    <p>Return to hotel for breakfast and relaxation</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">3:00 PM</span>
                                <div class="activity">
                                    <h4>Minneriya National Park Safari</h4>
                                    <p>Witness the famous elephant gathering where hundreds of elephants converge around the tank</p>
                                </div>
                            </div>
                        </div>
                        <p><strong>Overnight:</strong> Hotel in Sigiriya</p>
                    </div>
                </div>

                <!-- Day 4 -->
                <div class="itinerary-day">
                    <div class="day-header">
                        <span class="day-number">04</span>
                        <h3>Sigiriya to Kandy via Spice Garden</h3>
                        <span class="day-duration">Cultural Journey</span>
                    </div>
                    <div class="day-content">
                        <div class="day-schedule">
                            <div class="schedule-item">
                                <span class="time">9:00 AM</span>
                                <div class="activity">
                                    <h4>Departure to Kandy</h4>
                                    <p>Scenic drive through central hills</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">11:00 AM</span>
                                <div class="activity">
                                    <h4>Spice Garden Visit</h4>
                                    <p>Learn about Ceylon spices, traditional Ayurvedic treatments and cooking ingredients</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">3:00 PM</span>
                                <div class="activity">
                                    <h4>Kandy City Tour</h4>
                                    <p>Visit Temple of Sacred Tooth Relic, explore Kandy Lake, and local markets</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">6:00 PM</span>
                                <div class="activity">
                                    <h4>Cultural Dance Performance</h4>
                                    <p>Traditional Kandyan dance show featuring fire dancing and folk traditions</p>
                                </div>
                            </div>
                        </div>
                        <p><strong>Overnight:</strong> Hotel in Kandy</p>
                    </div>
                </div>

                <!-- Day 5 -->
                <div class="itinerary-day">
                    <div class="day-header">
                        <span class="day-number">05</span>
                        <h3>Kandy to Nuwara Eliya - Tea Country</h3>
                        <span class="day-duration">Hill Station Experience</span>
                    </div>
                    <div class="day-content">
                        <div class="day-schedule">
                            <div class="schedule-item">
                                <span class="time">9:00 AM</span>
                                <div class="activity">
                                    <h4>Royal Botanical Gardens</h4>
                                    <p>Visit Peradeniya Botanical Gardens with over 4,000 species of plants</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">11:30 AM</span>
                                <div class="activity">
                                    <h4>Journey to Nuwara Eliya</h4>
                                    <p>Scenic drive through tea plantations and mountain landscapes</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">2:00 PM</span>
                                <div class="activity">
                                    <h4>Tea Plantation & Factory Tour</h4>
                                    <p>Learn tea-making process, from plucking to packaging, and taste fresh Ceylon tea</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">4:00 PM</span>
                                <div class="activity">
                                    <h4>Nuwara Eliya City Tour</h4>
                                    <p>Explore "Little England" with colonial architecture, Gregory Lake, and Victoria Park</p>
                                </div>
                            </div>
                        </div>
                        <p><strong>Overnight:</strong> Hotel in Nuwara Eliya</p>
                    </div>
                </div>

                <!-- Day 6 -->
                <div class="itinerary-day">
                    <div class="day-header">
                        <span class="day-number">06</span>
                        <h3>Nuwara Eliya to Yala via Ella</h3>
                        <span class="day-duration">Scenic Journey</span>
                    </div>
                    <div class="day-content">
                        <div class="day-schedule">
                            <div class="schedule-item">
                                <span class="time">8:00 AM</span>
                                <div class="activity">
                                    <h4>Journey to Ella</h4>
                                    <p>Drive through tea estates and mountain scenery</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">10:00 AM</span>
                                <div class="activity">
                                    <h4>Nine Arch Bridge & Little Adam's Peak</h4>
                                    <p>Visit iconic railway bridge and hike to viewpoint for panoramic mountain views</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">1:00 PM</span>
                                <div class="activity">
                                    <h4>Rawana Falls</h4>
                                    <p>Stop at this beautiful waterfall cascade named after King Rawana from Ramayana</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">4:00 PM</span>
                                <div class="activity">
                                    <h4>Transfer to Yala</h4>
                                    <p>Check-in at safari lodge near Yala National Park</p>
                                </div>
                            </div>
                        </div>
                        <p><strong>Overnight:</strong> Safari Lodge near Yala</p>
                    </div>
                </div>

                <!-- Day 7 -->
                <div class="itinerary-day">
                    <div class="day-header">
                        <span class="day-number">07</span>
                        <h3>Yala National Park Safari</h3>
                        <span class="day-duration">Wildlife Adventure</span>
                    </div>
                    <div class="day-content">
                        <div class="day-schedule">
                            <div class="schedule-item">
                                <span class="time">6:00 AM</span>
                                <div class="activity">
                                    <h4>Morning Safari</h4>
                                    <p>Early morning game drive when animals are most active, highest chance to spot leopards</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">10:30 AM</span>
                                <div class="activity">
                                    <h4>Return & Breakfast</h4>
                                    <p>Back to lodge for hearty breakfast and rest</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">3:00 PM</span>
                                <div class="activity">
                                    <h4>Afternoon Safari</h4>
                                    <p>Second game drive to different zones, spot elephants, sloth bears, and 215+ bird species</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">6:30 PM</span>
                                <div class="activity">
                                    <h4>Sunset Views</h4>
                                    <p>Enjoy sunset over the park with wildlife photography opportunities</p>
                                </div>
                            </div>
                        </div>
                        <p><strong>Overnight:</strong> Safari Lodge near Yala</p>
                    </div>
                </div>

                <!-- Day 8 -->
                <div class="itinerary-day">
                    <div class="day-header">
                        <span class="day-number">08</span>
                        <h3>Yala to Mirissa Beach</h3>
                        <span class="day-duration">Coastal Paradise</span>
                    </div>
                    <div class="day-content">
                        <div class="day-schedule">
                            <div class="schedule-item">
                                <span class="time">8:00 AM</span>
                                <div class="activity">
                                    <h4>Departure to Mirissa</h4>
                                    <p>Journey to southern coast, one of Sri Lanka's most beautiful beaches</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">11:00 AM</span>
                                <div class="activity">
                                    <h4>Check-in & Beach Time</h4>
                                    <p>Hotel check-in, relax on golden sandy beaches</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">3:00 PM</span>
                                <div class="activity">
                                    <h4>Beach Activities</h4>
                                    <p>Swimming, sunbathing, beachside cafes, and water sports</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">6:00 PM</span>
                                <div class="activity">
                                    <h4>Sunset at Coconut Tree Hill</h4>
                                    <p>Iconic sunset views from this Instagram-famous spot</p>
                                </div>
                            </div>
                        </div>
                        <p><strong>Overnight:</strong> Beach Hotel in Mirissa</p>
                    </div>
                </div>

                <!-- Day 9 -->
                <div class="itinerary-day">
                    <div class="day-header">
                        <span class="day-number">09</span>
                        <h3>Whale Watching & Galle Fort</h3>
                        <span class="day-duration">Marine Life & Heritage</span>
                    </div>
                    <div class="day-content">
                        <div class="day-schedule">
                            <div class="schedule-item">
                                <span class="time">6:30 AM</span>
                                <div class="activity">
                                    <h4>Whale Watching Cruise</h4>
                                    <p>Early morning boat trip to spot blue whales, sperm whales, and dolphins</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">11:00 AM</span>
                                <div class="activity">
                                    <h4>Return & Breakfast</h4>
                                    <p>Back to shore for breakfast and recovery from sea adventure</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">2:00 PM</span>
                                <div class="activity">
                                    <h4>Galle Dutch Fort</h4>
                                    <p>Explore UNESCO World Heritage 17th-century fortification with lighthouse and ramparts</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">4:00 PM</span>
                                <div class="activity">
                                    <h4>Sea Turtle Hatchery</h4>
                                    <p>Visit turtle conservation center and learn about marine protection efforts</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">6:00 PM</span>
                                <div class="activity">
                                    <h4>Return to Mirissa</h4>
                                    <p>Final evening at beach, farewell dinner with local seafood</p>
                                </div>
                            </div>
                        </div>
                        <p><strong>Overnight:</strong> Beach Hotel in Mirissa</p>
                    </div>
                </div>

                <!-- Day 10 -->
                <div class="itinerary-day">
                    <div class="day-header">
                        <span class="day-number">10</span>
                        <h3>Departure via Colombo</h3>
                        <span class="day-duration">Final Day</span>
                    </div>
                    <div class="day-content">
                        <div class="day-schedule">
                            <div class="schedule-item">
                                <span class="time">9:00 AM</span>
                                <div class="activity">
                                    <h4>Departure to Colombo</h4>
                                    <p>Final journey along coastal highway to capital city</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">11:30 AM</span>
                                <div class="activity">
                                    <h4>Colombo City Tour</h4>
                                    <p>Visit Independence Square, Gangaramaya Temple, shopping at Pettah Market</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">2:00 PM</span>
                                <div class="activity">
                                    <h4>Last-minute Shopping</h4>
                                    <p>Buy souvenirs, Ceylon tea, and spices at duty-free or local markets</p>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <span class="time">4:00 PM</span>
                                <div class="activity">
                                    <h4>Airport Transfer</h4>
                                    <p>Transfer to Bandaranaike International Airport for departure</p>
                                </div>
                            </div>
                        </div>
                        <p><strong>End of Tour:</strong> Departure with unforgettable memories</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Customer Testimonials Section -->
    <!--<section class="testimonials-section">
        <div class="container ">
            <h2>What Our Customers Say</h2>
            <div class="testimonials-grid ">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-image">
                            <img src="images/img-1.jpg" alt="Customer">
                        </div>
                        <div class="customer-info">
                            <h4>Lisa K.</h4>
                            <span class="customer-location">Switzerland</span>
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
                        "Lishan was a great help with every step of the booking, available at all times to reply to our questions. We had a wonderful driver and guide SAMAN during our 8 day tour. He knew the best restaurants and helped us with everything we needed. Lishan selected the hotels carefully and the pickup/drop off was excellent. Thanks to Lishan and Saman for everything!"
                    </p>
                    <div class="testimonial-date">December 2023</div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-image">
                            <img src="images/img-2.jpg" alt="Customer">
                        </div>
                        <div class="customer-info">
                            <h4>Robert</h4>
                            <span class="customer-location">Poland</span>
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
                        "As a family of four, we came to Sri Lanka for 7 days tour. We needed everything organized from arrival to departure at Colombo airport. Our Polish friend recommended Ceylon Classic Tours. We visited Sigiriya, Kandy, Nuwara Eliya, Yala, Mirissa, then Galle. We had the best driver and very nice hotels. Some hotels even exceeded our expectations. I can highly recommend their services!"
                    </p>
                    <div class="testimonial-date">December 2023</div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-image">
                            <img src="images/img-3.jpg" alt="Customer">
                        </div>
                        <div class="customer-info">
                            <h4>Raj Patel</h4>
                            <span class="customer-location">London, UK</span>
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
                        balance of culture and nature. Sigiriya Rock Fortress was breathtaking, and the wildlife
                        safari was an incredible experience. Will definitely book again!"
                    </p>
                    <div class="testimonial-date">February 2024</div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Customer Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <h2>What Our Customers Say</h2>
        <!-- Swiper Testimonials Container -->
        <div class="swiper testimonials-swiper">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-image">
                                <img src="images/img-1.jpg" alt="Customer">
                            </div>
                            <div class="customer-info">
                                <h4>Lisa K.</h4>
                                <span class="customer-location">Switzerland</span>
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
                            "Lishan was a great help with every step of the booking, available at all times to reply to our questions. We had a wonderful driver and guide SAMAN during our 8 day tour. He knew the best restaurants and helped us with everything we needed. Lishan selected the hotels carefully and the pickup/drop off was excellent. Thanks to Lishan and Saman for everything!"
                        </p>
                        <div class="testimonial-date">December 2023</div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-image">
                                <img src="images/img-2.jpg" alt="Customer">
                            </div>
                            <div class="customer-info">
                                <h4>Robert</h4>
                                <span class="customer-location">Poland</span>
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
                            "As a family of four, we came to Sri Lanka for 7 days tour. We needed everything organized from arrival to departure at Colombo airport. Our Polish friend recommended Ceylon Classic Tours. We visited Sigiriya, Kandy, Nuwara Eliya, Yala, Mirissa, then Galle. We had the best driver and very nice hotels. Some hotels even exceeded our expectations. I can highly recommend their services!"
                        </p>
                        <div class="testimonial-date">December 2023</div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-image">
                                <img src="images/img-4.jpg" alt="Customer">
                            </div>
                            <div class="customer-info">
                                <h4>Emily Chen</h4>
                                <span class="customer-location">Singapore</span>
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
                            "Our 10-day trip across Sri Lanka was absolutely magical! The tea plantations in Nuwara Eliya took my breath away, and the elephant safari in Udawalawe was a dream come true. Our guide Chaminda was knowledgeable and attentive. Ceylon Classic Tours created a perfect balance of adventure, culture, and relaxation. Worth every penny!"
                        </p>
                        <div class="testimonial-date">March 2024</div>
                    </div>
                </div>
                <!-- Testimonial 4 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-image">
                                <img src="images/img-5.jpg" alt="Customer">
                            </div>
                            <div class="customer-info">
                                <h4>James & Sophie Miller</h4>
                                <span class="customer-location">Australia</span>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">
                            "Honeymooning in Sri Lanka was the best decision! Ceylon Classic Tours arranged a perfect romantic getaway for us. The private beach dinner in Bentota was unforgettable, and our villa in Ella had stunning mountain views. The only minor issue was one hotel being overbooked, but they quickly upgraded us to an even better place! Would definitely return for our anniversary."
                        </p>
                        <div class="testimonial-date">February 2024</div>
                    </div>
                </div>
                <!-- Testimonial 5 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-image">
                                <img src="images/img-6.jpg" alt="Customer">
                            </div>
                            <div class="customer-info">
                                <h4>Michael Torres</h4>
                                <span class="customer-location">United States</span>
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
                            "As a solo traveler and photography enthusiast, this tour exceeded my expectations! The ancient ruins of Polonnaruwa and the train ride through the highlands provided incredible photo opportunities. My guide knew all the best spots for sunrise shots at Sigiriya Rock. Ceylon Classic Tours customized my itinerary perfectly to focus on photography while experiencing authentic Sri Lankan culture."
                        </p>
                        <div class="testimonial-date">April 2024</div>
                    </div>
                    </div>
                
                <!-- Testimonial 6 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-image">
                                <img src="images/img-1.jpg" alt="Customer">
                            </div>
                            <div class="customer-info">
                                <h4>Anna & Thomas Schmidt</h4>
                                <span class="customer-location">Germany</span>
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
                            "We've traveled to many countries, but Sri Lanka with Ceylon Classic Tours was truly special. The attention to detail was remarkable – from traditional cooking classes in Kandy to a surprise birthday cake for my husband at our hotel in Colombo. Our guide Pradeep felt like family by the end of our trip. The cultural insights and hidden gems they showed us made this trip unforgettable."
                        </p>
                        <div class="testimonial-date">January 2024</div>
                    </div>
                </div>
                
                <!-- Testimonial 7 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-image">
                                <img src="images/img-4.jpg" alt="Customer">
                            </div>
                            <div class="customer-info">
                                <h4>Sarah Johnson</h4>
                                <span class="customer-location">Canada</span>
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
                            "Traveling as a family with teenagers can be challenging, but Ceylon Classic Tours created a perfect adventure for all of us. Our kids loved the white water rafting in Kitulgala and surfing lessons in Arugam Bay, while my husband and I enjoyed the cultural sites and Ayurvedic spa treatments. The eco-friendly accommodations they selected were impressive, and we appreciated their commitment to sustainable tourism."
                        </p>
                        <div class="testimonial-date">May 2024</div>
                    </div>
                </div>
                
                <!-- Testimonial 8 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-image">
                                <img src="images/img-5.jpg" alt="Customer">
                            </div>
                            <div class="customer-info">
                                <h4>Olivia Martinez</h4>
                                <span class="customer-location">Spain</span>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">
                            "When our flight was delayed by 6 hours, I was worried our entire trip would be affected. But Ceylon Classic Tours adjusted our itinerary seamlessly! They went above and beyond to ensure we didn't miss any highlights. The ancient city of Anuradhapura was fascinating, and the beach stay in Trincomalee was pure bliss. Their local connections meant we experienced authentic Sri Lankan hospitality everywhere we went."
                        </p>
                        <div class="testimonial-date">March 2024</div>
                    </div>
                </div>
            </div>
            
            <!-- Add pagination bullets -->
            <div class="swiper-pagination"></div>
            
            <!-- Add navigation arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
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
                    <p>Over a decade of expertise in organizing unforgettable Sri Lankan adventures and cultural experiences across the Pearl of the Indian Ocean.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>50,000+ Happy Travelers</h3>
                    <p>Join thousands of satisfied customers who have created lifelong memories exploring Sri Lanka's ancient heritage and natural wonders.</p>
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
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Exclusive Perks</h3>
                    <p>Enjoy complimentary upgrades, welcome gifts, and special access to unique experiences not available elsewhere.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple Location Section -->
    <section class="location-section">
        <div class="container">
            <div class="location-header">
                <h2>Where you'll be</h2>
                <p class="location-name">Sri Lanka, Pearl of the Indian Ocean</p>
            </div>

            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.636429084537!2d81.04621631478391!3d6.863074494988844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4618a1a9b7ad7%3A0x5a3b9a1b0c2d3e4f!2sElla%2C%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1634567890123!5m2!1sen!2slk"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>

                <div class="map-controls">
                    <button class="map-control-btn" onclick="openInMaps()" title="Open in Google Maps">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false">
                            <path d="m20.666 20.666 10 10"></path>
                            <path d="m24.0002 12.6668c0 6.2593-5.0741 11.3334-11.3334 11.3334-6.2592 0-11.3333-5.0741-11.3333-11.3334 0-6.2592 5.0741-11.3333 11.3333-11.3333 6.2593 0 11.3334 5.0741 11.3334 11.3333z" fill="none"></path>
                        </svg>
                    </button>
                    <button class="map-control-btn" onclick="toggleFullscreen()" title="Fullscreen">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false">
                            <g fill="none">
                                <path d="m14 29h-10.2c-.4418278 0-.8-.3581722-.8-.8v-10.2"></path>
                                <path d="m4 28 10-10"></path>
                                <g stroke-linejoin="round">
                                    <path d="m18 3h10c.5522847 0 1 .44771525 1 1v10"></path>
                                    <path d="m18 14 11-11"></path>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="location-description">
                <h3>About the area</h3>
                <p>Experience the breathtaking beauty of Sri Lanka, the Pearl of the Indian Ocean. This tropical paradise offers stunning beaches, ancient temples, lush tea plantations, and incredible wildlife. From the cultural triangle of Sigiriya to the pristine beaches of Mirissa, Sri Lanka is the perfect destination for culture enthusiasts and nature lovers alike.</p>

                <a href="https://en.wikipedia.org/wiki/Ella,_Sri_Lanka" target="_blank" class="show-more-btn">
                    <span>Show more</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false">
                        <path fill="none" d="m12 4 11.3 11.3a1 1 0 0 1 0 1.4L12 28"></path>
                    </svg>
                </a>
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

        // Modern Tour Gallery Functions
        let currentLightboxIndex = 0;

        const galleryData = [{
                src: 'image galary/sigiriya.jpg',
                title: 'Ancient Sigiriya Rock Fortress',
                description: 'Experience the magnificent ancient rock fortress and palace ruins of Sigiriya, a UNESCO World Heritage Site.'
            },
            {
                src: 'image galary/kandyy.jpg',
                title: 'Sacred Temple of Tooth Relic',
                description: 'Visit the most sacred Buddhist temple in Kandy, home to the tooth relic of Lord Buddha.'
            },
            {
                src: 'image galary/ella.jpg',
                title: 'Scenic Ella Nine Arch Bridge',
                description: 'Discover the iconic Nine Arch Bridge surrounded by lush tea plantations and misty mountains.'
            },
            {
                src: 'image galary/neteapl.jpg',
                title: 'Tea Plantation Paradise',
                description: 'Explore the rolling hills of tea plantations in Nuwara Eliya, the heart of Sri Lankan tea country.'
            },
            {
                src: 'image galary/yala-beach.jpg',
                title: 'Pristine Southern Beaches',
                description: 'Relax on the golden beaches of Sri Lanka\'s southern coast with crystal clear waters.'
            },
            {
                src: 'image galary/yalanat.jpg',
                title: 'Yala National Park Safari',
                description: 'Experience thrilling wildlife safari with leopards, elephants and diverse bird species.'
            },
            {
                src: 'image galary/Breathtaking_Mountain_Views.jpg',
                title: 'Breathtaking Mountain Views',
                description: 'Marvel at the stunning mountain landscapes and breathtaking vistas of Sri Lanka\'s hill country.'
            },
            {
                src: 'image galary/temp.jpg',
                title: 'Buddhist Temples',
                description: 'Explore the ancient Buddhist temples and experience the spiritual heritage of Sri Lanka.'
            }
        ];

        // Preload all gallery images for smoother transitions
        function preloadGalleryImages() {
            galleryData.forEach(imageData => {
                const img = new Image();
                img.src = imageData.src;
            });
        }

        // Run preload on page load
        window.addEventListener('load', preloadGalleryImages);

        function changeMainImage(element, imageSrc) {
            const mainImage = document.getElementById('mainGalleryImage');

            if (mainImage) {
                // Find the index of the clicked image
                const imageIndex = galleryData.findIndex(img => img.src === imageSrc);
                currentLightboxIndex = imageIndex !== -1 ? imageIndex : 0;

                // Smooth transition
                mainImage.style.opacity = '0.7';
                mainImage.style.transform = 'scale(0.98)';

                setTimeout(() => {
                    mainImage.src = imageSrc;
                    mainImage.style.opacity = '1';
                    mainImage.style.transform = 'scale(1)';
                }, 200);

                // Add click feedback
                element.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    element.style.transform = 'scale(1)';
                }, 150);
            }
        }

        function openGalleryLightbox() {
            const lightbox = document.getElementById('galleryLightbox');
            if (lightbox) {
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
                updateLightboxImage(currentLightboxIndex);

                // Smooth entrance
                setTimeout(() => {
                    lightbox.querySelector('.lightbox-container').style.transform = 'scale(1)';
                    lightbox.querySelector('.lightbox-container').style.opacity = '1';
                }, 50);
            }
        }

        function closeGalleryLightbox() {
            const lightbox = document.getElementById('galleryLightbox');
            if (lightbox) {
                lightbox.querySelector('.lightbox-container').style.transform = 'scale(0.95)';
                lightbox.querySelector('.lightbox-container').style.opacity = '0';

                setTimeout(() => {
                    lightbox.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }, 300);
            }
        }

        function updateLightboxImage(index) {
            const lightboxImage = document.getElementById('lightboxMainImage');
            const imageTitle = document.getElementById('lightboxImageTitle');
            const imageDesc = document.getElementById('lightboxImageDesc');
            const currentIndex = document.getElementById('currentLightboxIndex');
            const totalImages = document.getElementById('totalLightboxImages');
            const mainImageWrapper = document.querySelector('.main-image-wrapper');

            if (galleryData[index]) {
                const imageData = galleryData[index];

                // Update image with transition
                lightboxImage.style.opacity = '0.5';

                // Preload the new image to prevent layout shifts
                const preloadImage = new Image();
                preloadImage.onload = function() {
                    lightboxImage.src = imageData.src;
                    lightboxImage.style.opacity = '1';

                    // Maintain container stability during transition
                    if (mainImageWrapper) {
                        mainImageWrapper.style.minHeight = mainImageWrapper.offsetHeight + 'px';
                    }

                    if (imageTitle) imageTitle.textContent = imageData.title;
                    if (imageDesc) imageDesc.textContent = imageData.description;
                    if (currentIndex) currentIndex.textContent = index + 1;
                    if (totalImages) totalImages.textContent = galleryData.length;
                };
                preloadImage.src = imageData.src;
            }

            updateLightboxThumbnails(index);
        }

        function updateLightboxThumbnails(activeIndex) {
            const thumbnails = document.querySelectorAll('.lightbox-thumbnails .thumbnail-item');
            thumbnails.forEach((thumb, index) => {
                thumb.classList.toggle('active', index === activeIndex);

                // Scroll active thumbnail into view
                if (index === activeIndex) {
                    setTimeout(() => {
                        thumb.scrollIntoView({
                            behavior: 'smooth',
                            block: 'nearest',
                            inline: 'center'
                        });
                    }, 100);
                }
            });
        }

        function selectLightboxImage(index) {
            currentLightboxIndex = index;
            updateLightboxImage(index);
        }

        function navigateLightbox(direction) {
            currentLightboxIndex += direction;

            if (currentLightboxIndex >= galleryData.length) {
                currentLightboxIndex = 0;
            } else if (currentLightboxIndex < 0) {
                currentLightboxIndex = galleryData.length - 1;
            }

            updateLightboxImage(currentLightboxIndex);
        }

        // Keyboard navigation for lightbox
        document.addEventListener('keydown', function(e) {
            const lightbox = document.getElementById('galleryLightbox');
            if (lightbox && lightbox.classList.contains('active')) {
                switch (e.key) {
                    case 'ArrowLeft':
                        navigateLightbox(-1);
                        break;
                    case 'ArrowRight':
                        navigateLightbox(1);
                        break;
                    case 'Escape':
                        closeGalleryLightbox();
                        break;
                }
            }
        });

        // Touch swipe navigation for mobile devices
        function setupTouchNavigation() {
            const lightboxMain = document.querySelector('.lightbox-main');
            if (!lightboxMain) return;

            let touchStartX = 0;
            let touchEndX = 0;
            let lastTap = 0;

            lightboxMain.addEventListener('touchstart', function(e) {
                touchStartX = e.changedTouches[0].screenX;
            }, {
                passive: true
            });

            lightboxMain.addEventListener('touchend', function(e) {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();

                // Handle double tap for zoom
                const currentTime = new Date().getTime();
                const tapLength = currentTime - lastTap;

                if (tapLength < 300 && tapLength > 0) {
                    // Double tap detected
                    handleDoubleTap(e);
                    e.preventDefault();
                }
                lastTap = currentTime;
            }, {
                passive: false
            });

            function handleSwipe() {
                const minSwipeDistance = 50;
                const swipeDistance = touchEndX - touchStartX;

                if (Math.abs(swipeDistance) < minSwipeDistance) return;

                if (swipeDistance > 0) {
                    // Swiped right, go to previous
                    navigateLightbox(-1);
                } else {
                    // Swiped left, go to next
                    navigateLightbox(1);
                }
            }

            function handleDoubleTap(e) {
                const lightbox = document.getElementById('galleryLightbox');
                if (!lightbox) return;

                const img = document.getElementById('lightboxMainImage');
                const imgWrapper = img.closest('.main-image-wrapper');

                if (imgWrapper.classList.contains('zoomed')) {
                    // Reset zoom
                    imgWrapper.classList.remove('zoomed');
                    img.style.transform = 'scale(1)';
                    img.style.cursor = 'zoom-in';
                } else {
                    // Apply zoom
                    imgWrapper.classList.add('zoomed');
                    img.style.transform = 'scale(2)';
                    img.style.cursor = 'zoom-out';
                }
            }
        }

        // Initialize touch navigation when page loads
        window.addEventListener('load', setupTouchNavigation);

        // Fullscreen mode toggle
        function toggleFullscreenMode() {
            const lightbox = document.getElementById('galleryLightbox');
            const fullscreenBtn = document.getElementById('fullscreenToggle');
            const imageInfo = document.querySelector('.image-info');

            if (lightbox) {
                lightbox.classList.toggle('fullscreen-mode');

                // Update the icon
                if (fullscreenBtn) {
                    if (lightbox.classList.contains('fullscreen-mode')) {
                        fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i>';

                        // In fullscreen mode, show info on tap
                        const mainImageWrapper = document.querySelector('.main-image-wrapper');
                        if (mainImageWrapper) {
                            mainImageWrapper.addEventListener('click', toggleImageInfo);
                        }
                    } else {
                        fullscreenBtn.innerHTML = '<i class="fas fa-expand"></i>';

                        // Remove tap listener when exiting fullscreen
                        const mainImageWrapper = document.querySelector('.main-image-wrapper');
                        if (mainImageWrapper) {
                            mainImageWrapper.removeEventListener('click', toggleImageInfo);
                        }
                    }
                }
            }
        }

        // Toggle image info display in fullscreen mode
        function toggleImageInfo(e) {
            // Don't toggle if clicking on navigation arrows
            if (e.target.closest('.nav-arrow')) return;

            const imageInfo = document.querySelector('.gallery-lightbox.fullscreen-mode .image-info');
            if (imageInfo) {
                imageInfo.classList.toggle('show');
            }
        }

        // Enhanced Share Gallery Function
        function shareGallery() {
            if (navigator.share) {
                navigator.share({
                    title: 'Sri Lanka Budget Tour Package Gallery',
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

        // Open Ella, Sri Lanka location in Google Maps
        function openInMaps() {
            const ellaLocation = "https://www.google.com/maps/search/?api=1&query=Ella,+Sri+Lanka";
            window.open(ellaLocation, '_blank');
        }

        // Toggle fullscreen for map
        function toggleFullscreen() {
            const mapContainer = document.querySelector('.map-container');
            if (mapContainer) {
                if (!document.fullscreenElement) {
                    mapContainer.requestFullscreen();
                } else {
                    document.exitFullscreen();
                }
            }
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
                document.getElementById('packageSelect').value = 'Sri Lanka Budget Tour Package';
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
            
            // Show feedback button after user scrolls down
            const floatingFeedbackBtn = document.getElementById('floatingFeedbackBtn');
            if (floatingFeedbackBtn) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 300) {
                        floatingFeedbackBtn.classList.add('visible');
                    } else {
                        floatingFeedbackBtn.classList.remove('visible');
                    }
                });
            }
        });
        
        // Function to navigate to feedback page
        function goToFeedbackPage(event) {
            event.preventDefault();
            window.location.href = 'feedback.php';
        }
    </script>
    <script src="calculate.js"></script>
<!-- Swipper js-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <!-- Add this line before the closing </body> tag -->
    <script src="js/testimonials-swiper.js"></script>
    <script src="js/features-slider.js"></script>
    <script src="js/script.js"></script>
</body>

</html>