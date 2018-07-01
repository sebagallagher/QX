<?php

class ControladorUsuarios{

/* Ingreso de Usuario */

    public function ctrIngresoUsuario(){

        if(isset($_POST["IngUsuario"])){

            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["IngUsuario"] ) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["IngPassword"] )){

               $tabla = "usuarios";

               $item ="usuario";
               $valor = $_POST["IngUsuario"];

               $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);

               if($respuesta["usuario"] == $_POST["IngUsuario"] &&
                  $respuesta["password"] == $_POST["IngPassword"]){


                   // echo '<br><div class="alert alert-success"> Bienvenidos al Sistema </div>';

                   $_SESSION["iniciarSession"] = "ok";

                    echo '<script>

                        window.location = "inicio";

                     </script>';



                }else{

                    echo '<br><div class="alert alert-danger"> Error al ingresar, vuelve a intentarlo </div>';

                }

            }

        }

    }

}

?>