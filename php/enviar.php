<?php

$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$mail = $_POST['mail'];
$mensaje = $_POST['comentarios'];



$mensaje = "Este mensaje fue enviado por " . $nombre . " " . $apellido . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Comentarios: " . $_POST['comentarios'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'megonzalezsosa@hotmail.com';
$asunto = 'Este mail es enviado desde Mountain Breed';

mail($para, $asunto, $mensaje);

header("location:../pages/exito.html");

?>