<?php
// Database setup script
$servername = "localhost";
$username = "tour_user";
$password = "TourUser@#2025"; // Using your password from Process_Booking.php
$dbname = "tour_user";


    // Create connection to the tour database
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // echo "Connected successfully to MySQL server<br>"; // Commented out for production use
    
?>
