<?php

if ($peticionAjax == true) {
        require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class TipoVModelo extends mainModel{
        protected function Mostrar_TipoV_Modelo()
        {
            $sql = mainModel::Mostrar("tipo_vendedores");
            return $sql;
        }

       
        protected function Borrar_TipoV_Modelo($id)
        {
            $sql = mainModel::Borrar("tipo_vendedores","COD_TV_F",$id);
            return $sql;
        }
         
        protected function Insertar_TipoV_Modelo($datos)
        {
            $sql = mainModel::insertar("tipo_vendedores",$datos);
            return $sql;
        
        } 

        protected function Modificar_TipoV_Modelo($datos)
        {
            $sql = mainModel::ModificarMODEL("tipo_vendedores","COD_TV_F",$datos);
            return $sql;
        } 

    }