<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ✅ Composer autoload
require __DIR__ . '/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name       = htmlspecialchars($_POST['name']);
    $email      = htmlspecialchars($_POST['email']);
    $phone      = htmlspecialchars($_POST['phone']);
    $subject    = htmlspecialchars($_POST['subject']);
    $message    = htmlspecialchars($_POST['message']);
    $newsletter = isset($_POST['newsletter']) ? "Yes" : "No";

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug  = 0; // Change to 2 for debugging
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'pawanmadushanka015@gmail.com'; // ✅ Your Gmail
        $mail->Password   = 'mqxgqbhisldzkrsj';             // ✅ App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('pawanmadushanka015@gmail.com', 'Website Contact Form'); 
        $mail->addAddress('pawanmadushanka015@gmail.com');  // ✅ Replace with your real receiving email
        $mail->addReplyTo($email, $name); // User’s email for reply

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form: $subject";
        $mail->Body    = "
            <h2>New Contact Form Submission</h2>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Phone:</b> $phone</p>
            <p><b>Subject:</b> $subject</p>
            <p><b>Newsletter:</b> $newsletter</p>
            <p><b>Message:</b><br>$message</p>
        ";

        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nNewsletter: $newsletter\n\nMessage:\n$message";

        $mail->send();
        echo "✅ Message sent successfully!";
    } catch (Exception $e) {
        echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
