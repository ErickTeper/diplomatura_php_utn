<?php
echo date("l")."<br>";
echo date("l/M/Y")."<br>";
echo date("d/M/Y")."<br>";
echo date("D/M/Y")."<br>";

// definir zona horaria

date_default_timezone_set("America/Argentina/Buenos_Aires");

$fecha_actual=date("l/m/y");
echo "La fecha actual es ".$fecha_actual;

$hora_actual = time(); //muestra hora unix 01/01/1970
echo ("<br>mostrar: ".$hora_actual);
$hora_actual = getdate(time());

echo ("<h3>".$hora_actual['hours'].":".$hora_actual['minutes'].":".$hora_actual['seconds']."</h3>"); 