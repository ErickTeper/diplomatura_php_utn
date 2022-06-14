<?php include('header.php');

$id_coctel=$_GET['id'];
?>   

<section class="contenedor_carga">
    
    <div id="base_form">
    <form action="editar.php" method="POST" class="formulario">
        <h2 class="titulo">EDITAR COCTEL</h2>
        <input type="hidden" name="id_coctel" value=<?php echo $id_coctel?>>
        <input type="text" name="nombre" required placeholder="Nombre del Coctel">
        <input type="text" name="imagen" required placeholder="subir imagen">
        <textarea name="receta" id="" cols="30" rows="20" required placeholder="receta"></textarea>
        <input type="submit" value="Publicar Coctel" name="subir">

    </form>
    </div>
 </section>



