<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Your Experience - Ceylon Classic Tours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/feedback-form-style.css"> 
    <!-- Iconscout Link  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <meta name="theme-color" content="#2c5530">
</head>
<body class="feedback-page">
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
    
    <!-- HTML Updated -->
    <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>
        <form action="">
            <input type="search" name="" placeholder="Search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div>

    <div class="feedback-container">
        <div class="booking-form-wrapper feedback-form-wrapper">
            <div class="booking-form-header">
                <h2>Share Your Adventure Experience</h2>
                <p>Your feedback helps us create even better tours. Thank you for sharing your experience with Ceylon Classic Tours.</p>
            </div>
            
            <form id="feedbackForm" class="booking-form" action="process_feedback.php" method="POST">
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
                        <input type="tel" id="phone" name="phone" placeholder="Your contact number">
                    </div>
                    
                    <div class="form-group">
                        <label for="tourPackage">
                            <i class="fas fa-map-marked-alt"></i>
                            Tour Package
                        </label>
                        <select id="tourPackage" name="tourPackage" required>
                            <option value="">-- Select the tour package --</option>
                            <option value="Highlights of Sri Lanka – 10 Days">Highlights of Sri Lanka – 10 Days</option>
                            <option value="Highlights of Sri Lanka 5 Days">Highlights of Sri Lanka 5 Days</option>
                            <option value="Sri Lanka 9 Day Tour Package">Sri Lanka 9 Day Tour Package</option>
                            <option value="Sri Lanka Budget Tour">Sri Lanka Budget Tour</option>
                            <option value="Sri Lankan Heritage Tour">Sri Lankan Heritage Tour</option>
                            <option value="Sri Lanka Beach Holiday">Sri Lanka Beach Holiday</option>
                            <option value="Yala Safari Adventure">Yala Safari Adventure</option>
                            <option value="Water Rafting Experience">Water Rafting Experience</option>
                            <option value="Surfing Adventure">Surfing Adventure</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="travelDate">
                            <i class="fas fa-calendar-alt"></i>
                            When did you travel with us?
                        </label>
                        <input type="date" id="travelDate" name="travelDate" required>
                    </div>
                    
                    <div class="form-group rating-container">
                        <label>
                            <i class="fas fa-star"></i>
                            Overall Experience Rating
                        </label>
                        <div class="star-rating">
                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                        </div>
                    </div>
                </div>
                
                <div class="rating-summary">
                    <h3 style="font-size:1.6rem; font-weight:bold; color:#2c3e50; margin-bottom:15px;">
                        Please Rate These Aspects of Your Tour
                    </h3>
                    
                    <div class="rating-categories">
                        <div class="rating-category">
                            <div class="rating-category-title">Service Quality</div>
                            <div class="category-stars" data-name="service_rating">
                                <i class="far fa-star" data-value="1"></i>
                                <i class="far fa-star" data-value="2"></i>
                                <i class="far fa-star" data-value="3"></i>
                                <i class="far fa-star" data-value="4"></i>
                                <i class="far fa-star" data-value="5"></i>
                            </div>
                            <input type="hidden" name="service_rating" value="0">
                        </div>
                        
                        <div class="rating-category">
                            <div class="rating-category-title">Value for Money</div>
                            <div class="category-stars" data-name="value_rating">
                                <i class="far fa-star" data-value="1"></i>
                                <i class="far fa-star" data-value="2"></i>
                                <i class="far fa-star" data-value="3"></i>
                                <i class="far fa-star" data-value="4"></i>
                                <i class="far fa-star" data-value="5"></i>
                            </div>
                            <input type="hidden" name="value_rating" value="0">
                        </div>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="positive-feedback">
                        <i class="fas fa-heart"></i>
                        What did you love the most about your tour?
                    </label>
                    <textarea id="positive-feedback" name="positive_feedback" rows="4" placeholder="e.g., The amazing guide, the beautiful scenery in Ella, the delicious food..."></textarea>
                </div>

                <div class="form-group full-width">
                    <label for="improvement-feedback">
                        <i class="fas fa-tools"></i>
                        Is there anything we could improve?
                    </label>
                    <textarea id="improvement-feedback" name="improvement_feedback" rows="4" placeholder="Your suggestions are valuable to us!"></textarea>
                </div>
                
                <div class="form-group full-width custom-checkbox">
                    <input type="checkbox" id="share-permission" name="share_permission" value="yes">
                    <label for="share-permission">I'm happy for my feedback (with my first name) to be used as a testimonial on your website.</label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="submit-feedback">
                        <i class="fas fa-paper-plane"></i>
                        Submit Your Feedback
                    </button>
                </div>
            </form>
            
            <div id="feedbackMessage" class="feedback-success">
                <div class="success-icon"><i class="fas fa-check-circle"></i></div>
                <h3 class="success-title">Thank You for Your Feedback!</h3>
                <p class="success-message">Your insights are invaluable to us. We appreciate you taking the time to share your experience and help us improve our tours.</p>
                <a href="index.html" class="return-button">
                    <i class="fas fa-home"></i> Return to Home
                </a>
            </div>
        </div>
    </div>
    
    <!-- Footer Section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="index.html#home"><i class="fas fa-angle-right"></i>home</a>
                <a href="index.html#category"><i class="fas fa-angle-right"></i>Adventures</a>
                <a href="index.html#packages"><i class="fas fa-angle-right"></i>packages</a>
                <a href="index.html#contact"><i class="fas fa-angle-right"></i>contact</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+94763936557"> <i class="fas fa-phone"></i>+94 76 393 6557</a>
                <a href=https://www.google.com/maps/search/?api=1&query=59%2F58+Hanthana+Gemunu+Mawatha,+Kandy,+Sri+Lanka" target="_blank"><i class="fas fa-map"></i>59/58 Hanthana Gemunu Mawatha Kandy<a>
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
                <a href=https://www.google.com/maps/search/?api=1&query=Apt+4+M.J.s+Diner+Cloon+Moor,+Tralee,+V92T975" target="_blank"><i class="fab fa-map"></i>Apt 4 M.J.s Diner Cloon Moor, Tralee, V92T975</a>
                <a href="mailto: lishan@ceylonclassictours.com"><i class="fas fa-envelope"></i>lishan@ceylonclassictours.com</a>
            </div>
        </div>
        <div class="credit">@ 2025 Ceylon Classic Tours. All rights Reserved.<br>Designed & Developed by <span>PixAll Designs</span></div>
    </section>

    <!-- Scripts -->
    <script src="js/script.js"></script>
    <script src="js/feedback-form.js"></script>
</body>
</html>