<?php
$to      = 'vineetkuma@gmail.com';
$subject = 'the subject';
$message = 'Hi, This mail is testing purpose only.';
$headers = 'From: vinit.kumar@deal4loans.com' . "\r\n" .
    'Reply-To: vinit.kumar@deal4loans.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$testMail = mail($to, $subject, $message, $headers);
?>
