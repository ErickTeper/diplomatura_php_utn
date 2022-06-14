<!doctype html>
 <html>
    <head>
    <title>Agregar registro</title>
    <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Agregar un registro en la base de datos</h1>
        <form method="post" action="agregar_registro.php">
            <input type="text" name="dni" placeholder="DNI">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="curso" placeholder="Curso">
            <input type="submit" value="Agregar">
        </form>
        <ul>
        <li><a href="seleccion_lectura.php">Volver a la lista de Alumnos</a></li>
        </ul>
    </body>
    
    <?php //conexión con la base y selección de la base de datos
     $conexion = mysqli_connect("localhost","root","","alumnos_ejemplo"); //traigo los datos del formulario 
     $dni = (int)$_POST["dni"];
     $nombre = $_POST["nombre"]; 
     $email = $_POST["email"]; 
     $curso = $_POST["curso"]; //ejecución de la sentencia sql
    mysqli_query($conexion, "INSERT INTO alumno (dni,nombre,email,curso) 
    VALUES (
        $dni,'$nombre','$email','$curso')");
        
     header("location: seleccion_lectura.php")
     ?>;
     
    </html>