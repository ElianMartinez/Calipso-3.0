<?php


if ($peticionAjax == true) {
    require_once "../Modelos/ImpuestosModelo.php";
    } else {
       require_once "./Modelos/ImpuestosModelo.php";
    }

    class ImpuestosControlador extends ImpuestosModelo {

        public function MostrarImpuestos(){
           $output = "";
           $url = SERVERURL."Ajax/ImpuestosAjax.php";
            $Filasbanco = ImpuestosModelo::Mostrar_Impuestos_Modelo();
              
            $results = $Filasbanco->fetchAll();
            $data = array();
            $filteredes_row = $Filasbanco->rowCount();
            foreach($results as $row ){
               $sub_array = array();
               $sub_array[] = $row["COD_IR_F"];
               $sub_array[] = $row["NOMBRE"];
               $sub_array[] = $row["RESUMEN"];
               $sub_array[] = $row["TASA"];
               $sub_array[] = '<i class="bttool fas fa-pencil-alt" style="color: orange" data-toggle="tooltip" data-placement="left" title="Editar" 
                onclick="Modificar1(datos = ['."'#ID'".','."'#inputUserName'".','."'#resumen'".','."'#tasa'".'],datos =
                 ['."'".$row["COD_IR_F"]."'".','."'".$row["NOMBRE"]."'".','."'".$row["RESUMEN"]."'".','."'".$row["TASA"]."'".']);"></i> <i 
                  data-toggle="tooltip" data-placement="right" title="Borrar" style="color: red" onclick="borrar('.$row["COD_IR_F"].','."'".$url."'".');" style="color: aliceblue"  
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


             public function BorrarImpuestos($Id){
           
               $FilasCiudad = ImpuestosModelo::Borrar_Impuestos_Modelo($Id);
                  
                  if($FilasCiudad->rowCount() >= 1){ 
                   $Alerta = [
                       "Alerta"=>"simple",
                       "Titulo"=>"¡Excelente!",
                       "Texto"=>"El Impuesto se borro correctamente",
                       "Tipo"=> "success"
                    ];
                  }else{
                   $Alerta = [
                       "Alerta"=>"simple",
                       "Titulo"=>"Error!",
                       "Texto"=>"El Impuesto no se borro correctamente",
                       "Tipo"=> "error"
                    ];
                  }
                
                      
                  return mainModel::sweet_alert($Alerta);
                       
                }

                public function BuscarImpuestos($valor){
           
                  $Filasbanco = ImpuestosModelo::Buscar_Impuestos_Modelo($valor);
                  $url = SERVERURL."Ajax/ImpuestosAjax.php";
                     $datos = "";
                     if($Filasbanco->rowCount() >= 1){
                     foreach ($Filasbanco as $key) {
                        $datos .= '
                  <tr>
                  <th scope="row">'.$key["COD_IR_F"].'</th>
                  <td style="font-size:15px">'.$key["NOMBRE"].'</td>
                  <td style="font-size:15px">'.$key["RESUMEN"].'</td>
                  <td style="font-size:15px">'.$key["TASA"].'</td>
                  <td> <button class="btn btn-warning bttool" type="button" data-toggle="tooltip" data-placement="left" title="Editar" style="color: aliceblue" type="button"  onclick="Modificar1(datos = ['."'#ID'".','."'#inputUserName'".','."'#resumen'".','."'#tasa'".'],datos = ['."'".$key["COD_IR_F"]."'".','."'".$key["NOMBRE"]."'".','."'".$key["RESUMEN"]."'".','."'".$key["TASA"]."'".']);" > <i class=" fas fa-pencil-alt"></i> </button>  <button type="button" data-toggle="tooltip" data-placement="right" title="Borrar" onclick="borrar('.$key["COD_IR_F"].','."'".$url."'".');" style="color: aliceblue" type="button" class="btn btn-danger bttool" id="borrar"> <i class="fas fa-trash"></i> </button></td>
                  </tr>';
                         }
                        }else{
                           $datos .="
                           <td></td>
                           <div class='container'>
                           <center><h3> No se encontraron datos </h3></center> </div>";
                        }
                      return $datos;
                          
                   }
                   
                   public function InsertarImpuestos($datos){
                     $nombre = $datos[1];
                     $verifica = mainModel::ejecutar_consulta_simple("SELECT * FROM impuestos where NOMBRE = '$nombre' OR TASA = '$nombre' ");
                     if($verifica->rowCount()>=1){
                        $Alerta = [
                           "Alerta"=>"simple",
                          "Titulo"=>"Este Impuesto ya existe!",
                           "Texto"=>"",
                           "Tipo"=> "warning"
                        ]; 
                     }
                     else{

                     
                     $FilasCiudad = ImpuestosModelo::Insertar_Impuestos_Modelo($datos);
                        
                        if($FilasCiudad->rowCount()>= 1){
                         $Alerta = [
                             "Alerta"=>"limpiar",
                            "Titulo"=>"¡Excelente!",
                             "Texto"=>"El Impuesto se agrego correctamente",
                             "Tipo"=> "success"
                          ];
                        }else{
                         $Alerta = [
                             "Alerta"=>"simple",
                             "Titulo"=>"Error!",
                             "Texto"=>"El Impuesto no se pudo agregar correctamente",
                             "Tipo"=> "error"
                          ];
                        }
                     }
                           
                        return mainModel::sweet_alert($Alerta);

                      
                             
                      }

                      public function ModificarImpuesto($datos){
           
                        $FilasCiudad = ImpuestosModelo::Modificar_Impuestos_Modelo($datos);
                           
                           if($FilasCiudad->rowCount() >= 1){
                            $Alerta = [
                                "Alerta"=>"limpiar",
                                "Titulo"=>"¡Excelente!",
                                "Texto"=>"El Impuesto se Modifico correctamente",
                                "Tipo"=> "success"
                             ];
                           }else{
                            $Alerta = [
                                "Alerta"=>"simple",
                               "Titulo"=>"Error!",
                               "Texto"=>"El Impuesto no se Modifico correctamente",
                                "Tipo"=> "error"
                             ];
                           }
                         
                              
                           return mainModel::sweet_alert($Alerta);

                          
                                
                         }
         


    }