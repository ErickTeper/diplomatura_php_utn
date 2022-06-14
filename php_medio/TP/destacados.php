<?php include('header.php')?>  

<section class="seccion_tragos">
<?php include('conexion.php');
$consulta = mysqli_query($conexion_db, "SELECT * FROM cocteles");
while($mostrar= mysqli_fetch_assoc($consulta)){
    ?>
<div class="tragos"> 
    <h2 id="nombres_coctel">
    <?php echo $mostrar['nombre'] ?>
    
    <a href="eliminar_coctel.php?id=<?php echo $mostrar['ID']?>" class="cruz">
    <img src="./imagen/cruz.png" height="16vh" width="16vw">
    </a>
    <a href="editar_coctel.php?id=<?php echo $mostrar['ID']?>" class="cruz">
    <img src="./imagen/lapiz.png" height="16vh" width="16vw">
    </a>

    </h2>
    
    <img id="imagenes" src="./imagen/<?php echo $mostrar['imagen']?>" alt="">

    <p id="recetas"><?php echo $mostrar['descripcion']?> </p>
    

</div>

<?php };
?>



</section>


</body>
</html>