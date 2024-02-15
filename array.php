<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
<?php
    $dia[0] = "Lunes";
    $dia[1] = "Martes";
    $dia[2] = "Miércoles";
    $dia[3] = "Jueves";
    $dia[4] = "Viernes";
    $dia[5] = "Sábado";
    $dia[6] = "Domingo";

    $hoy = date("N") -1;
    print("Hoy es: ".$dia[$hoy]);
    
    print("<h3>Los días son: </h3>");
    for($x = 0 ; $x < count($dia) ; $x++){
        if($x == $hoy){
            print("<button>".$dia[$x]."</button><br>");
        }else{
            print($dia[$x]."<br>");
        }
    }

/*
    $mes = array("Enero","Febrero","Marzo",
    "Abril","Mayo","Junio","Julio","Agosto",
    "Septiembre","Octubre","Noviembre","Diciembre");
    //mostrar el día viernes
    echo "Día: $dia[4]";
    //imprimir el mes febrero
    echo "<br>Mes: $mes[4]";
*/
?>
<?php
$autos = array("<br>Volvo", "BMW", "Toyota");
$arraylongitud = count($autos);
for($x = 0; $x < $arraylongitud; $x++) {
    echo $autos[$x];
    echo "<br>";
}
?>
</body>
</html>