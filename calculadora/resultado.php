<?php
    function sumar($x,$y){
        return $x+$y;
    }
    function restar($x,$y){
        return $x-$y;
    }
    function multiplicar($x,$y){
        return $x*$y;
    }
    function dividir($x,$y){
        return $x/$y;
    }
    function resto($x,$y){
        return $x%$y;
    }

    //VARIABLE GLOBAL
    if(isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["op"])){
        $numero1 = $_GET["num1"];
        $numero2 = $_GET["num2"];
        $operacion = $_GET["op"];

        //if($numero1 != ""  && $numero2 != "" && $operacion != ""){
        if(!empty($numero1) && !empty($numero2) && !empty($operacion)){
            if($operacion == "suma"){
                $resultado = sumar($numero1,$numero2);
                echo "El resultado es: ".$resultado;
            }else if($operacion == "resta"){
                $resultado = restar($numero1,$numero2);
                echo "El resultado es: ".$resultado;
            }else if($operacion == "multiplicación"){
                $resultado = multiplicar($numero1,$numero2);
                echo "El resultado es: ".$resultado;
            }else if($operacion == "división"){
                $resultado = dividir($numero1,$numero2);
                echo "El resultado es: ".$resultado;
            }else if($operacion == "resto"){
                $resultado = resto($numero1,$numero2);
                echo "El resultado es: ".$resultado;
            } 
        }else{
            echo "Algún campo está vacío";
        }
    }else{
        echo "tas bobo";
    }
    
?>