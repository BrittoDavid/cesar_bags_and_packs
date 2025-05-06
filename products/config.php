<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escapar los datos para mayor seguridad
    $nombre = $conn->real_escape_string($_POST["nombre"]);
    $imagen = $conn->real_escape_string($_POST["imagen"]);
    $descripcion = $conn->real_escape_string($_POST["descripcion"]);
    $precio = floatval($_POST["precio"]); // Asegurar que el precio sea un número

    // Usar prepared statements para evitar inyección SQL
    $sql = "INSERT INTO productos (nombre, imagen, descripcion, precio) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssd", $nombre, $imagen, $descripcion, $precio);

    if ($stmt->execute()) {
        echo "<script>alert('Producto agregado exitosamente!'); window.location.href='index.php';</script>";
    } else {
        echo "Error al agregar producto: " . $stmt->error;
    }

    // Cerrar statement y conexión
    $stmt->close();
}
$conn->close();
?>
