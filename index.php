<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Mi Sitio Web</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a class="current" href="index.php">Inicio</a></li>
                <li><a href="./views/noticias.php">Noticias</a></li>
                <li><a href="./views/registro.php">Registro</a></li>
                <li><a href="./views/login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <p>Bienvenido <?php
            echo $_SESSION["nombre"];
            ?>
        
        
        </p>
        <div class="caja1">
            <img src="./assets/images/arbol1.jpg" alt="arbol1">
            <img src="./assets/images/arbol2.jpg" alt="arbol2">
            <img src="./assets/images/arbol3.jpg" alt="arbol3">
        </div>    
        <h1>Trabajo final: PHP</h1>
        <h2>INSTRUCCIONES</h2>
<p>Como ejercicio final del módulo se debe crear un sitio web, podrá ser de una
empresa ficticia o vuestro sitio como programadores web. La información no
tiene por qué ser real.
Para la realización de este proyecto deberéis utilizar: HTML5, CSS3, JavaScript,
SQL y PHP.
El proyecto se debe entregar como un archivo comprimido que contenga la
carpeta completa del sitio web, incluyendo en el mismo la base de datos (archivo sql) que has creado.</p><br><br>
<strong>ESPECIFICACIONES GENERALES DEL SITIO WEB</strong>
<p>La primera parte del ejercicio se compondrá de dos apartados:<br>- Base de datos del sitio web con sus tablas.<br>-  Sitio web con varias páginas.</p><br><br>
<strong>LOS USUARIOS</strong>
<p>Cuando un visitante inicia sesión a través de la página de login y en sus credenciales tiene el rol: user, se convierte en un usuario.<br>Un usuario tendrá acceso a nuevas páginas, además del index y noticias.</p><br><br>
<strong>LOS ADMINISTRADORES</strong>
<p>Cuando un visitante inicia sesión a través de la página de login y en sus credenciales tiene el rol: admin, se convierte en un administrador.<br>Un administrador tendrá acceso a nuevas páginas, además del index, noticias.<br>La barra de navegación de un administrador deberá mostrar las siguientes secciones:<br>
- index<br>
- noticias<br>
- usuarios-administracion<br>
- citaciones-administracion<br>
- noticias-administracion<br>
-  perfil<br>
- cerrar sesión</p>


    </main>
   
    <footer>
        <h2>Mi página web<br>Trabajo final PHP<br></h2>
            <div>
                <a href="https://www.facebook.com/"><img class="item" src="./assets/iconos/iconofacebook.jpg" alt="facebook"></a>
            
                <a href="https://twitter.com/"><img class="item" src="./assets/iconos/iconotwitter.jpg" alt="twitter"></a>
            </div>
            <p><strong>2023</strong> .Todos los derechos reservados</p>
    </footer>


</body>
</html>


