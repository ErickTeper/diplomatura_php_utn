<?php

// crear archivo: fopen(): si no existe lo crea (en el presente directorio), si existe lo lee

$miArchivo = fopen("elprimero.txt", "w"); //w para escribir, "a" para gregar
fclose($miArchivo);
$miSegundoArchivo = fopen("elsegundo.txt", "w");

//escribir en un archivo: fwrite("nombre", "texto a escribir")
$texto="Roberto Carlo\n";
fwrite($miSegundoArchivo, $texto);
$texto="Condolaisa Quiñones\n";
fwrite($miSegundoArchivo, $texto);
fclose($miSegundoArchivo);


//abrir archivo: fopen(nombre, modo): hay varios modos de apertura, mirar apunte
// cuidado con W!!! borra el archivo anterior en caso de existir

$file = fopen("elprimero.txt","w");
$texto="probando hola chau como va bien y vos sabe agosoto joto perra";
fwrite($file, $texto);
; //lectura de 10 bytes
fclose($file);

/*sobreescribir archivo*/

$miArchivo = fopen("elprimero.txt", "w");
$txt = "Pedro\n";
fwrite($miArchivo, $txt);
$txt = "Julieta\n";
fwrite($miArchivo, $txt);
fclose($miArchivo);

?>




