<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <a href="cerrar.php">Cerrar sesión</a>
</body>
</html>