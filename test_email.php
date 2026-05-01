<?php
// Email Test Script
// Run this file to test your email configuration before using the booking system

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

// Load email configuration
$emailConfig = require 'email_config.php';

// Test email address (change this to your email for testing)
$testEmail = 'akalankada2019@gmail.com'; // Replace with your email address

echo "<h1>Email Configuration Test</h1>";

// Check if configuration is updated
if ($emailConfig['smtp_username'] === 'akalankada2019`@gmail.com') {
    echo "<p style='color: red;'>❌ Please update email_config.php with your actual Gmail credentials!</p>";
    exit;
}

echo "<p>Testing email configuration...</p>";
echo "<p><strong>SMTP Host:</strong> " . $emailConfig['smtp_host'] . "</p>";
echo "<p><strong>From Email:</strong> " . $emailConfig['from_email'] . "</p>";
echo "<p><strong>Test Email:</strong> " . $testEmail . "</p>";

$mail = new PHPMailer(true);

try {
    // SMTP Settings
    $mail->isSMTP();
    $mail->Host       = $emailConfig['smtp_host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $emailConfig['smtp_username'];
    $mail->Password   = $emailConfig['smtp_password'];
    $mail->SMTPSecure = $emailConfig['smtp_secure'];
    $mail->Port       = $emailConfig['smtp_port'];
    
    // Enable verbose debug output (optional)
    $mail->SMTPDebug = 2; // 0 = off, 1 = client, 2 = client and server
    
    // From & To
    $mail->setFrom($emailConfig['from_email'], $emailConfig['from_name']);
    $mail->addAddress($testEmail, 'Test User');

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email - Tour Booking System';
    $mail->Body = '
        <h2>🎉 Email Configuration Test Successful!</h2>
        <p>If you receive this email, your tour booking system email configuration is working correctly.</p>
        <p><strong>Test Details:</strong></p>
        <ul>
            <li>SMTP Host: ' . $emailConfig['smtp_host'] . '</li>
            <li>From: ' . $emailConfig['from_email'] . '</li>
            <li>Test Time: ' . date('Y-m-d H:i:s') . '</li>
        </ul>
        <p>You can now proceed to test the booking system!</p>
    ';

    $mail->send();
    echo "<p style='color: green;'>✅ Email sent successfully! Check your inbox at $testEmail</p>";
    
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Email could not be sent. Error: {$mail->ErrorInfo}</p>";
    echo "<p><strong>Troubleshooting steps:</strong></p>";
    echo "<ul>";
    echo "<li>Check if 2-Factor Authentication is enabled on your Gmail account</li>";
    echo "<li>Verify you're using an App Password (not your regular Gmail password)</li>";
    echo "<li>Ensure your Gmail address is correct in email_config.php</li>";
    echo "<li>Check your internet connection</li>";
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Email Test</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        h1 { color: #333; }
        .note { background: #f0f8ff; padding: 15px; border-left: 4px solid #0066cc; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="note">
        <h3>📝 Note:</h3>
        <p>Before running this test:</p>
        <ol>
            <li>Update <code>email_config.php</code> with your Gmail credentials</li>
            <li>Change the <code>$testEmail</code> variable above to your email address</li>
            <li>Ensure XAMPP is running</li>
        </ol>
    </div>
    
    <p><a href="index.html">← Back to Tour Website</a></p>
</body>
</html>
