<?php
//pasamos los datos del formulario
$dni = $_POST["dni"];
$email = $_POST["email"];
$curso = $_POST["curso"];
//conexión con la base y selección de la base de datos
$conexion = mysqli_connect("localhost","root","","alumnos_ejemplo");
//creamos la sentencia sql y la ejecutamos
$ssql="UPDATE alumno SET email='$email', curso='$curso' WHERE dni=$dni";
mysqli_query($conexion, $ssql);
header("Location: seleccion_lectura.php"); ?>