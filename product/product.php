<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link href="product.css" rel="stylesheet">
</head>
<body>
    <h1>Lista de Productos</h1>

    <a class="nav-link click-scroll" href="crear_product.php">Crear Producto</a>

    <div class="container">
        <?php
            require_once '../includes/conexion.php'; // Asegúrate de que esta ruta sea correcta

            $conexion = new Conexion();
            $stmt = $conexion->conn->prepare("SELECT nombre, valor FROM producto");
            $stmt->execute();
            $resultado = $stmt->get_result();

            if ($resultado->num_rows > 0) {
                while ($producto = $resultado->fetch_assoc()) {
                    echo '<div class="product-card">';
                    echo '<h3>' . htmlspecialchars($producto["nombre"]) . '</h3>';
                    echo '<p class="price">$' . number_format($producto["valor"], 2) . '</p>';
                    echo '</div>';
                }
            } else {
                echo "<p>No hay productos registrados.</p>";
            }

            $stmt->close();
            $conexion->conn->close();
        ?>
    </div>

    <div class="container py-4">
        <button id="btn-modo-oscuro" class="btn btn-secondary">Modo Oscuro</button>
        <p class="mt-3">Este es un texto de prueba para ver el efecto del modo oscuro.</p>
    </div>

    <script src="product.js"></script>
</body>
</html>
