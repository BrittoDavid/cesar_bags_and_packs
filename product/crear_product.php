<?php
require_once '../includes/conexion.php'; // Asegúrate de que esta ruta sea correcta

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificamos que los datos se reciban correctamente
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : '';
    $valor = isset($_POST["valor"]) ? $_POST["valor"] : 0;

    // Verifica que el valor no esté vacío
    if (empty($nombre) || empty($valor)) {
        $mensaje = "Por favor, completa todos los campos.";
    } else {
        // Conectar a la base de datos
        $conexion = new Conexion();

        // Preparamos la consulta de inserción
        $stmt = $conexion->conn->prepare("INSERT INTO producto (nombre, valor) VALUES (?, ?)");
        $stmt->bind_param("si", $nombre, $valor); // 'si' significa que el primer campo es string y el segundo es int

        if ($stmt->execute()) {
            $mensaje = "Producto creado exitosamente.";
        } else {
            $mensaje = "Error al insertar: " . $stmt->error;
        }

        // Cerramos la consulta y la conexión
        $stmt->close();
        $conexion->cerrar();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <h2>Crear nuevo producto</h2>

    <!-- Mostramos el mensaje si hay algún error o éxito -->
    <?php if ($mensaje): ?>
        <div class="alert alert-info"><?= htmlspecialchars($mensaje) ?></div>
    <?php endif; ?>

    <!-- Formulario para ingresar un nuevo producto -->
    <form method="POST" action="crear_product.php">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor ($)</label>
            <input type="number" class="form-control" id="valor" name="valor">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>
</html>