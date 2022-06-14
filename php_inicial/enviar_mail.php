<?php

function enviar_mail($nombre, $usuario, $clave, $email){

$asunto = "BIENVENIDO A PHP INICIAL";
$mensaje = "Hola!!! ".$nombre." Gracias por inscribirte. Tu nombre de usuario es: ".$usuario." y tu contraseña es: ". $clave;

mail($email, $asunto, $mensaje);

}
