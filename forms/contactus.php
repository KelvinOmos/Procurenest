<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/vendor/PHPMailer/src/Exception.php';
require 'assets/vendor/PHPMailer/src/PHPMailer.php';
require 'assets/vendor/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true); // Enable exceptions

// SMTP Configuration
$mail->isSMTP();
$mail->Host = 'mail.procurenest.ng'; // Your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'mainaccount@procurenest.ng'; // Your Mailtrap username
$mail->Password = '6x]bQS6YAt41u['; // Your Mailtrap password
$mail->SMTPSecure = 'tls';
$mail->Port = 465;

// Sender and recipient settings
$mail->setFrom('mainaccount@procurenest.ng', 'Procurenest');
$mail->addAddress('kelvinomos82@gmail.com','');

// Sending plain text email
$mail->isHTML(false); // Set email format to plain text
$mail->Subject = 'Your Subject Here';
$mail->Body    = 'This is the plain text message body';

// Send the email
if(!$mail->send()){
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}