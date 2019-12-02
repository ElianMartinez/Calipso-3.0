<?php
 if ($peticionAjax == true) {
      require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class VendedoresModelo extends mainModel{
        protected function Mostrar_vendedores_Modelo()
        {
            $sql = mainModel::ejecutar_consulta_simple("select A.COD_VND_F, A.NOMBRE, A.CEDULA, B.NOMBRE as tipoV, A.SEXO, A.EST_CIVIL from vendedores as A, tipo_vendedores as B WHERE A.COD_TV_F = B.COD_TV_F LIMIT 81");
            return $sql;
        }

         function Busqueda_vendedores_Modelo($NOMBRE,$SEXO,$TV)
        {
           
                $SQL =  'SELECT  A.COD_VND_F, A.NOMBRE, A.CEDULA, B.NOMBRE as tipoV, A.SEXO, A.EST_CIVIL FROM vendedores as A, tipo_vendedores as B WHERE   A.NOMBRE like "%'.$NOMBRE.'%" and A.SEXO = "'.$SEXO.'"   and A.COD_TV_F = B.COD_TV_F AND A.COD_TV_F = '.$TV.' ';            

           
           $sql1 = mainModel::ejecutar_consulta_simple($SQL);
         
            return $sql1;
         
            
           
        }

     
        protected function Borrar_vendedores_Modelo($id)
        {
            $sql = mainModel::Borrar("vendedores","COD_VND_F",$id);
            return $sql;
        }
         
        protected function Insertar_vendedores_Modelo($datos)
        {
            $sql = mainModel::insertar("vendedores",$datos);
            return $sql;
        } 

        protected function Modificar_vendedores_Modelo($datos)
        {
            $sql = mainModel::ModificarMODEL("vendedores","COD_VND_F",$datos);
            return $sql;
        } 
         

    } 

    