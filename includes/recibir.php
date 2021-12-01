<?php

$usuarioCorrecto = "Maka";
$passwordCorrecto = "12345";

if (isset($_POST["boton"])){

    if (isset($_POST["usuario"]) and isset($_POST["password"]) || !empty($_POST["usuario"] and !empty($_POST["password"]))){

        if ($_POST["usuario"] == $usuarioCorrecto and $_POST["password"] == $passwordCorrecto){

            session_start();
            $_SESSION["login"] = $_POST["usuario"];
            $_SESSION["usuario"] = $_POST["usuario"];

            if (isset($_POST["recuerdame"]) and ($_POST["recuerdame"] == "on")){

                setcookie("usuario", $_POST["usuario"], time() + (365 * 24 * 60 * 60));
                setcookie("password", $_POST["password"], time() + (365 * 24 * 60 * 60));
                setcookie("recuerdame", $_POST["recuerdame"], time() + (30 * 24 * 60 * 60));

            } else {

                if (isset($_COOKIE["usuario"])){

                    setcookie("usuario", "");
                }

                if (isset($_COOKIE["password"])){

                    setcookie("password", "");
                }

                if (isset($_COOKIE["recuerdame"])){

                    setcookie("recuerdame", "");
                }
            }

            if (isset($_POST["mantener"]) and $_POST["mantener"] == "on"){

                setcookie("mantener", $_POST["usuario"], time() + (15 * 24 * 60 * 60));

            } else {

                if (isset($_COOKIE["mantener"])){

                    setcookie("mantener", "");

                }
            }

            Header('Location:inicio.php');

        } else {

            Header('Location:login.php?error=dato');
        }

    }

}

?>