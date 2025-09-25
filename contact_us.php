<?php
// contact_us.php - Enhanced Contact Form Handler

// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize and validate input data
    $name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? trim(htmlspecialchars($_POST['phone'])) : '';
    $subject = isset($_POST['subject']) ? trim(htmlspecialchars($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : '';
    $newsletter = isset($_POST['newsletter']) ? 'Yes' : 'No';
    
    // Validation
    $errors = array();
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        
        // Email configuration
        $to = "info@ceylonclassictours.com"; // Change this to your email
        $email_subject = "New Contact Form Submission: " . ($subject ?: "General Inquiry");
        
        // Email body
        $email_body = "You have received a new message from your website contact form.\n\n";
        $email_body .= "Here are the details:\n\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Phone: $phone\n";
        $email_body .= "Subject: $subject\n";
        $email_body .= "Newsletter Subscription: $newsletter\n\n";
        $email_body .= "Message:\n$message\n";
        
        // Email headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Send email
        if (mail($to, $email_subject, $email_body, $headers)) {
            $success_message = "Thank you! Your message has been sent successfully. We'll get back to you within 24 hours.";
            
            // Optional: Save to database
            // saveToDatabase($name, $email, $phone, $subject, $message, $newsletter);
            
        } else {
            $error_message = "Sorry, there was an error sending your message. Please try again later or contact us directly.";
        }
        
    } else {
        $error_message = implode("<br>", $errors);
    }
    
    // Redirect back to contact form with message
    $redirect_url = "index.html#contact";
    if (isset($success_message)) {
        $redirect_url .= "?success=" . urlencode($success_message);
    } elseif (isset($error_message)) {
        $redirect_url .= "?error=" . urlencode($error_message);
    }
    
    header("Location: $redirect_url");
    exit();
    
} else {
    // If not POST request, redirect to home page
    header("Location: index.html");
    exit();
}

// Optional: Function to save data to database
function saveToDatabase($name, $email, $phone, $subject, $message, $newsletter) {
    // Database connection parameters
    $servername = "localhost";
    $username = "your_db_username";
    $password = "your_db_password";
    $dbname = "your_database_name";
    
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO contact_messages (name, email, phone, subject, message, newsletter, created_at) 
                VALUES (:name, :email, :phone, :subject, :message, :newsletter, NOW())";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':subject' => $subject,
            ':message' => $message,
            ':newsletter' => $newsletter
        ]);
        
        return true;
        
    } catch(PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        return false;
    }
}
?>