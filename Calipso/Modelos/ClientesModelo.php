<?php
 if ($peticionAjax == true) {
      require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class ClientesModelo extends mainModel{
        protected function Mostrar_Clientes_Modelo()
        {
            $sql = mainModel::ejecutar_consulta_simple("select tc.COD_IR_F,tc.COD_TP_C,tc.COD_TP_I ,tc.COMISION ,tc.COSTO ,tc.COSTO_CT ,tc.CREDITO ,tc.CTA ,tc.CTA_D,tc.CTRL_PRE,tc.DESCUENTO,tc.DIAS_ADD,tc.DIAS_COBRO,tc.EMPRESA,tc.IMPUESTO,tc.LIMITE_CR,tc.NOMBRE,tc.NOTAS_1,tc.NOTAS_2,tc.NUMERO,tc.PRE_AUTO,tc.PRECIO,tc.PRECIO_CT,tc.PRIORIDAD,tc.PROFESION,tc.SOBREGIRO,tc.STATUC, tc.VALOR, i.NOMBRE as impuesto from tipo_cliente as tc,impuestos as i where tc.COD_IR_F = i.COD_IR_F");
          return $sql;
        }

         function Busqueda_Clientes_Modelo($NOMBRE,$SEXO,$TV)
        {
           
                $SQL =  'SELECT A.COD_TP_C,  A.NOMBRE, A.SEXO, A.CEDULA, A.EST_CIVIL, A.FEC_NAC, A.DIRECCION1, A.COD_CD_F, A.TELEFONO1, A.TELEFONO2, A.MIN_MES, A.COBRO_0, A.COBRO_1, A.COBRO_31, A.COBRO_61, A.COBRO_91, A.COBRO_121, A.PREC_CT_1, A.PREC_CT_2, A.PREC_CT_3, A.PREC_CT_4, A.PREC_CT_5, A.PREC_CR_1, A.PREC_CR_2, A.PREC_CR_3, A.PREC_CR_4, A.PREC_CR_5, A.STATUS, B.NOMBRE as tipoV, C.NOMBRE as Nciudad  FROM  Clientes as A, tipo_Clientes as B, ciudad as C WHERE A.COD_TV_F = B.COD_TV_F and A.COD_CD_F = C.COD_CD_F and A.NOMBRE like "%'.$NOMBRE.'%" and A.SEXO = "'.$SEXO.'"  AND A.COD_TV_F = '.$TV.' ';            

           
           $sql1 = mainModel::ejecutar_consulta_simple($SQL);
         
            return $sql1;
         
            
           
        }

     
        protected function Borrar_Clientes_Modelo($id)
        {
            $sql = mainModel::Borrar("Clientes","COD_TP_C",$id);
            return $sql;
        }
         
        protected function Insertar_Clientes_Modelo($datos)
        {
            $sql = mainModel::insertar("Clientes",$datos);
            return $sql;
        }  

        protected function Modificar_Clientes_Modelo($datos)
        {
            $sql = mainModel::ModificarMODEL("Clientes","COD_TP_C",$datos);
            return $sql;
        } 
         

    } 