<?php
$destinatario = 'aprendemas.atiende@gmail.com';

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];

$header = "enviado desde la pagina de Aprende Mas"
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre


mail($destinatario, $asunto, $mensajeCompleto, $header);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href=index.html\",1000)</script>";
?>