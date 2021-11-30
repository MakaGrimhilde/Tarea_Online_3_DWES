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
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario"
                            
                            <?php
                            
                                if(isset($_COOKIE["usuario"])){
                                    echo "value='{$_COOKIE["usuario"]}'";
                                }

                            ?>
                        />  
                    </div>
                    <div class="col-sm">
                        <!--cuadro de texto para recoger la contraseña-->
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password"

                            <?php
                                if(isset($_COOKIE["password"])){
                                    echo "value='{$_COOKIE["password"]}'";
                                }
                            ?>  
                        />  
                    </div>
                </div>
                <br/>
              
                
                <label>
                <input type="checkbox" name="recuerdame">
                    Recordar usuario
                </label>
               
                <br/>

                <?php
                    if(isset($_GET['error'])){

                        if ($_GET['error'] == "dato"){

                            echo '<div class="alert alert-danger row justify-content-center" style="margin-top:5px;">'. 
                            "El usuario y/o contraseña son incorrectos, inténtelo de nuevo<br/>".'</div>';

                        } elseif ($_GET['error'] == "fuera"){

                            echo '<div class="alert alert-danger row justify-content-center" style="margin-top:5px;">'. 
                            "Debe logearse antes para poder acceder a esta página<br/>".'</div>';          
                        }
                    }     
                ?>
                <br/>
                <!--botones para enviar los datos recogidos en el formulario y para limpiar los campos-->
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-primary" name="boton">Enviar</button>
                    <button type="reset" class="btn btn-primary">Limpiar</button>
                </div>
            </form> <!--Fin del formulario-->
        </div>