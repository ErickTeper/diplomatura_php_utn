<?php include('header.php')?>   

<section class="contenedor_carga">
    
    <div id="base_form">
    <form action="cargar_coctel.php" method="POST" class="formulario">
        <h2 class="titulo">CARGAR COCTEL</h2>
        <input type="text" name="nombre" required placeholder="Nombre del Coctel">
        <input type="text" name="imagen" required placeholder="subir imagen">
        <textarea name="receta" id="" cols="30" rows="20" required placeholder="receta"></textarea>
        <input type="submit" value="Publicar Coctel" name="subir">

    </form>
    </div>
    <?php     
    if (isset($_GET['ok'])){


        echo('<div id="carga_correcta"><h3>CARGADO CON ÉXITO</h3></div>');
    }
    ?> 
 </section>