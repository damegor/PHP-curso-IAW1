<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
</head>
<body>
    <?php
        $password = $_GET['password'] ?? '';

        if ($password == 'tu_password') {
            echo '<a href="resultado-login.php">Ir a Resultado de Login</a>';
        } else {
            echo 'Denegando el acceso';
        }
    ?>
</body>
</html>
