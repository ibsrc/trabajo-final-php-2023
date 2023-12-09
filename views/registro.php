<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Formulario de registro</title>
</head>
<body>
    <?php
        include("dbconfig.php");
        if(isset($_POST["registrar"])){

            //--Recoger información del formulario
            $nombre=$_POST['nombre'];
            $apellidos=$_POST['apellidos'];
            $email=$_POST['email'];
            $telefono=$_POST['telefono'];
            $fnac=$_POST['fnac'];
            $direccion=$_POST['direccion'];
            $sexo=$_POST['sexo'];
            $usuario=$_POST['usuario'];
            $contrasena=$_POST['contrasena'];
            $registrar=$_POST['registrar'];
            $fregis = date('Y-m-d');
            $rol="user";

            //Conectar con el servidor
            $link=mysqli_connect('localhost:3307','root','');
            if(!$link){
                echo'No se pudo establecer conexión con el servidor:';
            }else{
                //Seleccionamos Base de datos
                $base=mysqli_select_db($link,'trabajo_final_php' );
                if(!$base){
                    echo'No se encontro la base de datos:';
                }else{
                    $sql = "INSERT INTO user_data (nombre, apellidos, email, telefono, f_nac, direccion, sexo, usuario, password, rol) VALUES ('".$nombre."', '".$apellidos."', '".$email."', '".$telefono."','".$fnac."','".$direccion."','".$sexo."','".$usuario."','".$contrasena."', '".$rol."')";
                    //echo $sql;
                    if (mysqli_query($link, $sql)) {
                        echo "Nuevo registro guardado con exito";
                    } else {
                        echo "Error: " . $sql . "" . mysqli_error($link);
                    }
                }
            }
            $link->close();
        }
    ?>
    <header>
        <nav class="navbar">
         <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="./noticias.php">Noticias</a></li>
            <li><a class="current" href="./registro.php">Registro</a></li>
            <li><a  href="./login.php">Login</a></li>
         </ul>
        </nav>
    </header>
    <h2>Registro</h2>
</body>



    <fieldset>
        <legend><strong>Formulario de registro</strong></legend>
            <form action="registro.php" method="post">
                <label for="nombre"><strong>Nombre:</strong> </label>
                <input class="datos" type="text" id="nombre" name="nombre" required><br><br>

                <label for="apellidos"><strong>Apellido:</strong> </label>
                <input class="datos" type="text" id="apellidos" name="apellidos" required><br><br>

                <label for="email"><strong>Email:</strong> </label>
                <input class="datos" type="email" id="email" name="email" required><br><br>

                <label for="telefono"><strong>Telefono:</strong> </label>
                <input class="datos" type="text" id="telefono" name="telefono" required><br><br>

                <label for="fnac"><strong>F. nacimiento:</strong> </label>
                <input class="datos" type="date" id="fnac" name="fnac" required><br><br>

                <label for="direccion"><strong>Dirección:</strong> </label>
                <input class="datos" type="text" id="direccion" name="direccion" required><br><br>

                <label for="sexo"><strong>Sexo:</strong> </label>
                <input class="datos" type="text" id="sexo" name="sexo" required><br><br>

                <label for="usuario"><strong>Usuario:</strong> </label>
                <input class="datos" type="text" id="usuario" name="usuario" required><br><br>

                <label for="contrasena"><strong>Contraseña:</strong> </label>
                <input class="datos" type="password" id="contrasena" name="contrasena" required><br><br>

                <input name=registrar type="submit" value="Registrar">

        </form>
    </fieldset>
<footer>
    <h2>Mi página web<br>Trabajo final PHP<br></h2>
        <div>
            <a href="https://www.facebook.com/"><img class="item" src="../assets/iconos/iconofacebook.jpg" alt="facebook"></a>
        
            <a href="https://twitter.com/"><img class="item" src="../assets/iconos/iconotwitter.jpg" alt="twitter"></a>
        </div>
        <p><strong>2023</strong> .Todos los derechos reservados</p>
</footer>
</html>