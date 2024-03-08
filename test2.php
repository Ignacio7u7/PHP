<?php
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $fecha = date("y-m-d");
    $dia = date("d");
    $mes = date("n") - 1;
    $anio = date("Y");

    print("Hoy es: ".$dia. " de " .$meses[$mes]. " del " .$anio. ".");
?>