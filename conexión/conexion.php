<?php
    include 'vars.php';
    //include 'https://www.data.com/file.php';

    $conexion = new mysqli($host,$user,$password,$database,$port);

    if ($conexion->errno){
        echo "Algo anda mal con la conexion :( ";
    }else{
        echo "OK";
    }
?>