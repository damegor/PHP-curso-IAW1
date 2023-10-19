<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <?php
        $rol = $_GET['rol'] ?? '';

        if ($rol == 'Administrador') {
            echo 'Autorización para modificar datos<br>';
            echo '<a href="data.php?rol=Administrador">Ir a Data</a>';
        } elseif ($rol == 'Usuario') {
            echo 'Solo visualización de datos';
        }
    ?>
</body>
</html>
