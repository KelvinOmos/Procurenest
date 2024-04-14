<?php 
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true); // Enable exceptions

// SMTP Configuration
$mail->isSMTP();
$mail->Host = 'mail.procurenest.ng'; // Your SMTP server
$mail->SMTPAuth = true;
$mail->Username = '_mainaccount@procurenest.ng'; // Your Mailtrap username
$mail->Password = '6x]bQS6YAt41u['; // Your Mailtrap password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

// Sender and recipient settings
$mail->setFrom('procuren@procurenest.ng', 'Procurenest');
$mail->addAddress('favouropara48@gmail.com','');

// Sending plain text email
$mail->isHTML(false); // Set email format to plain text
$mail->Subject = 'Testing mailing with php';
$mail->Body    = 'This is the plain text message body';

// Send the email
if(!$mail->send()){
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}