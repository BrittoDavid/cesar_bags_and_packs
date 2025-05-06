<?php
include("conexion.php"); // Incluye tu conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['ebook_form_name'] ?? '';
    $email = $_POST['ebook_email'] ?? '';
    $telefono = $_POST['ebook_phone'] ?? ''; // NUEVO CAMPO

    if (!empty($nombre) && !empty($email) && !empty($telefono)) {
        $stmt = $conexion->prepare("INSERT INTO pedidos (nombre, email, telefono) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre, $email, $telefono); // NUEVO VALOR

        if ($stmt->execute()) {
            header("Location: ../index.html?exito=1");
            exit();
        } else {
            header("Location: ../index.html?error=1");
            exit();
        }
    } else {
        header("Location: ../index.html?error=1");
        exit();
    }
} else {
    header("Location: ../index.html");
    exit();
}
?>
