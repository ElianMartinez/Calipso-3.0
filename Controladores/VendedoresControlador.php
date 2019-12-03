<?php


if ($peticionAjax == true) {
    require_once "../Modelos/VendedoresModelo.php";
    } else {
       require_once "./Modelos/VendedoresModelo.php";
    }

    class VendedoresControlador extends VendedoresModelo {

        public function MostrarVendedores(){
            $Filasbanco = VendedoresModelo::Mostrar_vendedores_Modelo();
            
         
            $url = SERVERURL."Ajax/VendedoresAjax.php";
            $results = $Filasbanco->fetchAll();
            $data = array();
            $filteredes_row = $Filasbanco->rowCount();
            foreach($results as $row ){
               $sub_array = array();
               $sub_array[] = $row["COD_VND_F"];
               $sub_array[] = $row["tipoV"];
               $sub_array[] = $row["NOMBRE"];
               $sub_array[] = $row["SEXO"];
               $sub_array[] = $row["CEDULA"];
               if($row["EST_CIVIL"] == "S"){
                  $sub_array[] = '<span class="badge badge-primary">'.$row["EST_CIVIL"].'</span>';
               }else{
                  $sub_array[] = '<span class="badge badge-secondary">'.$row["EST_CIVIL"].'</span>';

               }
               
               $sub_array[] = '<i  class="bttool fas fa-pencil-alt" style="color: orange" data-toggle="tooltip" data-placement="left" title="Editar" 
                onclick="Modificar1(datos = ['."'#ID'".','."'#inputUserName'".'],datos =
                 ['."'".$row["COD_VND_F"]."'".','."'".$row["NOMBRE"]."'".']);"></i> <i 
                  data-toggle="tooltip" data-placement="right" title="Borrar" style="color: red" onclick="borrar('.$row["COD_VND_F"].','."'".$url."'".');" style="color: aliceblue"  
                  class="fas fa-trash bttool" id="borrar"></i>';
               $data[] = $sub_array;
            }

          $output = array(
             "draw"            => 2,
             "recordsTotal"    => $filteredes_row,
             "recodrsFiltered" => $filteredes_row,
             "data"            => $data
          );
                  return json_encode($output); 
             }


             public function BuscarVendedores($NOMBRE,$SEXO,$TV){
               $Filasbanco = VendedoresModelo::Busqueda_vendedores_Modelo($NOMBRE,$SEXO,$TV);
            
               $url = SERVERURL."Ajax/VendedoresAjax.php";
               $results = $Filasbanco->fetchAll();
               $data = array();
               $filteredes_row = $Filasbanco->rowCount();
               foreach($results as $row ){
                  $sub_array = array();
                  $sub_array[] = $row["COD_VND_F"];
                  $sub_array[] = $row["tipoV"];
                  $sub_array[] = $row["NOMBRE"];
                  $sub_array[] = $row["SEXO"];
                  $sub_array[] = $row["CEDULA"];
                  if($row["EST_CIVIL"] == "S"){
                     $sub_array[] = '<span class="badge badge-primary">'.$row["EST_CIVIL"].'</span>';
                  }else{
                     $sub_array[] = '<span class="badge badge-secondary">'.$row["EST_CIVIL"].'</span>';
   
                  }
                  
                  $sub_array[] = '<i  class="bttool fas fa-pencil-alt" style="color: orange" data-toggle="tooltip" data-placement="left" title="Editar" 
                   onclick="Modificar1(datos = ['."'#ID'".','."'#inputUserName'".'],datos =
                    ['."'".$row["COD_VND_F"]."'".','."'".$row["NOMBRE"]."'".']);"></i> <i 
                     data-toggle="tooltip" data-placement="right" title="Borrar" style="color: red" onclick="borrar('.$row["COD_VND_F"].','."'".$url."'".');" style="color: aliceblue"  
                     class="fas fa-trash bttool" id="borrar"></i>';
                  $data[] = $sub_array;
               }
   
             $output = array(
                "draw"            => 2,
                "recordsTotal"    => $filteredes_row,
                "recodrsFiltered" => $filteredes_row,
                "data"            => $data
             );
                     return json_encode($output); 

                
                }
            


             public function InsertarVendedores($datos){
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
               $FilasCiudad = VendedoresModelo::Insertar_Vendedores_Modelo($datos);
               $url = SERVERURL."Ajax/VendedoresAjax.php";
                  if($FilasCiudad->rowCount() >= 1){
                   $Alerta = [
                       "Alerta"=>"limpiar",
                      "Titulo"=>"¡Excelente!",
                       "Texto"=>"El Vendedor se agrego correctamente",
                       "Tipo"=> "success",
                       "url"=>$url
                    ];
                  }else{
                   $Alerta = [
                       "Alerta"=>"simple",
                       "Titulo"=>"Error!",
                       "Texto"=>"El Vendedor no se pudo agregar correctamente",
                       "Tipo"=> "error"
                    ];
                  }
               }
                     
                  return mainModel::sweet_alert($Alerta);


                        
                }

                public function ModificarVendedores($datos){
           
                  $FilasZona = TipoVModelo::Modificar_Vendedores_Modelo($datos);
                  $url = SERVERURL."Ajax/VendedoresAjax.php";
                     if($FilasZona->rowCount() >= 1){
                      $Alerta = [
                          "Alerta"=>"limpiar",
                          "Titulo"=>"¡Excelente!",
                          "Texto"=>"El Vendedor se Modificar correctamente",
                          "Tipo"=> "success",
                          "url"=>$url
                       ];
                     }else{
                      $Alerta = [
                          "Alerta"=>"simple",
                          "Titulo"=>"Error!",
                          "Texto"=>"El Vendedor no se Modificar correctamente, no se ha hecho ningun cambio al nombre",
                          "Tipo"=> "warning"
                       ];
                     }
                   
                        
                     return mainModel::sweet_alert($Alerta);
                          
                   }

                   public function BorrarVendedores($Id){
           
                     $FilasVendedor = VendedoresModelo::Borrar_Vendedores_Modelo($Id);
                    
                        if($FilasVendedor->rowCount() >= 1){
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