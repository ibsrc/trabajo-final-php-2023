<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Login</title>
</head>
<body>

    <header>
        <nav class="navbar">
         <ul>
            <li><a  href="../index.php">Inicio</a></li>
            <?php
                if(isset($_SESSION["rol"])=="user"){

                echo "<li><a>Citas</a></li>";
                }
            ?>
            <li><a  href="./noticias.php">Noticias</a></li>
            <li><a  href="./registro.php">Registro</a></li>
            <li><a class="current" href="./login.php">Login</a></li>
         </ul>
        </nav>
    </header>
    <?php
        include("dbconfig.php");
        if(isset($_POST["enviar"])){

            //--Recoger información del formulario
            $usuario=$_POST['usuario'];
            $contrasena=$_POST['contrasena'];
        
            //Conectar con el servidor
            $conn=mysqli_connect($servername,$username, $password);
            if(!$conn){
                echo'No se pudo establecer conexión con el servidor:';
            }else{
                //Seleccionamos Base de datos
                $base=mysqli_select_db($conn, $dbname);
                if(!$base){
                echo'No se encontro la base de datos:';
                }else{
                    $sql = "SELECT * FROM user_data WHERE usuario='".$usuario."' and password='".$contrasena."'";
                    //echo $sql;
                    $info=mysqli_query($conn, $sql);
                    if (mysqli_query($conn, $sql)) {
                    echo "<p>Bienvenido</p>";
                    $row=mysqli_fetch_array($info);
                    $_SESSION["rol"]=$row["rol"];
                    $_SESSION["nombre"]= $row["nombre"];
                    echo $_SESSION["nombre"];
                    }else {
                     echo "<p>El usuario no existe</p>";
                    }
                }
            }
            $conn->close();
        }
    ?>
    <h2>Login</h2>
    <fieldset>
        <legend>Identificate</legend>
            <form action="login.php" method="post">
                <label for="usuario"><strong>Usuario:</strong> </label>
                <input class=datos type="text" id="usuario" name="usuario" required><br><br>

                <label for="contrasena"><strong>Contraseña:</strong> </label>
                <input class=datos type="password" id="contrasena" name="contrasena" required><br><br>

                <input type="submit" value="Enviar" name="enviar">
            </form>
    </fieldset>        

                
</body>
<footer>
    <h2>Mi página web<br>Trabajo final PHP<br></h2>
        <div>
            <a href="https://www.facebook.com/"><img class="item" src="../assets/iconos/iconofacebook.jpg" alt="facebook"></a>
        
            <a href="https://twitter.com/"><img class="item" src="../assets/iconos/iconotwitter.jpg" alt="twitter"></a>
        </div>
        <p><strong>2023</strong> .Todos los derechos reservados</p>
</footer>
</html>