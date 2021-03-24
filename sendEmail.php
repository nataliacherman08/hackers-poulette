<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



$mail = new PHPMailer();
try {
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug  = 0;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 550;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "cherminator2020@gmail.com";
    $mail->Password   = "woods4.27";

    $mail->AddAddress("cherminator2020@gmail.com");
    $mail->SetFrom("$email", "$firstname $lastname");
    
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = "Name: $firstname $lastname $gender  <br>from: $email <br> The content:  $message  ";
    $mail -> send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>