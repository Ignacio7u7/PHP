<?php
$llueve = "no";
$es_feriado = "no";
$es_finde = "si";

#programa que devuelve si eres mayor o menor de edad

if($llueve == "si" || $es_feriado == "si" || $es_finde == "si"){
    print("<h1>Me quedo en casa</h1>");
}else{
    print("<h3>Me voy al snpp</h3>");
}

print ("<hr>");

$llueve2 = 1;
$es_feriado2 = null;
$es_finde2 = null;

if($llueve2 || $es_feriado2 || $es_finde2){
    print("<h2>Me quedo en casa 2</h2>");
}else{
    print("<h4>me voy al snpp 2</h4>");
}



?>