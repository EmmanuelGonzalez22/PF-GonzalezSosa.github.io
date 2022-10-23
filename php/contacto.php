<?php

$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$mail = $_POST['mail'];
$mensaje = $_POST['comentarios'];
$telefono = $_POST['telefono'];
$paquete = $_POST['paquete'];
$pais = $_POST['pais'];
$fecha = $_POST['fecha'];
$nivel = $_POST['nivel'];
$disciplina = $_POST['disciplina'];



$mensaje = "Este mensaje fue enviado por " . $nombre . " " . $apellido . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su telefono es: " . $telefono . " \r\n";
$mensaje .= "Eligio el paquete: " . $paquete . " \r\n";
$mensaje .= "Es de nacionalidad: " . $pais . " \r\n";
$mensaje .= "Reservo para el día: " . $fecha . " \r\n";
$mensaje .= "Su nivel es: " . $nivel . " \r\n";
$mensaje .= "Va a practicar: " . $disciplina . " \r\n";
$mensaje .= "Comentarios: " . $_POST['comentarios'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'megonzalezsosa@hotmail.com';
$asunto = 'Este mail es enviado desde contacto para reservar de Mountain Breed';

mail($para, $asunto, $mensaje);

header("location:../pages/exito.html");

?>