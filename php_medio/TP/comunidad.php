<?php include('header.php')?> 


<section class="contenedor_carga">
    
    <div id="base_form">
    <form action="archivo_comunidad.php" method="POST" class="formulario">
        <h2 class="titulo">COMPARTIR RECETA</h2>
        <input type="text" name="usuario" required placeholder="nombre de usuario">
        <input type="text" name="nombre" required placeholder="Nombre del Coctel">
        <textarea name="receta" id="" cols="30" rows="20" required placeholder="receta"></textarea>
        <input type="submit" value="Publicar Coctel" name="subir">

    </form>
    </div>
</section> 

<section>
   <?php 
$archivo =fopen('recetas.txt', 'r');
echo fpassthru($archivo);
fclose($archivo);
?>

 </section>

 
</body>
</html>