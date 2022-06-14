<!DOCTYPE html>
<html>
    <head>
        <title>Consulta de Alumnos</title>
    </head>
    <body>
        <h1>Lectura de la tabla de alumnos</h1>
        <?php
        //conectamos a base de datos
            $conexion = mysqli_connect('localhost', 'root', '', 'alumnos_ejemplo');
            $result = mysqli_query($conexion, "select * from alumno");
        ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Curso</th>
            </tr>
            <?php
            //mostramos los registros con un bucle while
            while ($row = mysqli_fetch_array($result)){
                echo '<tr><td>'.$row["nombre"].'</td>';
                echo '<td>'.$row["email"].'</td>';
                echo '<td>'.$row["curso"].'</td></tr>';
            }
            mysqli_free_result(($result))
            ?>
        </table>
        <nav>
            <ul>
                <li><a href="agregar_registro.php">Añadir un registro</a></li>
                <li><a href="actualizar_registro.php">Actualizar un registro</a></li>
                <li><a href="Borrar_registro.php">Borrar un registro</a></li>
            </ul>
        </nav>
    </body>
</html>