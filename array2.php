<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array2</title>
</head>
<body>
    <?php
        $edades = array("Ignacio"=>"19","Camila"=>"25","Samanta"=>"17");
        echo "Camila tiene ".$edades['Camila']." años.";

    foreach($edades as $x => $valor) {
        echo "<br>";
        echo "Nombre = " . $x . ", edad = " .$valor;
        
    }
    ?>
</body>
</html>