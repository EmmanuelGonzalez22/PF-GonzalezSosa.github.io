<?php

$mail = $_POST['mail'];



$mensaje = "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'megonzalezsosa@hotmail.com';
$asunto = 'Este mail es enviado desde Newsletter de Mountain Breed';

mail($para, $asunto, $mensaje);

header("location:../pages/exito.html");

?>