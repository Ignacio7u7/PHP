<?php
    if($_POST){
        include "conexion.php";
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre_apellido'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $usuario_id = $_POST['usuario_id'];

        $sql = "insert into cliente values('$cedula','$nombre','$telefono','$direccion','$usuario_id')";

        $conexion->query($sql);
        mysqli_close($conexion);
    }
    header("Location: index.php");
    exit;
?>