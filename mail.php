<?php 
$to = "chauhangarima525@gmail.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: chauhangarima525@gmail.com" . "\r\n" .
           "Reply-To: chauhangarima525@gmail.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully this time.";
} else {
    echo "Email failed to send.";
}?>
