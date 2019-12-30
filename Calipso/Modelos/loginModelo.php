<?php

if ($peticionAjax == true) {
        require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class loginModelo extends mainModel{
        protected function iniciar_sesion_modelo($datos)
        {
            $sql = mainModel::conectar()->prepare("SELECT * FROM `control` WHERE `USUARIO` =:usuario and `ACCESO`= :pass "); 
            $sql->bindParam(":usuario",$datos["usuario"]);
            $sql->bindParam(":pass",$datos["pass"]);
            $sql->execute();
            return $sql;
        }
        protected function cerrar_sesion_modelo($datos){
            if ($datos['Usuario']!="") {
                  session_unset();
                  session_destroy();
                  $respuesta = "true";
               
            } else {
               $respuesta = "false";
            }
            return $respuesta;
        }


        protected function iniciar_permisos_modelo($role,$Permiso)
        {
           $sql = mainModel::conectar()->prepare("SELECT A.PERMISO FROM maetro_permisos AS B,modulo_roles AS A WHERE B.COD_GP_C = A.COD_GP_C AND B.COD_GP_C = :roless and A.NOMBRE = :Permisos "); 
            $sql->bindParam(":roless",$role);
            $sql->bindParam(":Permisos",$Permiso);
         $sql->execute();
            return $sql;
        }
    }