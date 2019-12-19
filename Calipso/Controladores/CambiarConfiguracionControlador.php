
<?php

if ($peticionAjax == true) {
    require_once "../Modelos/CambiarConfiguracionModelo.php";
    } else {
       require_once "./Modelos/CambiarConfiguracionModelo.php";
    }

    class CambiarConfiguracionControlador extends CambiarConfiguracionModelo {


        public function Subir_img($image,$user){
            $sql = "UPDATE control set IMG = '$image' where USUARIO = '$user'";

            $consulta = mainModel::ejecutar_consulta_simple($sql);
            if($consulta->rowCount() >= 1 ){
                return "SI";
            }else{
                return "NO";
            }
               
        }





        public function CambiarConfig($user,$pass1,$pass2,$pass3){
        $alerta = ' <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-size:25px;" class=" modal-title  " id="labelModal">Error de Contraseña</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                </div>
                <div class="modal-body">
                <center><span style="font-size: 48px; color: Tomato;"><i class="red fas fa-exclamation-triangle"></i></span></center>
                    <p style="font-size:18px">La contraseña anterior esta errónea por favor ingrese la contraseña correcta</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-secondary" onclick="focuss();" data-dismiss="modal">Close</a>
                  
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script>  $("#myModal1").modal("show");</script>
';   

$alerta3 = ' <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-size:25px;" class=" modal-title  " id="labelModal">Error de Contraseña</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                </div>
                <div class="modal-body">
                <center><span style="font-size: 48px; color: Tomato;"><i class="red fas fa-exclamation-triangle"></i></span></center>
                    <p style="font-size:18px">La contraseña anterior no puede ser igual a la nueva</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-secondary" onclick="focuss();" data-dismiss="modal">Close</a>
                  
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script>  $("#myModal1").modal("show");</script>
';   


$alerta2 = ' <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-size:20px;" class=" modal-title  " id="labelModal">Su contraseña se ha cambiado exitosamente </h5>
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>
        <div class="modal-body">
        <center><span style="font-size: 48px; color: Mediumslateblue;"><i class="fas fa-check"></i></span></center>
            <p style="font-size:18px">La contraseña anterior se ha cambiado exitosamente</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn btn-secondary" onclick="focuss();" data-dismiss="modal">Close</a>
          
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>  $("#myModal1").modal("show"); 
 $(".FormularioAjax2")[0].reset();</script>
'; 
        $verificar = mainModel::ejecutar_consulta_simple("SELECT * from control where `USUARIO` = '$user' and `ACCESO` = '$pass1'");
          if($pass1 == $pass2){
            return $alerta3;
          }else{
        if($verificar->rowCount()>= 1){

          $cambio = CambiarConfiguracionModelo::cambiarConfiguracion_Modelo($user,$pass3);
          if($cambio == "SI"){
            return $alerta2;
          }else{
            return $cambio;
          }
        }else{
          return $alerta;
        }
      }
           

   
      }



    }