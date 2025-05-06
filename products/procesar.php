<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $imagen = $_POST["imagen"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];

    $sql = "INSERT INTO productos (nombre, imagen, descripcion, precio) 
            VALUES ('$nombre', '$imagen', '$descripcion', '$precio')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Producto agregado exitosamente!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
