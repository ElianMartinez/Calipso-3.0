<?php

if ($peticionAjax == true) {
        require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class ImpuestosModelo extends mainModel{
        protected function Mostrar_Impuestos_Modelo()
        {
            $sql = mainModel::Mostrar("impuestos");
            return $sql;
        }

        protected function Buscar_Impuestos_Modelo($valor)
        {
            $sql = mainModel::Buscar("impuestos","RESUMEN",$valor);
            return $sql;
        }
        protected function Borrar_Impuestos_Modelo($id)
        {
            $sql = mainModel::Borrar("impuestos","COD_IR_F",$id);
            return $sql;
        
        }
         
        protected function Insertar_Impuestos_Modelo($datos)
        {
            $sql = mainModel::insertar("impuestos",$datos);
            return $sql;
        
        } 

        protected function Modificar_Impuestos_Modelo($datos)
        {
            $sql = mainModel::ModificarMODEL("impuestos","COD_IR_F",$datos);
            return $sql;
        
        } 

    }