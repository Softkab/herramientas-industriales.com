<?php
date_default_timezone_set('America/Mexico_City'); 
$mail = new PHPMailer ();
$body="<h1>Nombre: </h1>";
$body.="<p>";
$body.= utf8_decode($_POST['txtname']);
$body.="</p>";
$body.="<h1>Correo: </h1>";
$body.="<p>";
$body.= utf8_decode($_POST['txtemail']);
$body.="</p>";
$body.="<h1>Teléfono: </h1>";
$body.="<p>";
$body.= utf8_decode($_POST['txtphone']);
$body.="</p>";
$body.="<h1>Mensaje: </h1>";
$body.="<p>";
$body.= utf8_decode($_POST['txtmessage']);
$body.="</p>";
$m="<div id='modal'><h1 style='color: #fff;font-weight: bold;' class='animate bounceInRight'>Gracias ";
$m.=utf8_decode($_POST['txtname']);
$m.=" por tu mensaje</h1></div>";
$mail -> From =  utf8_decode($_POST['txtemail']);
$mail -> FromName =  utf8_decode($_POST['txtname']);
$mail->addAddress('jorge@softkab.com', "Jorge");
$mail->addAddress('airon@airontools.com', "Airon");
$mail->addAddress('marcodiaz@airontools.com', "Marco diaz");
$mail -> Subject ='FORMULARIO DE CONTACTO-> AIRONTOOLS.COM';
$mail->Body = $body;
$mail -> IsHTML (true);
$mail->isSMTP();
$mail->SMTPDebug = 0;                                      // Set mailer to use SMTP
$mail->Host = 'tls://smtp.gmail.com:587';              // Specify main and backup SMTP ser
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'formularios.airon@gmail.com';
$mail->Password = '@~xYTJ%M0\kEu0Brds-A';                            // SMTP password
$mail->CharSet = 'UTF-8';
if(!$mail->Send()) {
echo 'Error: ' . $mail->ErrorInfo;
}else { 
echo $m;
}