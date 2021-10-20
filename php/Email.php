<?php
$destino = "consultas@aldatec.com.ar";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$texto_concatenado = "Nombre: ".$nombre ."\nEmail: ".$email."\nTelefono: ".$telefono."\nMensaje: ".$mensaje;


if (mail($destino, "Consulta Web" , $texto_concatenado))
{ echo "Mensaje enviado exitosamenten nos pondremos en contacto a la brevedad";}
else
{
  echo "Error al tratar de enviar el mensaje al servidor";
}

header("Refresh:3; url=https://aldatec.com.ar/");
?>