<?php
date_default_timezone_set('America/Mexico_City'); 
$mail = new PHPMailer ();
$host= $_SERVER["HTTP_HOST"];
$a = "FORMULARIO DE CONTACTO-> ";
$a.=$host;
$nombre= utf8_decode($_POST['txtname']); 
$correo= utf8_decode($_POST['txtemail']);
$body="<h3>Nombre: </h3><p>";
$body.= utf8_decode($_POST['txtname']);
$body.="</p>"; 
$body="<h3>Correo: </h3><p> ";
$body.= utf8_decode($_POST['txtemail']);
$body.="</p>"; 
$body.="<h3> Mensaje: </h3><p>";
$body.= utf8_decode($_POST['txtmessage']);
$body.="</p>"; 
$body.="<h3>Telefono : </h3><p>";
$body.= utf8_decode($_POST['txtphone']); 
$body.="</p>";
// Always set content-type when sending HTML email
$m="<div id='modal'><h1 style='color: #fff;font-weight: bold;' class='animate bounceInRight'>Gracias ";
$m.=$nombre;
$m.=" por tu mensaje</h1></div>";
$mail -> From = "formularios.airon@gmail.com";
$mail -> FromName = $nombre;
$mail->addAddress('jorge@softkab.com', "Jorge");
$mail->addAddress('airon@airontools.com', "Airon");
$mail->addAddress('marcodiaz@herramientas-industriales.com', "Marco");
$mail->addReplyTo($correo, $nombre);
$mail -> Subject = $a;
$mail->Body = $body;
$mail -> IsHTML (true);
$mail->isSMTP();
$mail->SMTPDebug = 0;                                      // Set mailer to use SMTP
$mail->Host = 'tls://smtp.gmail.com:587';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'formularios.airon@gmail.com';
$mail->Password = '@~xYTJ%M0\kEu0Brds-A';                            // SMTP password
$mail->CharSet = "UTF-8";
if(!$mail->Send()) {
echo 'Error: ' . $mail->ErrorInfo;
}else { 
echo $m;
}
