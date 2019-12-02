<?php

if ($peticionAjax == true) {
        require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class CambiarConfiguracionModelo extends mainModel{
        protected function cambiarConfiguracion_Modelo($user,$pass)
        {
            try{
            $sql = mainModel::ejecutar_consulta_simple("UPDATE `control` set ACCESO = '$pass' where USUARIO = '$user'"); 

            if($sql->rowCount()==1){
                return "SI";
            }else{
                return "No puede ser la misma contraseña";
            }
          }catch(Exception $e){
                return $e->getMessage();
          }
        }
       
    }