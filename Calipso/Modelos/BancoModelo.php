<?php

if ($peticionAjax == true) {
        require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class BancoModelo extends mainModel{
        protected function Mostrar_Banco_Modelo()
        {
            $sql = mainModel::Mostrar("bancos");
          
            return $sql;
        }

        protected function Buscar_Banco_Modelo($valor)
        {
            $sql = mainModel::Buscar("bancos","NOMBRE",$valor);
            return $sql;
        }

        protected function Borrar_Banco_Modelo($id)
        {
            $sql = mainModel::Borrar("bancos","ID",$id);
            return $sql;
        
        } 

        protected function Insertar_banco_Modelo($datos)
        {
            $sql = mainModel::insertar("bancos",$datos);
            return $sql;
        
        }
        protected function Modificar_banco_Modelo($datos)
        {
            $sql = mainModel::ModificarMODEL("bancos","ID",$datos);
            return $sql;
        
        }
        
    }