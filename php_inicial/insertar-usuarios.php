<?php
include "enviar_mail.php";

if($_POST['cargar'])
{
$usuario_form = $_POST['usuario'];
$clave_form = $_POST['clave'];
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$email_form = $_POST['email'];
$sitio_web = $_POST['sitio_web'];

enviar_mail($nombre_form, $usuario_form, $clave_form, $email_form);

//conexion a base de datos

$conexion = mysqli_connect("localhost", "root", "", "phpinicial") or exit("no se pudo conecta a la base de datos");

mysqli_query($conexion, "INSERT INTO usuarios VALUES (DEFAULT, '$usuario_form', '$clave_form', '$nombre_form', '$apellido_form', '$edad_form', '$email_form', '$sitio_web') ");

MYSQLI_CLOSE($conexion);



header("location: index.php?e=ok" );
}
