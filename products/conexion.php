<?php
$host = "localhost";
$usuario = "root";        // Si usas XAMPP, generalmente es "root"
$contrasena = "";         // Sin contraseña por defecto en XAMPP
$bd = "formulario";       // Tu base de datos

$conexion = new mysqli($host, $usuario, $contrasena, $bd);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
