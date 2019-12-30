<?php


if ($peticionAjax == true) {
    require_once "../Modelos/BancoModelo.php";
    } else {
       require_once "./Modelos/BancoModelo.php";
    }

    class BancoControlador extends BancoModelo {

        public function MostrarBanco(){
           
            $Filasbanco = BancoModelo::Mostrar_Banco_Modelo();
            $output = "";
           $url = SERVERURL."Ajax/BancoAjax.php";
         
              
            $results = $Filasbanco->fetchAll();
            $data = array();
            $filteredes_row = $Filasbanco->rowCount();
            foreach($results as $row ){
               $sub_array = array();
               $sub_array[] = $row["ID"];
               $sub_array[] = $row["NOMBRE"];
             
               $sub_array[] = '<i class="bttool fas fa-pencil-alt" style="color: orange" Data-toggle="tooltip" data-placement="left" title="Editar" 
                onclick="Modificar1(datos = ['."'#ID'".','."'#inputUserName'".'],datos =
                 ['."'".$row["ID"]."'".','."'".$row["NOMBRE"]."'".']);"></i> <i 
                  data-toggle="tooltip" data-placement="right" title="Borrar" style="color: red" onclick="borrar('.$row["ID"].','."'".$url."'".');" style="color: aliceblue"  
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

             public function BorrarBanco($Id){
           
               $Filasbanco = BancoModelo::Borrar_Banco_Modelo($Id);
                  
                  if($Filasbanco->rowCount() >= 1){
                   $Alerta = [
                       "Alerta"=>"simple",
                       "Titulo"=>"¡Excelente!",
                       "Texto"=>"El Banco se borro correctamente",
                       "Tipo"=> "success"
                    ];
                  }else{
                   $Alerta = [
                       "Alerta"=>"simple",
                       "Titulo"=>"Error!",
                       "Texto"=>"El Banco no se borro correctamente",
                       "Tipo"=> "error"
                    ];
                  }
                
                     
                  return mainModel::sweet_alert($Alerta);
                       
                }

                

                   public function InsertarBanco($datos){
                     $nombre = $datos[1];
                     $verifica = mainModel::ejecutar_consulta_simple("SELECT * FROM bancos where NOMBRE = '$nombre'");
                     if($verifica->rowCount()>=1){
                        $Alerta = [
                           "Alerta"=>"simple",
                          "Titulo"=>"Este banco ya existe!",
                           "Texto"=>"",
                           "Tipo"=> "warning"
                        ]; 
                     }
                     else{

                     
                     $FilasCiudad = BancoModelo::Insertar_banco_Modelo($datos);
                     $url = SERVERURL."Ajax/BancoAjax.php";
                        if($FilasCiudad->rowCount() >= 1){
                         $Alerta = [
                             "Alerta"=>"limpiar",
                            "Titulo"=>"¡Excelente!",
                             "Texto"=>"El banco se agrego correctamente",
                             "Tipo"=> "success",
                             "url"=>"".$url.""
                          ];
                        }else{
                         $Alerta = [
                             "Alerta"=>"simple",
                             "Titulo"=>"Error!",
                             "Texto"=>"El banco no se pudo agregar correctamente",
                             "Tipo"=> "error"
                          ];
                        }
                     }
                           
                        return mainModel::sweet_alert($Alerta);

                      
                             
                      }


                      public function ModificarBanco($datos){
           
                        $Filasbanco = BancoModelo::Modificar_banco_Modelo($datos);
                        $url = SERVERURL."Ajax/BancoAjax.php";
                           if($Filasbanco->rowCount() >= 1){
                            $Alerta = [
                                "Alerta"=>"limpiar",
                                "Titulo"=>"¡Excelente!",
                                "Texto"=>"El Banco se Modifico correctamente",
                                "Tipo"=> "success",
                                "url"=>"".$url.""
                             ];
                           }else{
                            $Alerta = [
                                "Alerta"=>"simple",
                                "Titulo"=>"Error!",
                                "Texto"=>"El Banco no se Modifico correctamente",
                                "Tipo"=> "error"
                             ];
                           }
                         
                              
                           return mainModel::sweet_alert($Alerta);

                           return $Filasbanco;
                                
                         }


    }