<?php

$usuarioCorrecto = "Maka";
$passwordCorrecto = "12345";

if (isset($_POST["boton"])){

    if (isset($_POST["usuario"]) and isset($_POST["password"]) and !empty($_POST["usuario"] and !empty($_POST["password"]))){

        if ($_POST["usuario"] == $usuarioCorrecto and $_POST["password"] == $passwordCorrecto){

            session_start();
            $_SESSION["login"] = 1;
            $_SESSION["usuario"] = $_POST["usuario"];

            Header('Location:inicio.php');

        } else {

            Header('Location:login.php?error=dato');
        }

    }

}

?>