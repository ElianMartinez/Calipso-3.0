<?php


if ($peticionAjax == true) {
    require_once "../Modelos/CiudadModelo.php";
    } else {
       require_once "./Modelos/CiudadModelo.php";
    }

    class CiudadControlador extends CiudadModelo {

        public function MostrarCiudad(){
           
            $Filasbanco = CiudadModelo::Mostrar_Ciudad_Modelo();
               $url = SERVERURL."Ajax/CiudadAjax.php";
               $results = $Filasbanco->fetchAll();
               $data = array();
               $filteredes_row = $Filasbanco->rowCount();
               foreach($results as $row ){
                  $sub_array = array();
                  $sub_array[] = $row["COD_CD_F"];
                  $sub_array[] = $row["NOMBRE"];
                  $sub_array[] = $row["RESUMEN"];
                  $sub_array[] = '<i class="bttool fas fa-pencil-alt" style="color: orange" data-toggle="tooltip" data-placement="left" title="Editar" 
                   onclick="Modificar1(datos = ['."'#ID'".','."'#inputUserName'".','."'#resumen'".'],datos =
                    ['."'".$row["COD_CD_F"]."'".','."'".$row["NOMBRE"]."'".','."'".$row["RESUMEN"]."'".']);"></i> <i 
                     data-toggle="tooltip" data-placement="right" title="Borrar" style="color: red" onclick="borrar('.$row["COD_CD_F"].','."'".$url."'".');" style="color: aliceblue"  
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


            
            
                   
                   public function InsertarCiudad($datos){
                     $nombre = $datos[1];
                     $url = SERVERURL."Ajax/CiudadAjax.php";
                     $verifica = mainModel::ejecutar_consulta_simple("SELECT * FROM ciudad where NOMBRE = '$nombre'");
                     if($verifica->rowCount()>=1){
                        $Alerta = [
                           "Alerta"=>"simple",
                          "Titulo"=>"Esta ciudad ya existe!",
                           "Texto"=>"",
                           "Tipo"=> "warning"
                        ]; 
                     }
                     else{

                     
                     $FilasCiudad = CiudadModelo::Insertar_Ciudad_Modelo($datos);
                        
                        if($FilasCiudad->rowCount()>= 1){
                         $Alerta = [
                             "Alerta"=>"limpiar",
                            "Titulo"=>"¡Excelente!",
                             "Texto"=>"La Ciudad se agrego correctamente",
                             "Tipo"=> "success",
                             "url"=>$url
                          ];
                        }else{
                         $Alerta = [
                             "Alerta"=>"simple",
                             "Titulo"=>"Error!",
                             "Texto"=>"La Ciudad no se pudo agregar correctamente",
                             "Tipo"=> "error"
                          ];
                        }
                     }
                           
                        return mainModel::sweet_alert($Alerta);

                      
                             
                      }

                      public function ModificarCiudad($datos){
           
                        $FilasCiudad = CiudadModelo::Modificar_Ciudad_Modelo($datos);
                        $url = SERVERURL."Ajax/CiudadAjax.php";
                           if($FilasCiudad->rowCount() >= 1){
                            $Alerta = [
                                "Alerta"=>"limpiar",
                                "Titulo"=>"¡Excelente!",
                                "Texto"=>"La Ciudad se Modifico correctamente",
                                "Tipo"=> "success",
                                "url"=>$url
                             ];
                           }else{
                            $Alerta = [
                                "Alerta"=>"simple",
                               "Titulo"=>"Error!",
                               "Texto"=>"La Ciudad no se Modifico correctamente",
                                "Tipo"=> "error"
                             ];
                           }
                         
                              
                           return mainModel::sweet_alert($Alerta);

                          
                                
                         }



                         function mostrarCD(){
                           $Filasbanco = CiudadModelo::Mostrar_Ciudad_Modelo();
                           
                        foreach($Filasbanco as $row){
                                 $datos .= '<option value="'.$row["COD_CD_F"].'">'.$row["NOMBRE"].'</option>';
                              }
                              return $datos;
                         }


                         public function BorrarCiudad($Id){
           
                           $FilasCiudad = CiudadModelo::Borrar_Ciudad_Modelo($Id);
                              
                              if($FilasCiudad->rowCount() >= 1){ 
                               $Alerta = [
                                   "Alerta"=>"simple",
                                   "Titulo"=>"¡Excelente!",
                                   "Texto"=>"La Ciudad se borro correctamente",
                                   "Tipo"=> "success"
                                ];
                              }else{
                               $Alerta = [
                                   "Alerta"=>"simple",
                                   "Titulo"=>"Error!",
                                   "Texto"=>"La Ciudad no se borro correctamente",
                                   "Tipo"=> "error"
                                ];
                              }
                            
                                  
                              return mainModel::sweet_alert($Alerta);
                                   
                            }
            
                          
         


    }
    