<?php

if ($peticionAjax == true) {
        require_once "../core/mainModel.php";
    } else {
       require_once "./core/mainModel.php";
    }

    class UsuarioModelo extends mainModel{
        protected function Mostrar_Usuario_Modelo()
        {
            $sql = mainModel::conectar()->prepare("SELECT B.COD_GP_C as GRUPOC, A.IMG, A.ID,A.USUARIO,A.NOMBRE,A.COMENTARIO,B.NOMBRE as GRUPO,A.MONTO_1,A.MONTO_2,A.MONTO_F FROM control as A, maetro_permisos as B Where A.COD_GP_C = B.COD_GP_C  "); 
            $sql->execute();
            return $sql;
        }

        protected function Buscar_Usuario_Modelo($valor)
        {
            $sql = mainModel::ejecutar_consulta_simple("SELECT B.COD_GP_C as GRUPOC, A.IMG, A.ID,A.USUARIO,A.NOMBRE,A.COMENTARIO,B.NOMBRE as GRUPO,A.MONTO_1,A.MONTO_2,A.MONTO_F FROM `control` as A, maetro_permisos as B Where  (A.USUARIO LIKE '%$valor%' OR A.COMENTARIO LIKE '%$valor%' OR A.NOMBRE LIKE '%$valor%') and A.COD_GP_C = B.COD_GP_C  "); 
            return $sql;
        }

        protected function Buscar_UsuarioVeri_Modelo($valor)
        {
            $sql = mainModel::ejecutar_consulta_simple("SELECT * FROM `control` WHERE `USUARIO` = '$valor'"); 
            
            if($sql->rowCount()>=1){
                $respuesta = true;
            }else{
                $respuesta = false;
            }
            return $respuesta;
        }

        protected function Modificar_usuario_Modelo($id,$nombre,$grupo,$usuario,$clave1,$comentario,$monto,$acumulado,$fac)
        {
 
            $sql = mainModel::ejecutar_consulta_simple("UPDATE `control` SET `USUARIO`='$usuario',`NOMBRE`='$nombre',`ACCESO`='$clave1',`COD_GP_C`='$grupo',`COMENTARIO`='$comentario',`MONTO_1`='$monto',`MONTO_2`='$acumulado',`MONTO_F`='$fac'  WHERE `ID` = '$id'"); 
            
            return $sql;
        }


       
        
    }



