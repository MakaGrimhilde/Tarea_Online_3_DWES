<?php

    $errores = []; //array que recogerá los errores que puedan darse en la recogida de datos del formulario

    //variables para los campos del formulario
    $usuario = "";
    $passwd = "";

    /**
     * función que muestra un mensaje de error en función de si el array errores recoge algún error
     * en alguno de los campos
     *
     * @param string $errores
     * @param string $campo
     * @return string $alert que mostrará el error en cuestión
     */
    function mensajeError($errores, $campo){

        $alert = "";

        if (isset($errores[$campo]) && !empty($campo)){

            $alert = '<div class="alert alert-danger">'.$errores[$campo].'</div>';

        }

        return $alert;

    }

    /**
     * función que muestra un mensaje informando de que el formulario se ha validado correctamente si el array
     * errores está vacío
     *
     * @param string $errores
     * @return string 
     */
    function validar($errores){

        if (isset($_POST["boton"]) && count($errores) == 0){

            return '<div class="alert alert-success">Formulario validado correctamente</div>';
        }

    }

    /**
     * función que filtra los valores introducidos en los campos del formulario
     *
     * @param string $dato
     * @return string $dato 
     */
    function filtrar($dato){

        $dato = trim($dato); 
        $dato = stripslashes($dato); 
        $dato = htmlspecialchars($dato); 
        
        return $dato;

    }


    if(isset($_POST["boton"])){

        if (!empty($_POST["usuario"]) && strlen($_POST["usuario"]) <= 20 && !preg_match("/[0-9]/", $_POST["usuario"])
        && !is_numeric($_POST["usuario"])){

            $usuario = filtrar($_POST["usuario"]);
            $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
           

        } else { //de lo contrario, se mostrará el siguiente mensaje de error

            $errores["usuario"] = "Este campo debe ser rellenado y tener una longitud
            máxima de 20 caracteres";

        }

        if (!empty($_POST["password"]) && strlen($_POST["password"]) >= 6){

            $passwd = sha1($_POST["password"])."<br/>";

        } else { //de lo contrario, se mostrará el siguiente mensaje de error

            $errores["password"] = "La contraseña debe tener una longitud mayor que 6 caracteres";
           
        }

    }

?>