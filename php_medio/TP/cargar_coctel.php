<?php
include "conexion.php";

$nombre = $_POST["nombre"];
$imagen = $_POST["imagen"];
$receta = $_POST["receta"];

mysqli_query($conexion_db, "INSERT INTO cocteles VALUES(DEFAULT, '$nombre', '$imagen', '$receta')" );
mysqli_close($conexion_db);

header("Location: subir_coctel.php?ok");
?>