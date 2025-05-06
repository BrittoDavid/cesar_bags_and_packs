<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="formulario";
    
    $enlace = mysqli_connect($servidor, $usuario,  $clave, $baseDeDatos);
    
    if(!$enlace){
        echo"Error en la conexión del servidor";
    }
  ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario De Registro</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
    <div class="contenedor">
        <form action="#" class="formulario" id="formulario" name="formulario" method="POST">
            <div class="contenedor-inputs">
                <h1> Login Form </h1><!-- comment -->
                <input type="text" name="nombre"placeholder="Nombre">
                <input type="text" name="correo" placeholder="Correo">

                <div class="sexo">
                    <input type="radio" name="sexo" id="hombre" value="hombre">
                    <label class="label-radio hombre" for="hombre">Hombre</label>

                    <input type="radio" name="sexo" id="mujer" value="mujer">
                    <label class="label-radio mujer" for="mujer">Mujer</label>
                </div>

                <div class="terminos">
                    <input type="checkbox" name="terminos" id="terminos">
                    <label for="terminos">Acepto Terminos y Condiciones</label>
                </div>

                <ul class="error" id="error"></ul>
            </div>

            <input type="submit" class="btn" name="registrarse" value="Registrate">
        </form>
        <div class="tabla">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Sexo</th>
                </tr>
                     </tbody></table>
		</div>
	</div>
     
	<script src="formulario.js"></script>
        
Connected successfully 
  
  </body></html>


<?php
        if(isset($_POST['registrarse']))
        {
            $nombre=$_POST["nombre"];
            $correo=$_POST["correo"];
            $sexo=$_POST["sexo"];
            $id=rand(1,99);

            $insertarDatos = "INSERT INTO datos VALUES ('$nombre',
                                                        '$correo',
                                                        '$sexo',
                                                        '$id')";
            
            $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if(!$ejecutarInsertar){
            echo "Error En La Linea de SQL";
        }
        }


    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="formulario";
    
    $conn = mysqli_connect($servidor, $usuario,  $clave, $baseDeDatos);
    
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
                }
        echo "Connected successfully";
    mysqli_close($conn);
  ?> 
  
  