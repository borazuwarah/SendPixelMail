<?php
require('variablesprivadas.php');
require('class.phpmailer.php');
$mail = new PHPMailer();
$mail -> From =("");//mail send
$mail -> FromName ="Mi nombre";//nombre de la direccion que envia
$mail -> AddAddress =("");//direccion de destino
//$mail->WordWrap = 50; 
$mail->IsHTML(true); 



if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>

