<?php echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n"; ?>
<?php
date_default_timezone_set('America/Mexico_City'); 
$mail = new PHPMailer ();
$mail -> From = "jorge@gmail.com";
$mail -> FromName = "Brian";
$mail -> AddAddress ("jorsolisherdez@gmail.com");
$mail -> Subject = "tíldes";
$mail->Body = 'Hola, esto es una prueba de envio con eñes y tíldes';
$mail -> IsHTML (true);
$mail->isSMTP();
$mail->SMTPDebug = 2;                                      // Set mailer to use SMTP
$mail->Host = 'tls://smtp.gmail.com:587';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'formularios.airon@gmail.com';
$mail->Password = '@~xYTJ%M0\kEu0Brds-A';                            // SMTP password
$mail->CharSet = 'UTF-8';
if(!$mail->Send()) {
echo 'Error: ' . $mail->ErrorInfo;
}else { 
echo 'Mail enviado!';
}
