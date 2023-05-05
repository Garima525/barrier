<?php 
$to = "garima.chauhan@infostride.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: chauhangarima525@gmail.com" . "\r\n" .
           "Reply-To: sender@example.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);
?>