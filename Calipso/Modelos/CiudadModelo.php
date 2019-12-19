<?php

if ($peticionAjax == true) {
        require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class CiudadModelo extends mainModel{
        protected function Mostrar_Ciudad_Modelo()
        {
            $sql = mainModel::Mostrar("ciudad");
            return $sql;
        }

        protected function Buscar_Ciudad_Modelo($valor)
        {
            $sql = mainModel::Buscar("ciudad","NOMBRE",$valor);
            return $sql;
        }
        protected function Borrar_Ciudad_Modelo($id)
        {
            $sql = mainModel::Borrar("ciudad","COD_CD_F",$id); 
            return $sql;
        
        }
        protected function Insertar_Ciudad_Modelo($datos)
        {
            $sql = mainModel::insertar("ciudad",$datos);
            return $sql;
        
        }
        protected function Modificar_Ciudad_Modelo($datos)
        {
            $sql = mainModel::ModificarMODEL("ciudad","COD_CD_F",$datos);
            return $sql;
        
        }
        
    }
    