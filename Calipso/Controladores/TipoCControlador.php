<?php


if ($peticionAjax == true) {
    require_once "../Modelos/TipoCModelo.php";
    } else {
       require_once "./Modelos/TipoCModelo.php";
    }

    class TipoCControlador extends TipoCModelo {

        public function MostrarTipoC(){
            $FilasTC = TipoCModelo::Mostrar_TipoC_Modelo();
            $url = SERVERURL."Ajax/TipoCAjax.php";
            $results = $FilasTC->fetchAll();
            $data = array();
            $filteredes_row = $FilasTC->rowCount();
            $credi = "";
            foreach($results as $row ){
               if($row["CREDITO"] == 0){
                  $credi = "CONTADO";
               }else{
                  $credi = "CRÉDITO";
               }
               $sub_array = array();
               $sub_array[] = $row["COD_TP_C"];
               $sub_array[] = $row["NOMBRE"];
               $sub_array[] = $credi;
               $sub_array[] = '<i class="bttool fas fa-pencil-alt" style="color: orange" data-toggle="tooltip" data-placement="left" title="Editar" 
                onclick="Modificar1(datos = ['."'#ID'".','."'#inputUserName'".'],datos =
                 ['."'".$row["COD_TP_C"]."'".','."'".$row["NOMBRE"]."'".']);"></i> <i 
                  data-toggle="tooltip" data-placement="right" title="Borrar" style="color: red" onclick="borrar('.$row["COD_TP_C"].','."'".$url."'".');" style="color: aliceblue"  
                  class="fas fa-trash bttool" id="borrar"></i>';
               $data[] = $sub_array;

            }
          $output = array(
             "draw"            => intval(0),
             "recordsTotal"    => $filteredes_row,
             "recodrsFiltered" => $filteredes_row,
             "data"            => $data
          );
                  return json_encode($output); 
             }

             function mostrarTC(){
               $FilasTC = TipoCModelo::Mostrar_TipoC_Modelo();
               
            foreach($FilasTC as $row){
                     $datos .= '<option value="'.$row["COD_TC_F"].'">'.$row["NOMBRE"].'</option>';
                  }
                  return $datos;
             }


             public function InsertarTipoC($datos){
               $nombre = $datos[1];
               
               $verifica = mainModel::ejecutar_consulta_simple("SELECT * FROM tipo_cliente where NOMBRE = '$nombre'");
               if($verifica->rowCount()>=1){
                  $Alerta = [
                     "Alerta"=>"simple",
                    "Titulo"=>"Este <b>cliente</b> ya existe!",
                     "Texto"=>"",
                     "Tipo"=> "warning"
                  ]; 
               }
               else{

               
               $FilasTC = TipoCModelo::Insertar_TipoC_Modelo($datos);
               $url = SERVERURL."Ajax/TipoCAjax.php";
                  if($FilasTC->rowCount() >= 1){
                   $Alerta = [
                       "Alerta"=>"limpiar",
                      "Titulo"=>"¡Excelente!",
                       "Texto"=>"El tipo de cliente se agrego correctamente",
                       "Tipo"=> "success",
                       "url"=>$url
                    ];
                  }else{
                   $Alerta = [
                       "Alerta"=>"simple",
                       "Titulo"=>"Error!",
                       "Texto"=>"El tipo de cliente no se pudo agregar correctamente",
                       "Tipo"=> "error"
                    ];
                  }
               }
                     
                  return mainModel::sweet_alert($Alerta);


                        
                }

                public function ModificarTipoC($datos){
           
                  $FilasTC = TipoCModelo::Modificar_TipoC_Modelo($datos);
                  $url = SERVERURL."Ajax/TipoCAjax.php";
                     if($FilasTC->rowCount() >= 1){
                      $Alerta = [
                          "Alerta"=>"limpiar",
                          "Titulo"=>"¡Excelente!",
                          "Texto"=>"El tipo de cliente se Modificar correctamente",
                          "Tipo"=> "success",
                          "url"=>$url
                       ];
                     }else{
                      $Alerta = [
                          "Alerta"=>"simple",
                          "Titulo"=>"Error!",
                          "Texto"=>"El tipo de cliente no se Modificar correctamente, no se ha hecho ningun cambio al nombre",
                          "Tipo"=> "warning"
                       ];
                     }
                   
                        
                     return mainModel::sweet_alert($Alerta);
                          
                   }

                   public function BorrarTipoC($Id){
           
                     $FilasTC = TipoCModelo::Borrar_TipoC_Modelo($Id);
                    
                        if($FilasTC->rowCount() >= 1){
                         $Alerta = [
                             "Alerta"=>"simple",
                             "Titulo"=>"¡Excelente!",
                             "Texto"=>"El tipo de cliente se borro correctamente",
                             "Tipo"=> "success"
                          ];
                        }else{
                         $Alerta = [
                             "Alerta"=>"simple",
                             "Titulo"=>"Error!",
                             "Texto"=>"El tipo de cliente no se borro correctamente",
                             "Tipo"=> "error"
                          ];
                        }
                      
                           
                        return mainModel::sweet_alert($Alerta);
                             
                      }


        }