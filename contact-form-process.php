<?php

$name = $_POST['Name']; 
$email = $_POST['Email'];
$subject = $_POST['Subject'] 
$message = $_POST['Message']; 

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "jacobrphillipsdev@gmail.com";
$mail->Password = "kkovsyubojyjxjqm";

$mail->setFrom($email, $name);
$mail->addAddress("jacobrphillipsdev@gmail.com","Jacob");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";

?>