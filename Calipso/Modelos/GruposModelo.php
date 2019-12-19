<?php

if ($peticionAjax == true) {
        require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class GruposModelo extends mainModel{
        protected function Mostrar_Grupos_Modelo()
        {
            $sql = mainModel::conectar()->prepare("SELECT * FROM `maetro_permisos` "); 
            $sql->execute();
            return $sql;
        }

        protected function Buscar_Grupos_Modelo($valor)
        {
            $sql = mainModel::ejecutar_consulta_simple("SELECT * FROM `maetro_permisos` WHERE `NOMBRE` LIKE '%$valor%' "); 
            return $sql;
        }

        protected function Borrar_Grupos_Modelo($id)
        {
            if($id == 1){
                return "error";
            }else{

            
            $consulta = mainModel::ejecutar_consulta_simple("DELETE FROM `modulo_roles` WHERE `COD_GP_C` = '$id'"); 
            $sql = mainModel::ejecutar_consulta_simple("DELETE FROM `maetro_permisos` WHERE `COD_GP_C` = '$id'"); 
            return $sql;
        }
        }
        
    }