<?php

if ($peticionAjax == true) {
        require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class TipoCModelo extends mainModel{
        protected function Mostrar_TipoC_Modelo()
        {
            $sql = mainModel::Mostrar("tipo_cliente");
            return $sql;
        }

       
        protected function Borrar_TipoC_Modelo($id)
        {
            $sql = mainModel::Borrar("tipo_cliente","COD_TP_C",$id);
            return $sql;
        }
         
        protected function Insertar_TipoC_Modelo($datos)
        {
            $sql = mainModel::insertar("tipo_cliente",$datos);
            return $sql;
        
        } 

        protected function Modificar_TipoC_Modelo($datos)
        {
            $sql = mainModel::ModificarMODEL("tipo_cliente","COD_TP_C",$datos);
            return $sql;
        } 

    }