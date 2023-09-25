<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
</head>

<body>
    <?php
    if (
        !empty($_GET['dni']) &&
        !empty($_GET['nombre']) &&
        !empty($_GET['apellidos']) &&
        !empty($_GET['direccion']) &&
        !empty($_GET['telefono'])
    ) {
        $dni = $_GET['dni'];
        $nombre = $_GET['nombre'];
        $apellidos = $_GET['apellidos'];
        $direccion = $_GET['direccion'];
        $telefono = $_GET['telefono'];
        echo "<p>Dni: $dni</p>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellidos: $apellidos</p>";
        echo "<p>Dirección: $direccion</p>";
        echo "<p>Teléfono: $telefono</p>";
    } else {
        echo "No se han proporcionado todos los datos.";
    }

    ?>
</body>

</html>
