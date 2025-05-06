<?php
session_start();

$conexion = new mysqli("localhost", "root", "", "formulario");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$sexo = $_POST['sexo'];

$sql = "INSERT INTO datos (nombre, correo, sexo) VALUES ('$nombre', '$correo', '$sexo')";

if ($conexion->query($sql) === TRUE) {
    $_SESSION['nombre'] = $nombre;
    $_SESSION['correo'] = $correo;

    header("Location: ../index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
