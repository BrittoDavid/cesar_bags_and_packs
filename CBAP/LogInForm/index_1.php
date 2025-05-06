<?php
// Conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "formulario";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Error en la conexión del servidor: " . mysqli_connect_error());
}

// Manejo del formulario
if (isset($_POST['registrarse'])) {
    $nombre = mysqli_real_escape_string($enlace, $_POST["nombre"]);
    $correo = mysqli_real_escape_string($enlace, $_POST["correo"]);
    $sexo = mysqli_real_escape_string($enlace, $_POST["sexo"]);

    $insertarDatos = "INSERT INTO datos (nombre, correo, sexo) VALUES ('$nombre', '$correo', '$sexo')";

    if (mysqli_query($enlace, $insertarDatos)) {
        echo "<p style='color: green;'>Registro exitoso.</p>";
    } else {
        echo "<p style='color: red;'>Error en la consulta: " . mysqli_error($enlace) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Formulario De Registro</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<div class="contenedor">
    <form class="formulario" id="formulario" method="POST">

        <div>
            <h1>Login Form</h1> </div>

        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>

        <div class="sexo">
            <input type="radio" name="sexo" id="hombre" value="hombre" required>
            <label for="hombre">Hombre</label>

            <input type="radio" name="sexo" id="mujer" value="mujer">
            <label for="mujer">Mujer</label>
        </div>

        <div class="terminos">
            <input type="checkbox" name="terminos" id="terminos" required>
            <label for="terminos">Acepto Términos y Condiciones</label>
        </div>

        <input type="submit" class="btn" name="registrarse" value="Registrarse">
    </form>

    <div class="tabla">
        <h2>Usuarios Registrados</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Sexo</th>
            </tr>
            <?php
            $consulta = "SELECT * FROM datos";
            $resultado = mysqli_query($enlace, $consulta);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>
                        <td>{$fila['id']}</td>
                        <td>{$fila['nombre']}</td>
                        <td>{$fila['correo']}</td>
                        <td>{$fila['sexo']}</td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</div>

<script src="formulario.js"></script>

</body>
</html>

<?php
// Cerrar conexión
mysqli_close($enlace);
?>
