
<?php
include "conexion.php";

$id_coctel = $_POST["id_coctel"];
$nombre = $_POST["nombre"];
$imagen = $_POST["imagen"];
$receta = $_POST["receta"];

mysqli_query($conexion_db, "UPDATE cocteles SET nombre='$nombre', imagen='$imagen', descripcion='$receta' WHERE ID=$id_coctel");
mysqli_close($conexion_db);

header("Location: destacados.php?ok");
?>