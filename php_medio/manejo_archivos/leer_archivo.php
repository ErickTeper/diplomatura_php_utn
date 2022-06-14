<?php
// poner el contenido de un fichero en una cadena
$miArchivo = fopen("prueba.txt", "w"); //creamos archivo
$texto= "probando hola que tal como va agosto joto perraaaa \n segunda linea arraca aqui y sigueeee";
fwrite($miArchivo, $texto); //introducimos texto
$gestor = fopen("prueba.txt", "r"); //iniciamos lectura

//$contenido = fread($gestor, filesize("prueba.txt"));
//echo $contenido;

$contenido2 = fread($gestor, 10); //leemos los primeros 10 bytes
echo $contenido2." --"; //al terminarla lactura el cursor se situa

$contenido3 = fread($gestor, 5); //continua con el cursor desde donde quedo en la primer lectura
echo $contenido3;
fclose($gestor); //cherramos

$gestor = fopen("prueba.txt", "r"); //abrimos nuevamente
$contenido = fread($gestor, filesize("prueba.txt")); //lo leemos completo
echo "<br>".$contenido."<br>---------------------------------------------<br>";

rewind($gestor); //rebobina en vez de cerrar y abrir

/*leer una sola linea fgets(gestor)*/
$contenido=fgets($gestor);
echo $contenido."--> aquí leemos solo la primera linea<br> ";
$contenido=fgets($gestor);
echo $contenido."--> aquí la segunda<br>";
rewind($gestor);

/* verificar final del archivo feof(), devuelve FALSE o TRUE*/
echo "--probando final--<br>";
while (!feof($gestor)){
    
    echo "iteracion--".fgets($gestor)."<br>";
}
rewind($gestor);

/* lectura caracter con fgets()*/
echo "lee caracter--- ";
while (!feof($gestor)){
    
    echo fgetc($gestor).".";
}


?>