<!doctype html> 
<html>
    <head> 
        <title>Borrar un registro</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Eliminar un registro</h1>

        <?php 
        //conexión con la base y selección de la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "alumnos_ejemplo");
        ?> 
        <form method="post" action="eliminador.php">
        <?php
        //creamos la sentencia sql y la ejecutamos
        $ssql = "SELECT dni, nombre FROM alumno ORDER BY nombre";
        $result = mysqli_query($conexion, $ssql);
        ?>
        
        <select name="dni">
        
        <?php
        //mostramos los registros en forma de menú desplegable
        while ($row = mysqli_fetch_array($result)) {
            echo '<option value="' . $row['dni'] . '">' . $row["nombre"] . '</option>'; 
            }
            
            mysqli_free_result($result);
            ?>
            
        </select>
        <input type="submit" value="Eliminar">
    </form>
    <ul>
        <li><a href="seleccion_lectura.php">Volver a la lista de Alumnos</a></li>
    </ul>
</body>
</html>
