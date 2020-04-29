<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'path/to/composer/vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.ptempresas.pt';
$mail->SMTPAuth = true;
$mail->Username = 'eventos@casademontevideu.pt';
$mail->Password = 'Spring.2019';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('eventos@casademontevideu.pt', 'Envio');
$mail->addReplyTo('eventos@casademontevideu.pt', 'Recebimento');

$mail->isHTML(true);

$mail->Subject = "PHPMailer SMTP test";
$mail->Body = 'Mail body in HTML';
$mail->AltBody = 'This is the plain text version of the email content';

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';

}
