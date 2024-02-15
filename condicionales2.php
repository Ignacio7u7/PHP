<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My first web</title>
</head>
<body>
    <h1>My Store</h1>
    <?php
        $edad = 7;
        if($edad >= 18 && $edad < 70){
            echo "Eres mayor";
            header("Location: https://www.google.com");
            exit;
        }else if($edad < 18 && $edad < 11){
            $mensaje = "<script> alert('Tas chiquito');</script>";
            echo $mensaje;
        }else{
            header("Location: https://www.youtube.com");
            exit;
        }
    ?>
</body>
</html>