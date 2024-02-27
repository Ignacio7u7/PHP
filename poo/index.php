<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="POST" action="controllers.php">
            <input type="text" name="nombre_apellido" placeholder="Nombre y apellido">
            <input type="date" name="fecha_nacimiento">
            <br>
            <input type="text" name="cedula" placeholder="Número de cedula">
            <input type="text" name="telefono" placeholder="Número de teléfono">
            <br>
            <input type="text" name="direccion" placeholder="Número de dirección">
            <br>
            <button type="submit" class="btn btn-outline-danger">Guardar</button>
        </form>
    </div>
</body>
</html>