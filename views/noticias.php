<?php
    session_start();
?>
<?php
include("dbconfig.php");
//Conectar con el servidor
$link=mysqli_connect('localhost:3307','root','');
if(!$link){
    echo'No se pudo conectar con el servidor:';
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'trabajo_final_php');
    if(!$base){
        echo'No se encontro la base de datos:';
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM noticias";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Error en la sentencia SQL:';
      }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Noticias</title>
</head>
<body>
    <header>
        <nav class="navbar">
         <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a class="current" href="./noticias.php">Noticias</a></li>
            <li><a  href="./registro.php">Registro</a></li>
            <li><a href="./login.php">Login</a></li>
         </ul>
        </nav>
    </header>
    <p>Bienvenido <?php
            echo $_SESSION["nombre"];
            ?>
    
    <h1>Noticias</h1>
        <?php
            while($row=mysqli_fetch_array($ejecuta_sentencia))
               
            {   
                echo "<div class='noticias'>";
                    
                    echo"<h2>".$row['titulo']."</h2>";
                    echo"<p class='fecha'>".$row['fecha']."</p>";
                    echo"<div class='not'>";
                        echo"<img class='imgnot' src='./../assets/images/".$row['imagen']."'>";
                        echo"<p>".$row['texto']."</p>";
                    echo "</div>";
                echo "</div>";
            }
        ?>
        
    <footer>
    <h2>Mi página web<br>Trabajo final PHP<br></h2>
        <div>
            <a href="https://www.facebook.com/"><img class="item" src="../assets/iconos/iconofacebook.jpg" alt="facebook"></a>
        
            <a href="https://twitter.com/"><img class="item" src="../assets/iconos/iconotwitter.jpg" alt="twitter"></a>
        </div>
        <p><strong>2023</strong> .Todos los derechos reservados</p>
</footer>
</body>




</html>