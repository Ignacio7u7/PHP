<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array3</title>
</head>
<body>
    <?php
        
        $productos = array(
            array("Heladera",250000,18),
            array("Microondas",1500000,9),
            array("Cocina",590000,21),
            array("Licuadora",450000,15),
            array("Mixer",260000,5),
            array("Ventilador",150000,15)
        );
        //imprimir todos los valores    
        $arraylongitud = count($productos);
        for($x = 0; $x < $arraylongitud; $x++) {
            echo"<h2>Los productos son: </h2>";
            echo $productos[$x][0];
            echo "<br>";
            echo $productos[$x][1];
            echo "<br>";
            echo $productos[$x][2];
            echo"<br>";
            echo "<hr>";
        }
        
        //imprimir solo los productos con (PRECIO <= 1000000)
        
        $productos = array(
            array("Heladera",250000,18),array("Microondas",1500000,19),array("Cocina",590000,21),
            array("Licuadora",450000,15),array("Mixer",260000,5),array("Ventilador",150000,15)
        );

        for($x = 0 ; $x < count ($productos);$x++){
            print("<br>".$productos[$x][0]. ", precio: ".$productos[$x][1]);
        }
        echo "<hr>";
        print("<br>Producto------Precio----Cantidad "."<br>");  
        for($x = 0 ; $x < count($productos);$x++){
            for($y = 0 ; $y < 3 ; $y++){
                print($productos[$x][$y]."-----");
               
            }
             echo "<hr>";
        }

    
    ?>
</body>
</html>