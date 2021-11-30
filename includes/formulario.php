<?php require 'includes/recibir.php';?>
<div class="row justify-content-center">
    <h2>Login de usuario</h2>
</div>
<div class="row justify-content-center">
            <!--Comienzo de la estructura del formulario. Los datos recogidos por el método POST serán recibidos en ejer_26.php-->    
            <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm">
                        <!--cuadro de texto para recoger el nombre-->
                        <label for="nombre">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario"
                            
                            <?php
                            
                                if(isset($_POST["usuario"])){
                                    echo "value='{$_POST["usuario"]}'";
                                }

                            ?>
                        />
                        <?php  echo mensajeError($errores, "usuario");?>    
                    </div>
                    <div class="col-sm">
                        <!--cuadro de texto para recoger la contraseña-->
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password"

                            <?php
                                if(isset($_POST["password"])){
                                    echo "value='{$_POST["password"]}'";
                                }
                            ?>  
                        />
                        <?php  echo mensajeError($errores, "password");?>  
                    </div>
                </div>
                <br/>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Recordar usuario
                    </label>
                </div>
                <br/>
                <!--botones para enviar los datos recogidos en el formulario y para limpiar los campos-->
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-primary" name="boton">Enviar</button>
                    <button type="reset" class="btn btn-primary">Limpiar</button>
                </div>
            </form> <!--Fin del formulario-->
        </div>