<?php
session_start();
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="formulario";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if(!$enlace){
    die("Error en la conexión con el servidor");
}

$mensajeError = ""; // Variable para mostrar errores en la página

if(isset($_POST['iniciar_sesion'])) {
    $correo = $_POST['correo'];

    // Validar si el correo existe en la base de datos
    $consulta = "SELECT * FROM datos WHERE correo='$correo'";
    $resultado = mysqli_query($enlace, $consulta);

    if(mysqli_num_rows($resultado) > 0) {
        $_SESSION['usuario'] = $correo;
        // Redirección correcta con HTTP en lugar de file:///
        header("Location: http://localhost/templatemo_588_ebook_landing/index.html");
        exit();
    } else {
        $mensajeError = "Correo incorrecto o no registrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"> 
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="contenedor">
        <form action="" class="formulario" id="formulario" name="formulario" method="POST">
            <div class="contenedor-inputs">            
                <h2>Iniciar Sesión</h2>
                <input type="email" name="correo" placeholder="Correo" required>
                <div class="terminos">
                    <input type="checkbox" name="terminos" id="terminos">
                    <label for="terminos">Acepto Términos y Condiciones</label>
                </div>
                
                <input type="submit" class="btn" name="iniciar_sesion" value="Entrar">
                
                <!-- Mostrar error en rojo si el correo no está registrado -->
                <?php if(!empty($mensajeError)): ?>
                    <p style="color: red;"><?php echo $mensajeError; ?></p>
                <?php endif; ?>
            </div>
        </form>
    </div>
</body>
</html>
