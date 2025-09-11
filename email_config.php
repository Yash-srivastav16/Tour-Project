<?php
// Email Configuration
// IMPORTANT: Update these settings with your actual email credentials

return [
    'smtp_host'     => 'smtp.gmail.com',
    'smtp_port'     => 587,
    'smtp_secure'   => 'tls',
    'smtp_username' => 'akalankada2019@gmail.com',        // Replace with your Gmail address
    'smtp_password' => 'gidt lcdq fsji riea',           // Replace with your Gmail App Password
    'from_email'    => 'akalankada2019@gmail.com',        // Replace with your Gmail address
    'from_name'     => 'Tour.com',
    'reply_to'      => 'akalankada2019@gmail.com',        // Replace with your Gmail address
];

/*
SETUP INSTRUCTIONS:

1. Enable 2-Factor Authentication on your Gmail account
2. Generate an App Password:
   - Go to Google Account settings
   - Security → 2-Step Verification → App passwords
   - Generate a 16-character app password
   - Use this password in 'smtp_password' above

3. Update the email addresses above with your actual Gmail address

4. Test the configuration by submitting a booking form
*/
?>
