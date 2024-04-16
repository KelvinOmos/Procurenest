<?php 
use PHPMailer\PHPMailer\PHPMailer;

require '../assets/vendor/PHPMailer/src/PHPMailer.php';
require '../assets/vendor/PHPMailer/src/Exception.php';
require '../assets/vendor/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true); // Enable exceptions

// SMTP Configuration
$mail->isSMTP();
$mail->Host = 'mail.procurenest.ng'; // Your SMTP server
$mail->SMTPAuth = true;
$mail->Username = '_mainaccount@procurenest.ng'; // Your username
$mail->Password = ''; // Your password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

// Sender and recipient settings
$mail->setFrom('procuren@procurenest.ng', 'Procurenest');
$mail->addAddress('Contact@procurenest.ng','');
$mail->addAddress('Procurenestng@gmail.com','');

// Sending plain text email
$mail->isHTML(false); // Set email format to plain text
$mail->Subject = $_POST['subject'];
$mail->Body = <<<EOT
            Email: {$_POST['email']}
            Name: {$_POST['name']}
            Message: {$_POST['message']}
EOT;

// Send the email
if(!$mail->send()){
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
