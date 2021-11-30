<?php

session_start();

if (!isset($_SESSION["login"])){

    Header('Location:login.php?error=fuera');

}

?>

<html lang="es">
    <head>
        <?php require 'includes/head.php';?>
    </head>
    <body>
        <?php require 'includes/header.php';?>
        <br/>
        <div class="row justify-content-center">
            <h2>Mi sitio - Inicio</h2>
        </div>
        <div class="row justify-content-center">
            <h4>Bienvenido/a <?php echo $_SESSION["usuario"];?></h4>
        </div>
        <br/>
        <?php require 'includes/footer.php';?>
    </body>
</html>