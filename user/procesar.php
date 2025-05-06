<?php
session_start();

$filename = "usuarios.txt";
$msg = "";

if (isset($_POST['registro'])) {
    $usuario = trim($_POST['usuario']);
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

    if ($usuario && $_POST['contrasena']) {
        file_put_contents($filename, "$usuario|$contrasena\n", FILE_APPEND);
        $msg = "Usuario registrado exitosamente.";
    } else {
        $msg = "Completa todos los campos para registrarte.";
    }
}

if (isset($_POST['login'])) {
    $usuario = trim($_POST['usuario']);
    $contrasena = $_POST['contrasena'];
    $usuarios = file($filename, FILE_IGNORE_NEW_LINES);

    $encontrado = false;
    foreach ($usuarios as $u) {
        list($saved_user, $saved_hash) = explode("|", $u);
        if ($saved_user === $usuario && password_verify($contrasena, $saved_hash)) {
            $_SESSION['usuario'] = $usuario;
            header("Location: bienvenido.php");
            exit;
        }
    }
    $msg = "Usuario o contraseña incorrectos.";
}

echo "<p>$msg</p>";
echo '<p><a href="index.html">Volver</a></p>';
?>