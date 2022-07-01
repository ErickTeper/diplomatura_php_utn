<?php
session_start(); //para iniciar session y operar como usuario

$usuario= $_POST['usuario'];
$clave= $_POST['clave'];

include('conexion.php');

$consulta = mysqli_query($conexion_db, "SELECT * FROM administradores WHERE usuario = $usuario AND clave = '$clave'");

if (mysqli_num_rows($consulta) == 0){//obtiene nº de filas de un conjunto de resultados
    header('location: index.php?error');
}else{
    $_SESSION['admin'] = $_POST['usuario'];
    header('location:subir_coctel.php');
}
