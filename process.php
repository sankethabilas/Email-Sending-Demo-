<?php

include "SMTP.php";
include "Exception.php";
include "PHPMailer.php";

use PHPMailer\PHPMailer\PHPMailer;

$receiver = $_POST["r"];
$subject = $_POST["s"];
$content = $_POST["c"];

//email code
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'test@gmail.com';
$mail->Password = '***********';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('test@gmail.com', 'Test email');
$mail->addReplyTo('test@gmail.com', 'Test email');
$mail->addAddress($receiver);
$mail->isHTML(true);
$mail->Subject = $subject;
$bodyContent = $content;
$mail->Body    = $bodyContent;

if (!$mail->send()) {
    echo("Failed");
    
}else{
    echo("Success");

}
