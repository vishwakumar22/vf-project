<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp1\htdocs\phpmailer\src\Exception.php';
require 'C:\xampp1\htdocs\phpmailer\src\PHPMailer.php';
require 'C:\xampp1\htdocs\phpmailer\src\SMTP.php';

$mail = new PHPMailer(true);

$email = 'vishwakarmaankit9000@gmail.com';
$password = 'bmpw kxzx phca yucv ';

try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipient information
    $mail->setFrom($email, 'mrderek2021@gmail.com');
    $mail->addAddress('mrderek2021@gmail.com', '');
    $mail->addReplyTo($email, 'Vishwakarma interiors');

    
    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Contact Information';
    $mail->Body    ="Thank you ! for Contacting us our administration will be shortly get back to you ASAP.";

    $mail->send();
    header("Location:index.html");
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}