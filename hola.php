<?php
#declarar variables
$nombre = "Ignacio";
$edad = 19;
$numero_1 = 12;
$numero_2 = 4;

print("<h1>Hola $nombre </h1>");
echo "Muy bien ".$nombre.", tu edad es ".$edad;
echo "<br>Suma: ".$numero_1 + $numero_2;
echo "<br>Resta: ".$numero_1 - $numero_2;
echo "<br>Multiplicación: ".$numero_1 * $numero_2;
echo "<br>División: ".$numero_1 / $numero_2;
echo "<br>Resto: ".$numero_1 % $numero_2;

echo "<br>Mayor que: ".($numero_1 > $numero_2);
echo "<br>Menor que: ".($numero_1 < $numero_2);
echo "<br>Mayor o igual que: ".($numero_1 >= $numero_2);
echo "<br>Menor o igual que: ".($numero_1 <= $numero_2);

echo "<br>Iguales: ".($numero_1 == $numero_2);
echo "<br>Distintos: ".($numero_1 != $numero_2);

?>