<?php


if ($peticionAjax == true) {
    require_once "../Modelos/UsuarioModelo.php";
    } else {
       require_once "./Modelos/UsuarioModelo.php";
    }

    class UsuarioControlador extends UsuarioModelo {

        public function MostrarUsuario(){
           
            $FilasGrupo = UsuarioModelo::Mostrar_Usuario_Modelo();
              $datos = "";
              foreach ($FilasGrupo as $key) {
                $imagen = "";
                if($key["IMG"] != ""){
                  $imagen = $key["IMG"];
                }else{
                  $imagen = SERVERURL."Vistas/assets/images/facebook-avatar.png";

                }
               

                $monto = number_format($key["MONTO_1"],2);
                $monto2 = number_format($key["MONTO_2"],2);
                $monto3 = number_format($key["MONTO_F"],2);
                $datos .= ' <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('.".'hover'.".');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <br>
                                <br>
                                    <p><img class=" img-fluid" src="'.$imagen.'" alt="card image"></p>
                                    <br>
                                    <h4 class="card-title">'.$key["NOMBRE"].'</h4>
                                    <p class="card-text">'.$key["COMENTARIO"].'</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="padding:5px;">
                            <h4  class="card-title">'.$key["NOMBRE"].'</h4>
                            <p class="card-title">'.$key["COMENTARIO"].'</p>
                                
                                    <table style="margin-top:0px;" class="table table-hover">
                                      <tr>
                                        <th>USUARIO</th>
                                        <td>'.$key["USUARIO"].'</td>
                                      </tr>
                                      <tr>
                                        <th>GRUPO</th>
                                        <td>'.$key["GRUPO"].'</td>
                                      </tr>
                                      <tr>
                                      <th>MONTO</th>
                                      <td>RD$ '.$monto.'</td>
                                    </tr>
                                    <tr>
                                      <th>ACUMULADO</th>
                                      <td>RD$ '.$monto2.'</td>
                                    </tr>
                                    <tr>
                                    <th>FACTURACIÓN</th>
                                    <td>RD$ '.$monto2.'</td>
                                  </tr>
                                  <tr>                                                                                                                                                                                                                                                                                               
                                  <td> <button class="btn btn-warning bttool" type="button" data-toggle="tooltip" data-placement="left" title="Editar" style="color: aliceblue" type="button"  onclick="Modificar('.$key["ID"].','."'".$key["NOMBRE"]."'".','."'".$key["USUARIO"]."'".','."'".$key["GRUPOC"]."'".','."'".$key["COMENTARIO"]."'".','."'".$key["MONTO_1"]."'".','."'".$key["MONTO_2"]."'".','."'".$key["MONTO_F"]."'".');" > <i class=" fas fa-pencil-alt"></i> </button>  <button type="button" data-toggle="tooltip" data-placement="right" title="Borrar" onclick="borrar('.$key["ID"].');" style="color: aliceblue" type="button" class="btn btn-danger bttool" id="borrar"> <i class="fas fa-trash"></i> </button></td>

                                  </tr>
                                        
                                     
                                    </table>
                                    
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
                  
                 }

             return $datos;
                 
          }

          public function MostrarGrupoS(){
           
            $FilasGrupo = mainModel::ejecutar_consulta_simple("SELECT * FROM `maetro_permisos`");
              $datos = "";
              foreach ($FilasGrupo as $key) {

                $datos .= '<option value="'.$key["COD_GP_C"].'" >'.$key["NOMBRE"].'</option>';
                  
                 }

             return $datos;
                 
          }


          public function InsertarGrupo($nombre,$grupo,$usuario,$clave1,$comentario,$monto,$acumulado,$fac)
          {   $imagen = SERVERURL."Vistas/assets/images/facebook-avatar.png";               
              $sql = "INSERT INTO `control` (`USUARIO`, `NOMBRE`, `ACCESO`, `CTA`, `COD_GP_C`, `COMENTARIO`, `PRECIO`, `DESCUENTO`, `COSTO`, `COMISION`, `STATUS`, `NOTAS`, `NIVEL`, `CATEGORIA`, `TIPO`, `MONTO_1`, `MONTO_2`, `MONTO_F`, `ALMACEN`, `FECHA`, `USUARIO1`, `TIPOS1`, `TIPOS2`, `ACCESONUM`, `COD_PRN`, `IMG`) VALUES ('$usuario','$nombre','$clave1',null,'$grupo','$comentario',null,null,null,null,null,null,null,null,null,'$monto','$acumulado','$fac',null,null,null,null,null,null,null,'$imagen')";
              $consulta = mainModel::ejecutar_consulta_simple($sql);
              if($consulta->rowCount()>=1){
                $Alerta = [
                  "Alerta"=>"limpiar",
                  "Titulo"=>"¡Excelente!",
                  "Texto"=>"El Usuario se Registro correctamente",
                  "Tipo"=> "success"
               ];
              }else{
                $Alerta = [
                  "Alerta"=>"simple",
                  "Titulo"=>"Error!",
                  "Texto"=>"El Usuario no se Registro correctamente",
                  "Tipo"=> "error"
               ];
              }

              return mainModel::sweet_alert($Alerta);
          
            }

          public function Revisar($usuario){
            $verificarUsuario = UsuarioModelo::Buscar_UsuarioVeri_Modelo($usuario);
            if($verificarUsuario){
              return "si";
            }else{
              return "no";
            }
          }
          

          function borrar2($id){
            $consulta = mainModel::ejecutar_consulta_simple("DELETE FROM `control` WHERE `ID` = $id");
            if($consulta->rowCount()>=1){
              $Alerta = [
                "Alerta"=>"simple",
                "Titulo"=>"¡Excelente!",
                "Texto"=>"El Usuario se Borro correctamente",
                "Tipo"=> "success"
             ];
            }else{
              $Alerta = [
                "Alerta"=>"simple",
                "Titulo"=>"Error!",
                "Texto"=>"El Usuario no se Borror correctamente",
                "Tipo"=> "error"
             ];
            }

            return mainModel::sweet_alert($Alerta);
        
          }

         public function Modificar($ID,$nombre,$grupo,$usuario,$clave1,$comentario,$monto,$acumulado,$fac){
            $consulta = UsuarioModelo::Modificar_usuario_Modelo($ID,$nombre,$grupo,$usuario,$clave1,$comentario,$monto,$acumulado,$fac);
            if($consulta->rowCount()>=1){
              $Alerta = [
                "Alerta"=>"limpiar",
                "Titulo"=>"¡Excelente!",
                "Texto"=>"El Usuario se modificó correctamente",
                "Tipo"=> "success"
             ];
            }else{
              $Alerta = [
                "Alerta"=>"simple",
                "Titulo"=>"Error!",
                "Texto"=>"El Usuario no se modificó correctamente",
                "Tipo"=> "error"
             ];
            }

            return mainModel::sweet_alert($Alerta);
        
          }

          public function BuscarUsuarios($valor){
              $resultado = UsuarioModelo::Buscar_Usuario_Modelo($valor);


              $datos = "";
            if($resultado->rowCount() >= 1){
              foreach ($resultado as $key) {
                $imagen = "";
                if($key["IMG"] != ""){
                  $imagen = $key["IMG"];
                }else{
                  $imagen = SERVERURL."Vistas/assets/images/facebook-avatar.png";

                }
                

                $monto = number_format($key["MONTO_1"],2);
                $monto2 = number_format($key["MONTO_2"],2);
                $monto3 = number_format($key["MONTO_F"],2);
                $datos .= ' <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('.".'hover'.".');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <br>
                                <br>
                                    <p><img class=" img-fluid" src="'.$imagen.'" alt="card image"></p>
                                    <br>
                                    <h4 class="card-title">'.$key["NOMBRE"].'</h4>
                                    <p class="card-text">'.$key["COMENTARIO"].'</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="padding:5px;">
                            <h4  class="card-title">'.$key["NOMBRE"].'</h4>
                            <p class="card-title">'.$key["COMENTARIO"].'</p>
                                
                                    <table style="margin-top:0px;" class="table table-hover">
                                      <tr>
                                        <th>USUARIO</th>
                                        <td>'.$key["USUARIO"].'</td>
                                      </tr>
                                      <tr>
                                        <th>GRUPO</th>
                                        <td>'.$key["GRUPO"].'</td>
                                      </tr>
                                      <tr>
                                      <th>MONTO</th>
                                      <td>RD$ '.$monto.'</td>
                                    </tr>
                                    <tr>
                                      <th>ACUMULADO</th>
                                      <td>RD$ '.$monto2.'</td>
                                    </tr>
                                    <tr>
                                    <th>FACTURACIÓN</th>
                                    <td>RD$ '.$monto2.'</td>
                                  </tr>
                                  <tr>                                                                                                                                                                                                                                                                                               
                                  <td> <button class="btn btn-warning bttool" type="button" data-toggle="tooltip" data-placement="left" title="Editar" style="color: aliceblue" type="button"  onclick="Modificar('.$key["ID"].','."'".$key["NOMBRE"]."'".','."'".$key["USUARIO"]."'".','."'".$key["GRUPOC"]."'".','."'".$key["COMENTARIO"]."'".','."'".$key["MONTO_1"]."'".','."'".$key["MONTO_2"]."'".','."'".$key["MONTO_F"]."'".');" > <i class=" fas fa-pencil-alt"></i> </button>  <button type="button" data-toggle="tooltip" data-placement="right" title="Borrar" onclick="borrar('.$key["ID"].');" style="color: aliceblue" type="button" class="btn btn-danger bttool" id="borrar"> <i class="fas fa-trash"></i> </button></td>

                                  </tr>
                                        
                                     
                                    </table>
                                    
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
                  
                 }

             return $datos;
                 
          


        }else{
          $datos = "<center><h3>No hay registros para: ".$valor."</h3></center>";
          return $datos;

        }


          }

        }

    