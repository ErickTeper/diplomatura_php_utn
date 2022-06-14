<?php 
//pasamos los datos del formulario
$id = $_POST["dni"];
echo 'el usuario cuyo DNI es: '.$id.' ha sido eliminado';
//conexión con la base y seleccion de la base de datos
$conexion = mysqli_connect("localhost","root","","alumnos_ejemplo");
//creamos la sentencia sql y la ejecutamos
$ssql="DELETE FROM alumno WHERE dni='$id'";
mysqli_query($conexion,$ssql); ?>