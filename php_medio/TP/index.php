    <?php include('header.php')?>   

    <section class="contenedor_carga">
        <div >
        <p style=" color:white; font-size:4rem">Login</p>
        </div>

        <form action="validar_acceso.php" method="POST">

            <input type="text" name="usuario" required placeholder="Usuario">
            <input type="password" name="clave" required placeholder="clave">
            <input type="submit" value="Ingresar">
    
        </form>

        <?php
        if (isset($_GET['error'])){
            echo "<h3>Datos incorrectos<h3>";
        }
        
        ?>
  
     </section>

    

</body>
</html>