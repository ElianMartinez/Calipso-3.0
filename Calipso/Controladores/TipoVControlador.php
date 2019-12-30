<?php


if ($peticionAjax == true) {
    require_once "../Modelos/TipoVModelo.php";
    } else {
       require_once "./Modelos/TipoVModelo.php";
    }

    class TipoVControlador extends TipoVModelo {

        public function MostrarTipoV(){
            $Filasbanco = TipoVModelo::Mostrar_TipoV_Modelo();
            $url = SERVERURL."Ajax/TipoVAjax.php";
            $results = $Filasbanco->fetchAll();
            $data = array();
            $filteredes_row = $Filasbanco->rowCount();
            foreach($results as $row ){
               $sub_array = array();
               $sub_array[] = $row["COD_TV_F"];
               $sub_array[] = $row["NOMBRE"];
               $sub_array[] = '<i  class="bttool fas fa-pencil-alt" style="color: orange" data-toggle="tooltip" data-placement="left" title="Editar" 
                onclick="Modificar1(datos = ['."'#ID'".','."'#inputUserName'".'],datos =
                 ['."'".$row["COD_TV_F"]."'".','."'".$row["NOMBRE"]."'".']);"></i> <i 
                  data-toggle="tooltip" data-placement="right" title="Borrar" style="color: red" onclick="borrar('.$row["COD_TV_F"].','."'".$url."'".');" style="color: aliceblue"  
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

             function mostrarTV(){
               $Filasbanco = TipoVModelo::Mostrar_TipoV_Modelo();
               
            foreach($Filasbanco as $row){
                     $datos .= '<option value="'.$row["COD_TV_F"].'">'.$row["NOMBRE"].'</option>';
                  }
                  return $datos;
             }


             public function InsertarTipoV($datos){
               $nombre = $datos[1];
               
               $verifica = mainModel::ejecutar_consulta_simple("SELECT * FROM tipo_vendedores where NOMBRE = '$nombre'");
               if($verifica->rowCount()>=1){
                  $Alerta = [
                     "Alerta"=>"simple",
                    "Titulo"=>"Este <b>Vendedor</b> ya existe!",
                     "Texto"=>"",
                     "Tipo"=> "warning"
                  
                  ]; 
               }
               else{

               
               $FilasCiudad = TipoVModelo::Insertar_TipoV_Modelo($datos);
               $url = SERVERURL."Ajax/TipoVAjax.php";
                  if($FilasCiudad->rowCount() >= 1){
                   $Alerta = [
                       "Alerta"=>"limpiar",
                      "Titulo"=>"¡Excelente!",
                       "Texto"=>"El tipo de vendedor se agrego correctamente",
                       "Tipo"=> "success",
                       "url"=>$url
                    ];
                  }else{
                   $Alerta = [
                       "Alerta"=>"simple",
                       "Titulo"=>"Error!",
                       "Texto"=>"El tipo de vendedor no se pudo agregar correctamente",
                       "Tipo"=> "error"
                    ];
                  }
               }
                     
                  return mainModel::sweet_alert($Alerta);


                        
                }

                public function ModificarTipoV($datos){
           
                  $FilasZona = TipoVModelo::Modificar_TipoV_Modelo($datos);
                  $url = SERVERURL."Ajax/TipoVAjax.php";
                     if($FilasZona->rowCount() >= 1){
                      $Alerta = [
                          "Alerta"=>"limpiar",
                          "Titulo"=>"¡Excelente!",
                          "Texto"=>"El tipo de vendedor se Modificar correctamente",
                          "Tipo"=> "success",
                          "url"=>$url
                       ];
                     }else{
                      $Alerta = [
                          "Alerta"=>"simple",
                          "Titulo"=>"Error!",
                          "Texto"=>"El tipo de vendedor no se Modificar correctamente, no se ha hecho ningun cambio al nombre",
                          "Tipo"=> "warning"
                       ];
                     }
                   
                        
                     return mainModel::sweet_alert($Alerta);
                          
                   }

                   public function BorrarTipoV($Id){
           
                     $FilasZona = TipoVModelo::Borrar_TipoV_Modelo($Id);
                    
                        if($FilasZona->rowCount() >= 1){
                         $Alerta = [
                             "Alerta"=>"simple",
                             "Titulo"=>"¡Excelente!",
                             "Texto"=>"El tipo de vendedor se borro correctamente",
                             "Tipo"=> "success"
                          ];
                        }else{
                         $Alerta = [
                             "Alerta"=>"simple",
                             "Titulo"=>"Error!",
                             "Texto"=>"El tipo de vendedor no se borro correctamente",
                             "Tipo"=> "error"
                          ];
                        }
                      
                           
                        return mainModel::sweet_alert($Alerta);
                             
                      }


        }