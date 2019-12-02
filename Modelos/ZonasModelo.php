<?php

if ($peticionAjax == true) {
        require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class ZonasModelo extends mainModel{
        protected function Mostrar_Zonas_Modelo()
        {
            $sql = mainModel::Mostrar("zona");
            return $sql;
        }

     
        protected function Borrar_Zonas_Modelo($id)
        {
            $sql = mainModel::Borrar("zona","COD_ZN_F",$id);
            return $sql;
        
        }
         
        protected function Insertar_zona_Modelo($datos)
        {
            $sql = mainModel::insertar("zona",$datos);
            return $sql;
        
        } 

        protected function Modificar_zona_Modelo($datos)
        {
            $sql = mainModel::ModificarMODEL("zona","COD_ZN_F",$datos);
            return $sql;
        
        } 

    }