<?php
//para validar formato de la fecha
if(checkdate($_GET['month'], $_GET['day'],$_GET['year'])){
    echo "La fecha ingresada es correcta";
}else{
    echo "La fecha no es valida";
};