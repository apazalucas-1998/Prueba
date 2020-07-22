<?php

// Llamando a los campos 
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


// Datos para el correo
$destinatario = "apelukavc04@gmail.com";
$asunto = "Te enviamos este correo desde nuestra web VISUAL STUDIO CODE";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";

//Enviando mensaje.....
mail($destinatario , $asunto , $carta);
header("Location: Un-envio-de-mensaje-al-correo.php");

?>