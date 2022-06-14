<?php
include("conexion.php");

$id_coctel=$_GET['id'];
mysqli_query($conexion_db, "DELETE FROM cocteles WHERE ID = $id_coctel");

header("Location: destacados.php");
?>