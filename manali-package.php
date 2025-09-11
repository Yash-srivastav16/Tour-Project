<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manali Adventure Package - Ceylon Classic Tours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="css/package-details.css">
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

    <!-- Package Hero Section -->
    <section class="package-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="index.html#packages">Packages</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>Manali Adventure</span>
            </div>
            <h1>Manali Adventure Package</h1>
            <p>Experience the breathtaking beauty of the Himalayas in the stunning hill station of Manali</p>
            <div class="hero-stats">
                <div class="stat">
                    <i class="fas fa-calendar-alt"></i>
                    <span>6 Days / 5 Nights</span>
                </div>
                <div class="stat">
                    <i class="fas fa-users"></i>
                    <span>2-8 People</span>
                </div>
                <div class="stat">
                    <i class="fas fa-star"></i>
                    <span>4.8/5 Rating</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Package Details Main Content -->
    <main class="package-main">
        <div class="container">
            <div class="package-content">
                <!-- Package Overview -->
                <section class="package-overview">
                    <div class="overview-header">
                        <h2>Package Overview</h2>
                        <div class="price-tag">
                            <span class="original-price">₹25,000</span>
                            <span class="current-price">₹18,999</span>
                            <span class="per-person">per person</span>
                        </div>
                    </div>
                    
                    <div class="overview-content">
                        <p>Discover the enchanting beauty of Manali, nestled in the heart of the Himalayas. This comprehensive 6-day package takes you through snow-capped mountains, lush valleys, ancient temples, and adventure activities that will create memories to last a lifetime.</p>
                        
                        <div class="highlights-grid">
                            <div class="highlight-item">
                                <i class="fas fa-mountain"></i>
                                <h4>Himalayan Views</h4>
                                <p>Stunning panoramic views of snow-capped peaks</p>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-skiing"></i>
                                <h4>Adventure Sports</h4>
                                <p>Paragliding, river rafting, and trekking</p>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-spa"></i>
                                <h4>Hot Springs</h4>
                                <p>Relaxing natural hot water springs</p>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-camera"></i>
                                <h4>Scenic Beauty</h4>
                                <p>Picture-perfect landscapes and valleys</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Package Gallery -->
                <section class="package-gallery">
                    <h2>Photo Gallery</h2>
                    <div class="gallery-grid">
                        <div class="gallery-main">
                            <img src="images/category-1.jpg" alt="Manali Mountains" id="mainImage">
                        </div>
                        <div class="gallery-thumbnails">
                            <img src="images/category-1.jpg" alt="Manali View 1" class="thumbnail active" onclick="changeImage(this)">
                            <img src="images/category-2.jpg" alt="Manali View 2" class="thumbnail" onclick="changeImage(this)">
                            <img src="images/category-3.jpg" alt="Manali View 3" class="thumbnail" onclick="changeImage(this)">
                            <img src="images/category-4.jpg" alt="Manali View 4" class="thumbnail" onclick="changeImage(this)">
                            <img src="images/img-1.jpg" alt="Adventure Activities" class="thumbnail" onclick="changeImage(this)">
                            <img src="images/img-2.jpg" alt="Local Culture" class="thumbnail" onclick="changeImage(this)">
                        </div>
                    </div>
                </section>

                <!-- Detailed Itinerary -->
                <section class="itinerary-section">
                    <h2>Detailed Itinerary</h2>
                    <div class="itinerary-timeline">
                        <div class="itinerary-day">
                            <div class="day-number">01</div>
                            <div class="day-content">
                                <h3>Arrival in Manali</h3>
                                <p><strong>Activities:</strong> Airport/Bus stand pickup, hotel check-in, local sightseeing</p>
                                <ul>
                                    <li>Pick up from Kullu Airport or Manali Bus Stand</li>
                                    <li>Check-in to your hotel and freshen up</li>
                                    <li>Visit Hadimba Devi Temple</li>
                                    <li>Explore Mall Road and local markets</li>
                                    <li>Welcome dinner with local cuisine</li>
                                </ul>
                                <p><strong>Overnight:</strong> Hotel in Manali</p>
                            </div>
                        </div>

                        <div class="itinerary-day">
                            <div class="day-number">02</div>
                            <div class="day-content">
                                <h3>Manali Local Sightseeing</h3>
                                <p><strong>Activities:</strong> Temple visits, nature walks, cultural experiences</p>
                                <ul>
                                    <li>Visit Manu Temple and learn about local legends</li>
                                    <li>Explore Vashisht Hot Springs</li>
                                    <li>Walk through Old Manali village</li>
                                    <li>Visit Tibetan Monastery</li>
                                    <li>Evening at leisure on Mall Road</li>
                                </ul>
                                <p><strong>Overnight:</strong> Hotel in Manali</p>
                            </div>
                        </div>

                        <div class="itinerary-day">
                            <div class="day-number">03</div>
                            <div class="day-content">
                                <h3>Solang Valley Adventure</h3>
                                <p><strong>Activities:</strong> Adventure sports and mountain activities</p>
                                <ul>
                                    <li>Early morning drive to Solang Valley</li>
                                    <li>Paragliding experience (weather permitting)</li>
                                    <li>Cable car ride with panoramic views</li>
                                    <li>Zorbing and ATV rides</li>
                                    <li>Lunch at valley-view restaurant</li>
                                    <li>Photography session at scenic spots</li>
                                </ul>
                                <p><strong>Overnight:</strong> Hotel in Manali</p>
                            </div>
                        </div>

                        <div class="itinerary-day">
                            <div class="day-number">04</div>
                            <div class="day-content">
                                <h3>Rohtang Pass Excursion</h3>
                                <p><strong>Activities:</strong> High altitude experience and snow activities</p>
                                <ul>
                                    <li>Early morning departure to Rohtang Pass (subject to permits)</li>
                                    <li>Experience snow activities (seasonal)</li>
                                    <li>Visit to Gulaba and Kothi villages</li>
                                    <li>Lunch with mountain views</li>
                                    <li>Photography at 13,050 feet altitude</li>
                                    <li>Return to Manali by evening</li>
                                </ul>
                                <p><strong>Overnight:</strong> Hotel in Manali</p>
                            </div>
                        </div>

                        <div class="itinerary-day">
                            <div class="day-number">05</div>
                            <div class="day-content">
                                <h3>Kasol and Tosh Village</h3>
                                <p><strong>Activities:</strong> Hippie culture and mountain villages</p>
                                <ul>
                                    <li>Drive to Kasol (Mini Israel of India)</li>
                                    <li>Explore the unique Israeli culture</li>
                                    <li>Trek to Tosh Village</li>
                                    <li>Interact with local Himachali people</li>
                                    <li>Enjoy authentic Israeli and local cuisine</li>
                                    <li>Return to Manali</li>
                                </ul>
                                <p><strong>Overnight:</strong> Hotel in Manali</p>
                            </div>
                        </div>

                        <div class="itinerary-day">
                            <div class="day-number">06</div>
                            <div class="day-content">
                                <h3>Departure</h3>
                                <p><strong>Activities:</strong> Last-minute shopping and departure</p>
                                <ul>
                                    <li>Hotel check-out and luggage arrangement</li>
                                    <li>Visit to local handicraft markets</li>
                                    <li>Purchase souvenirs and local products</li>
                                    <li>Transfer to airport/bus stand</li>
                                    <li>Departure with beautiful memories</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Inclusions & Exclusions -->
                <section class="inclusions-section">
                    <div class="inclusions-grid">
                        <div class="inclusions">
                            <h3><i class="fas fa-check-circle"></i> What's Included</h3>
                            <ul>
                                <li>5 nights accommodation in 3-star hotels</li>
                                <li>Daily breakfast and dinner</li>
                                <li>All transfers and sightseeing by private vehicle</li>
                                <li>Professional tour guide</li>
                                <li>Paragliding experience in Solang Valley</li>
                                <li>Rohtang Pass permits and transfers</li>
                                <li>Entry fees to temples and monuments</li>
                                <li>24/7 customer support</li>
                                <li>Travel insurance</li>
                            </ul>
                        </div>
                        <div class="exclusions">
                            <h3><i class="fas fa-times-circle"></i> What's Not Included</h3>
                            <ul>
                                <li>Airfare/train tickets to and from Manali</li>
                                <li>Lunch during sightseeing days</li>
                                <li>Personal expenses and tips</li>
                                <li>Adventure activities not mentioned</li>
                                <li>Camera fees at monuments</li>
                                <li>Laundry and room service</li>
                                <li>Extra activities during free time</li>
                                <li>Alcoholic beverages</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Booking Sidebar -->
            <aside class="booking-sidebar">
                <div class="booking-card">
                    <div class="price-section">
                        <div class="price-display">
                            <span class="from">From</span>
                            <span class="price">₹18,999</span>
                            <span class="per-person">per person</span>
                        </div>
                        <div class="discount-badge">Save 24%</div>
                    </div>

                    <div class="booking-form">
                        <form action="process_booking.php" method="POST">
                            <input type="hidden" name="packageName" value="Manali Adventure Package">
                            <input type="hidden" name="packagePrice" value="18999">
                            
                            <div class="form-group">
                                <label><i class="fas fa-calendar"></i> Check-in Date</label>
                                <input type="date" name="checkInDate" required>
                            </div>
                            
                            <div class="form-group">
                                <label><i class="fas fa-users"></i> Travelers</label>
                                <select name="travelers" required>
                                    <option value="">Select travelers</option>
                                    <option value="1">1 Person</option>
                                    <option value="2">2 People</option>
                                    <option value="3">3 People</option>
                                    <option value="4">4 People</option>
                                    <option value="5">5 People</option>
                                    <option value="6">6 People</option>
                                    <option value="7">7 People</option>
                                    <option value="8">8 People</option>
                                </select>
                            </div>

                            <div class="total-price">
                                <span>Total: ₹<span id="totalPrice">18999</span></span>
                            </div>

                            <button type="submit" class="book-now-btn">
                                <i class="fas fa-credit-card"></i>
                                Book Now
                            </button>
                        </form>
                    </div>

                    <div class="contact-info">
                        <h4>Need Help?</h4>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+91 98765 43210</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>info@ceylonclassictours.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp Support</span>
                        </div>
                    </div>

                    <div class="trust-indicators">
                        <div class="trust-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Secure Booking</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-medal"></i>
                            <span>Best Price Guarantee</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-undo"></i>
                            <span>Free Cancellation</span>
                        </div>
                    </div>
                </div>

                <!-- Customer Reviews -->
                <div class="reviews-section">
                    <h3>Customer Reviews</h3>
                    <div class="review-rating">
                        <span class="rating-score">4.8</span>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="review-count">124 reviews</span>
                    </div>

                    <div class="review-item">
                        <div class="reviewer-info">
                            <img src="images/img-1.jpg" alt="Reviewer" class="reviewer-avatar">
                            <div class="reviewer-details">
                                <h5>Priya Sharma</h5>
                                <span>Mumbai, India</span>
                            </div>
                        </div>
                        <div class="review-content">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>"Amazing experience! The views were breathtaking and the adventure activities were well organized. Highly recommend!"</p>
                        </div>
                    </div>

                    <div class="review-item">
                        <div class="reviewer-info">
                            <img src="images/img-2.jpg" alt="Reviewer" class="reviewer-avatar">
                            <div class="reviewer-details">
                                <h5>Rahul Kumar</h5>
                                <span>Delhi, India</span>
                            </div>
                        </div>
                        <div class="review-content">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p>"Great package with excellent service. The hotel was comfortable and the guide was very knowledgeable."</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>

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
    <script>
        // Gallery Image Change Function
        function changeImage(thumbnail) {
            const mainImage = document.getElementById('mainImage');
            const thumbnails = document.querySelectorAll('.thumbnail');
            
            // Remove active class from all thumbnails
            thumbnails.forEach(thumb => thumb.classList.remove('active'));
            
            // Add active class to clicked thumbnail
            thumbnail.classList.add('active');
            
            // Change main image source
            mainImage.src = thumbnail.src;
            mainImage.alt = thumbnail.alt;
        }

        // Calculate total price based on travelers
        document.querySelector('select[name="travelers"]').addEventListener('change', function() {
            const travelers = parseInt(this.value) || 1;
            const basePrice = 18999;
            const totalPrice = basePrice * travelers;
            document.getElementById('totalPrice').textContent = totalPrice.toLocaleString();
        });

        // Set minimum date to today
        document.querySelector('input[name="checkInDate"]').min = new Date().toISOString().split('T')[0];
    </script>
</body>

</html>
