<!doctype html>
<html>
    <head>
        <title>Actualizar datos</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Modificar un registro</h1>
        <?php
        //conexión con la base y selección de la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "alumnos_ejemplo");
        ?>
        <form method="post" action="actualizador.php">
            <?php
            //creamos la sentencia sql y la ejecutamos
            $ssql = "SELECT dni, nombre FROM alumno ORDER BY nombre";
            $result = mysqli_query($conexion, $ssql);
            ?>
            <select name="dni">
                <?php
                //generamos el menu desplegable
                while ($row = mysqli_fetch_array($result)) {
                    echo '<option value="' . $row['dni'] . '">' . $row["nombre"] . '</option>';
                    }
                    ?>
                    </select>
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="curso" placeholder="Curso">
                    <input type="submit" value="Modificar">
        </form>
        <ul>
            <li><a href="seleccion_lectura.php">Volver a la lista de Alumnos</a></li>
        </ul>
    </body>
</html>