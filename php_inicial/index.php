<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="formularioestilo.css">
    <title>registro</title>  
</head>

<body>

    <form action="insertar-usuarios.php" method="post">
    <h1>CREAR CUENTA</h1>
    
        <input class="input" type="text" name="usuario" placeholder="Usuario"> <br><br>
        <input class="input" type="password" name="clave" placeholder="Clave"> <br><br>
        <input class="input" type="text" name="nombre" placeholder="Nombre"> <br><br>
        <input class="input" type="text" name="apellido" placeholder="Apellido"> <br><br>
        <input class="input" type="number" name="edad" placeholder="Edad"> <br><br>
        <input class="input" type="email" name="email" placeholder="e-mail"> <br><br>
        <input class="input" type="text" name="sitio_web" placeholder="Sitio Web"> <br><br>
        
        <input id="boton" type="submit" value="LISTO!" name="cargar">


    </form>

    <?php  
    if (isset($_GET['e'])){
        

        echo('<div id="carga_correcta"><h3>DATOS CARGADOS CON ÉXITO</h3></div>');
    } 
?> 

</body>
</html>

