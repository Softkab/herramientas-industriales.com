<?php
date_default_timezone_set('America/Mexico_City'); 
$mail = new PHPMailer ();
$body="<h3>NECESITA: </h3>";
$body.="<p>";
$body.= utf8_decode($_POST['cotizacion']);
$body.="</p>";
$body.="<h3>HERRAMIENTA A COTIZAR:: </h3>";
$body.="<p>";
$body.= utf8_decode($_POST['txtherramienta']);
$body.="</p>";
$body.="<h3>CANTIDAD: </h3>";
$body.="<p>";
$body.= utf8_decode($_POST['txtcantidad']);
$body.="</p>";
$body.="<h3>NOMBRE DEL CONTACTO : </h3>";
$body.="<p>";
$body.= utf8_decode($_POST['txtname']);
$body.="</p>";
$body.="<h3>CORREO DEL CONTACTO : </h3>";
$body.="<p>";
$body.= utf8_decode($_POST['txtemail']);
$body.="</p>";
$body.="<h3>NOMBRE DE LA EMPRESA: </h3>";
$body.="<p>";
$body.= utf8_decode($_POST['txtempresa']);
$body.="</p>";
$body.="<h3>DIRECCION: </h3>";
$body.="<p>";
$body.= utf8_decode($_POST['txtdireccion']);
$body.="</p>";
$body.="<h3>TELEFONO: </h3>";
$body.="<p>";
$body.= utf8_decode($_POST['txtphone']);
$body.="</p>";
$body.="<h3>COMENTARIOS: </h3>";
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
$mail->addAddress('marcodiaz@airontools.com', "Marco");
$mail -> Subject ='SOLICITUD DE COTIZACIÓN-> AIRONTOOLS.COM';
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