<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Login</title>
</head>
<body>
    <?php
        $rol = $_GET['rol'] ?? '';

        if ($rol == 'Administrador') {
            echo 'Autorizando a modificar datos<br>';
            echo '<a href="data.php?rol=Administrador">Ir a Data</a>';
        } elseif ($rol == 'Usuario') {
            echo 'Solo visualización de datos<br>';
            echo '<a href="data.php?rol=Usuario">Ir a Data</a>';
        } else {
            echo 'Denegando el acceso a datos';
        }
    ?>
</body>
</html>
