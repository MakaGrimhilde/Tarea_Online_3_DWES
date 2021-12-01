<?php

session_start();

if (!isset($_SESSION["login"]) and !isset($_COOKIE["mantener"])){

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
            <h2>Mi sitio - Información</h2>
        </div>
        <div class="row justify-content-center">
            <h4>Bienvenido/a <?php 
            
            if (isset($_COOKIE["mantener"])){

                echo $_COOKIE["mantener"];

            } else {

                echo $_SESSION["usuario"];

            }
           
            ?></h4>
        </div>
        <br/>
        <div class="row justify-content-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eveniet temporibus ad, 
            ducimus minus pariatur consequatur odit quia quidem quos.
        </div>
        <br/>
        <?php require 'includes/footer.php';?>
    </body>
</html>