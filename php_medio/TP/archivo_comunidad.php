<?php include('header.php')?> 

    <?php 
    /*Datos funciones de hora*/
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $fecha_actual=date("d/m/y");
    $hora_actual = getdate(time());  

    /* Muestro archivo */
    $texto = "<div class='comunidad'><h3>Nombre: ". $_POST['usuario']."</h3>". "<h4> Coctel: ".
    $_POST['nombre']."</h4>"."<h4> receta: ".$_POST['receta']."</h4>"."<h5> Publicado el: ".$fecha_actual.
    " a la/s: ".$hora_actual['hours'].":".$hora_actual['minutes']."</h5>"."</div>" ; 


    


    $archivo = fopen('recetas.txt', 'a');
    fputs($archivo, $texto);

    header("Location: comunidad.php?");
    ?>
    
    
</body>
</html>