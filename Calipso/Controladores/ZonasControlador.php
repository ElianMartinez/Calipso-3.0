<?php


if ($peticionAjax == true) {
    require_once "../Modelos/ZonasModelo.php";
    } else {
       require_once "./Modelos/ZonasModelo.php";
    }

    class ZonasControlador extends ZonasModelo {

        public function MostrarZonas(){
           
            $Filasbanco = ZonasModelo::Mostrar_Zonas_Modelo();
                $url = SERVERURL."Ajax/ZonasAjax.php";
            $results = $Filasbanco->fetchAll();
            $data = array();
            $filteredes_row = $Filasbanco->rowCount();
            foreach($results as $row ){
               $sub_array = array();
               $sub_array[] = $row["COD_ZN_F"];
               $sub_array[] = $row["NOMBRE"];
               $sub_array[] = $row["NOTA"];
               $sub_array[] = '<i class="bttool fas fa-pencil-alt" style="color: orange" data-toggle="tooltip" data-placement="left" title="Editar" 
                onclick="Modificar1(datos = ['."'#ID'".','."'#inputUserName'".','."'#nota'".'],datos =
                 ['."'".$row["COD_ZN_F"]."'".','."'".$row["NOMBRE"]."'".','."'".$row["NOTA"]."'".',]);"></i> <i 
                  data-toggle="tooltip" data-placement="right" title="Borrar" style="color: red" onclick="borrar('.$row["COD_ZN_F"].','."'".$url."'".');" style="color: aliceblue"  
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

             public function BorrarZonas($Id){
           
                $FilasZona = ZonasModelo::Borrar_Zonas_Modelo($Id);
               
                   if($FilasZona->rowCount() >= 1){
                    $Alerta = [
                        "Alerta"=>"simple",
                        "Titulo"=>"¡Excelente!",
                        "Texto"=>"La Zona se borro correctamente",
                        "Tipo"=> "success"
                     ];
                   }else{
                    $Alerta = [
                        "Alerta"=>"simple",
                        "Titulo"=>"Error!",
                        "Texto"=>"La Zona no se borro correctamente",
                        "Tipo"=> "error"
                     ];
                   }
                 
                      
                   return mainModel::sweet_alert($Alerta);
                        
                 }

                 

                   public function InsertarZona($datos){
                     $nombre = $datos[1];
                     
                     $verifica = mainModel::ejecutar_consulta_simple("SELECT * FROM zona where NOMBRE = '$nombre'");
                     if($verifica->rowCount()>=1){
                        $Alerta = [
                           "Alerta"=>"simple",
                          "Titulo"=>"Esta Zona ya existe!",
                           "Texto"=>"",
                           "Tipo"=> "warning"
                        
                        ]; 
                     }
                     else{

                     
                     $FilasCiudad = ZonasModelo::Insertar_zona_Modelo($datos);
                     $url = SERVERURL."Ajax/ZonasAjax.php";
                        if($FilasCiudad->rowCount() >= 1){
                         $Alerta = [
                             "Alerta"=>"limpiar",
                            "Titulo"=>"¡Excelente!",
                             "Texto"=>"La zona se agrego correctamente",
                             "Tipo"=> "success",
                             "url"=>$url
                          ];
                        }else{
                         $Alerta = [
                             "Alerta"=>"simple",
                             "Titulo"=>"Error!",
                             "Texto"=>"La zona no se pudo agregar correctamente",
                             "Tipo"=> "error"
                          ];
                        }
                     }
                           
                        return mainModel::sweet_alert($Alerta);

                      
                             
                      }

                      public function ModificarZonas($datos){
           
                        $FilasZona = ZonasModelo::Modificar_zona_Modelo($datos);
                        $url = SERVERURL."Ajax/ZonasAjax.php";
                           if($FilasZona->rowCount() >= 1){
                            $Alerta = [
                                "Alerta"=>"limpiar",
                                "Titulo"=>"¡Excelente!",
                                "Texto"=>"La Zona se Modificar correctamente",
                                "Tipo"=> "success",
                                "url"=>$url
                             ];
                           }else{
                            $Alerta = [
                                "Alerta"=>"simple",
                                "Titulo"=>"Error!",
                                "Texto"=>"La Zona no se Modificar correctamente",
                                "Tipo"=> "error"
                             ];
                           }
                         
                              
                           return mainModel::sweet_alert($Alerta);
                                
                         }
         


    }