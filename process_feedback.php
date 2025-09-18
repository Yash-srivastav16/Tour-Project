<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Set error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection from setup_database.php
require_once 'setup_database.php';

// Check if connection from setup_database.php is established
if (!isset($conn) || $conn->connect_error) {
    die(json_encode([
        'success' => false, 
        'message' => 'Connection failed: Database connection not established'
    ]));
}

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

// Load email configuration
$emailConfig = require 'email_config.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data to match all table fields
    $name = $_POST['fullName'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $tourPackage = $_POST['tourPackage'] ?? '';
    $travelDate = $_POST['travelDate'] ?? date('Y-m-d');
    $rating = isset($_POST['rating']) ? (int)$_POST['rating'] : 0;
    $serviceRating = isset($_POST['service_rating']) ? (int)$_POST['service_rating'] : 0;
    $valueRating = isset($_POST['value_rating']) ? (int)$_POST['value_rating'] : 0;
    $positiveFeedback = $_POST['positive_feedback'] ?? '';
    $improvementFeedback = $_POST['improvement_feedback'] ?? '';
    $sharePermission = isset($_POST['share_permission']) ? 1 : 0;
    
    try {
        // Insert data into database using the full table structure
        $sql = "INSERT INTO customer_feedback (name, email, phone, tour_package, travel_date, 
                rating, service_rating, value_rating, positive_feedback, improvement_feedback, 
                share_permission, created_at)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
                
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            throw new Exception("Error preparing statement: " . $conn->error);
        }
        
        $stmt->bind_param("sssssiiissi", 
            $name, $email, $phone, $tourPackage, $travelDate, $rating, 
            $serviceRating, $valueRating, $positiveFeedback, $improvementFeedback, $sharePermission);
            
        // Execute the statement
        $success = $stmt->execute();
        
        if ($success) {
            // Send automatic thank you email to user
            try {
                // Create a new PHPMailer instance
                $mail = new PHPMailer(true);
                
                // SMTP Settings
                $mail->isSMTP();
                $mail->Host       = $emailConfig['smtp_host'];
                $mail->SMTPAuth   = true;
                $mail->Username   = $emailConfig['smtp_username'];
                $mail->Password   = $emailConfig['smtp_password'];
                $mail->SMTPSecure = $emailConfig['smtp_secure'];
                $mail->Port       = $emailConfig['smtp_port'];
                
                // Recipients
                $mail->setFrom($emailConfig['from_email'], $emailConfig['from_name']);
                $mail->addAddress($email, $name);
                $mail->addReplyTo($emailConfig['reply_to'], $emailConfig['from_name']);
                
                // Star rating for email display
                $starRating = str_repeat('★', $rating) . str_repeat('☆', 5-$rating);
                
                // Email Content
                $mail->isHTML(true);
                $mail->Subject = 'Thank You for Your Feedback - Tour.com';
                $mail->Body = '
                <!DOCTYPE html>
                <html>
                <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            line-height: 1.6;
                            color: #333;
                        }
                        .email-container {
                            max-width: 600px;
                            margin: 0 auto;
                            padding: 20px;
                            background-color: #f8f9fa;
                            border-radius: 10px;
                        }
                        .header {
                            background-color: #2c5530;
                            color: white;
                            padding: 20px;
                            text-align: center;
                            border-radius: 8px 8px 0 0;
                        }
                        .content {
                            padding: 20px;
                            background-color: white;
                            border-radius: 0 0 8px 8px;
                        }
                        .footer {
                            text-align: center;
                            margin-top: 20px;
                            font-size: 12px;
                            color: #666;
                        }
                        .stars {
                            color: #ff6b35;
                            font-size: 20px;
                            letter-spacing: 5px;
                        }
                        .button {
                            display: inline-block;
                            background-color: #2c5530;
                            color: white !important;
                            padding: 10px 20px;
                            text-decoration: none;
                            border-radius: 5px;
                            margin-top: 15px;
                        }
                        .social-links {
                            margin-top: 15px;
                        }
                        .social-links a {
                            margin: 0 10px;
                            color: #2c5530;
                            text-decoration: none;
                        }
                    </style>
                </head>
                <body>
                    <div class="email-container">
                        <div class="header">
                            <h1>Thank You for Your Feedback!</h1>
                        </div>
                        <div class="content">
                            <p>Dear ' . htmlspecialchars($name) . ',</p>
                            
                            <p>Thank you for sharing your experience with us about the <strong>' . htmlspecialchars($tourPackage) . '</strong>. We value your feedback and will use it to improve our services.</p>
                            
                            <p>Your rating: <span class="stars">' . $starRating . '</span></p>
                            
                            <p>At Tour.com, we strive to provide memorable travel experiences, and your insights are important to us. We\'ve shared your comments with our team to enhance future adventures.</p>
                            
                            <p>We hope to welcome you on another journey soon!</p>
                            
                            <div style="text-align: center;">
                                <a href="index.html" class="button">Explore More Tours</a>
                            </div>
                            
                            <p>Best regards,<br>
                            The Tour.com Team</p>
                            
                            <div class="social-links">
                                <p>Follow us:</p>
                                <a href="https://www.facebook.com">Facebook</a> |
                                <a href="https://www.instagram.com">Instagram</a> |
                                <a href="https://www.youtube.com">YouTube</a>
                            </div>
                        </div>
                        <div class="footer">
                            <p>&copy; 2025 Tour.com. All rights reserved.</p>
                            <p>This is an automated response. Please don\'t reply to this email.</p>
                        </div>
                    </div>
                </body>
                </html>
                ';
                
                // Plain text version for non-HTML mail clients
                $mail->AltBody = "
                    Thank You for Your Feedback!
                    
                    Dear {$name},
                    
                    Thank you for taking the time to share your experience with us about your recent {$tourPackage} tour. Your feedback is incredibly valuable and helps us continue to improve our services.
                    
                    We appreciate your rating of: {$rating}/5
                    
                    At Tour.com, we are committed to providing exceptional travel experiences, and your insights help us achieve that goal. Your comments have been shared with our team and will be used to enhance our future tours.
                    
                    We hope to welcome you on another adventure with us soon!
                    
                    Best regards,
                    The Tour.com Team
                    
                    © 2025 Tour.com. All rights reserved.
                    This is an automated response, please do not reply to this email.
                ";
                
                $mail->send();
                // Email sent successfully, continue with JSON response
            } catch (Exception $e) {
                // Log email error but continue with success response to user
                error_log("Failed to send thank you email: " . $mail->ErrorInfo);
                // We don't return the error to the user, as the feedback was still saved successfully
            }
            
            // AJAX response
            header('Content-Type: application/json');
            echo json_encode([
                'success' => true, 
                'message' => 'Thank you for your feedback!',
            ]);
        } else {
            header('Content-Type: application/json');
            echo json_encode([
                'success' => false, 
                'message' => 'Error saving feedback: ' . $conn->error
            ]);
        }
        
        // Close statement
        $stmt->close();
        
    } catch (Exception $e) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false, 
            'message' => 'Error: ' . $e->getMessage()
        ]);
    }
    
    // Close connection
    $conn->close();
    exit;
}

// The customer_feedback table should be already created in the database
// via the SQL import file (customer_feedback_table.sql)

// If not POST request, redirect to feedback page
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: feedback.php");
    exit;
}
?>
