<link href="bootstrap.min.css" rel="stylesheet">

<?php
    include "conexion.php";
    $consulta = "SELECT * FROM CLIENTE;";
    $result_set = $conexion->query($consulta);

    if($result_set->num_rows > 0){
        echo "<table class='table table-warning'>";
        echo "<tr><td>Cliente</td><td>Dirección</td><td>Teléfono</td></tr>";
        while($f = $result_set->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $f['nombre_apellido']. "</td>";
            echo "<td>". $f['telefono']. "</td>";
            echo "<td>". $f['direccion']. "</td>";
            echo "<td> <button>✔</button><button>❌</button> </td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "Empieza agregando clientes";
    }
?>

<hr>
<form method="POST" action="guardarcontroller.php">
    <input type="text" name="cedula" placeholder="Número de C.I">
    <input type="text" name="nombre_apellido" placeholder="Nombre">
    <input type="text" name="telefono" placeholder="Teléfono">
    <input type="text" name="direccion" placeholder="Dirección">
    <input type="hidden" name="usuario_id" value="123">
    <button type="submit" class="btn btn-warning">Guardar</button>
</form>