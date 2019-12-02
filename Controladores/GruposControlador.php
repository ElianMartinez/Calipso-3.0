<?php


if ($peticionAjax == true) {
    require_once "../Modelos/GruposModelo.php";
    } else {
       require_once "./Modelos/GruposModelo.php";
    }

    class GruposControlador extends GruposModelo {


      public function ModificarGN($Nombre,$Id)
      {
        
         $consultaPP = mainModel::ejecutar_consulta_simple("UPDATE `maetro_permisos` SET  `NOMBRE` = '$Nombre'  WHERE `COD_GP_C` = '$Id' ");
         if($consultaPP->rowCount()>= 1){
            $Alerta = [
               "Alerta"=>"simple",
               "Titulo"=>"Se Modifico correctamente",
               "Texto"=>"",
               "Tipo"=> "success"

            ];
      }else{
         $Alerta = [
            "Alerta"=>"simple",
            "Titulo"=>"No se Modifico correctamente",
            "Texto"=>"",
            "Tipo"=> "error"

         ];
         }
            return mainModel::sweet_alert($Alerta);
      }  
      

       public function ModificarG($idP,$OP)
      {
        
         $consultaPP = mainModel::ejecutar_consulta_simple("UPDATE `modulo_roles` SET `PERMISO` = '$OP'  WHERE `ID` = '$idP' ");
         if($consultaPP->rowCount()>= 1){
            return "Bien";
      }else{
            return  "Mal";
         }

      }

       public function BuscarPermisos($IdG)
      {
         $consultaPP = mainModel::ejecutar_consulta_simple("SELECT * FROM `modulo_roles` WHERE `COD_GP_C` = '$IdG' ORDER BY `CODIGO` ASC");
         $permisos = "";
         $permisos .= '<table class="table table-hover">
         <thead>
             <tr>
                 <th scope="col">ID</th>
                 <th scope="col">NOMBRE DEL PERMISO</th>
                 <th scope="col">CODIGO</th>
                 <th scope="col">PERMISO</th>
             </tr>
         </thead>
         <tbody>';
         foreach($consultaPP as $fila){
            $permisos .='<tr>';
            $permisos .=' <th scope="row">'.$fila["ID"].'</th>';
            $permisos .=' <td style="font-size:15px">'.$fila["NOMBRE"].'</td>';
            $permisos .=' <td style="font-size:15px">'.$fila["CODIGO"].'</td>';
            if($fila["PERMISO"] == "NO" ){
            $permisos .= '<td ><div class="switch-button switch-button-success"><input type="checkbox" onclick="Modificarr('.$fila["ID"].');"  name="switch16" id="switch16'.$fila["ID"].'"><span><label for="switch16'.$fila["ID"].'"></label></span></div></td>'; 
         }else{
            $permisos .= '<td ><div class="switch-button switch-button-success"><input type="checkbox" onclick="Modificarr('.$fila["ID"].');" checked="" name="switch16" id="switch16'.$fila["ID"].'"><span><label for="switch16'.$fila["ID"].'"></label></span></div></td>'; 
         }
            $permisos .='</tr>';
         }
       
         $permisos .='</tbody> </table>';

         return $permisos;
      }

      public function AgregarGrupos($grupo)
      {
        $Nombre = mainModel::limpiar_cadena($grupo);
         //Verificar que no exista un Grupo con el mismo nombre
         $verificarGrupo = mainModel::ejecutar_consulta_simple("SELECT * FROM `maetro_permisos` WHERE NOMBRE = '$Nombre' ");
         
         if($verificarGrupo->rowCount()>= 1)
         {
            $Alerta = [
               "Alerta"=>"simple22",
               "Titulo"=>"¡Este grupo ya existe!",
               "Texto"=>"",
               "Tipo"=> "warning"

            ];

      
         }else{
            //No hay ninguno similar, continua...
            $id = mt_rand(1,32786);
            $insertarGrupo = mainModel::ejecutar_consulta_simple("INSERT INTO `maetro_permisos`(`COD_GP_C`, `NOMBRE`) VALUES ('$id','$Nombre')");
            if($insertarGrupo->rowCount()>= 1){
               $sql = "SELECT * FROM `modulo_roles` WHERE `COD_GP_C` = '1' ";
               $InsertarPermisos = mainModel::ejecutar_consulta_simple($sql);
               $nume = 0;
               foreach($InsertarPermisos as $row){
                  $nombreg = $row["NOMBRE"];
                  $codigo = $row["CODIGO"];
                  
                  $Sql = "INSERT INTO `modulo_roles`(`CODIGO`, `NOMBRE`, `PERMISO`, `COD_GP_C`) VALUES ('$codigo','$nombreg','NO','$id')";
                   $ejecutar = mainModel::ejecutar_consulta_simple($Sql);
                   if( $ejecutar->rowCount()>= 1){
                      $nume++;
                   }
               }
               $permisos = "";
              if($nume >= 150){
               $Alerta = [
                  "Alerta"=>"simple",
                  "Titulo"=>"¡Excelente!",
                  "Texto"=>"El Grupo se Registro correctamente",
                  "Tipo"=> "success"
               ];
               $consultaPP = mainModel::ejecutar_consulta_simple("SELECT * FROM `modulo_roles` WHERE `COD_GP_C` = '$id' ORDER BY `CODIGO` ASC");

               $permisos .= '<table class="table table-hover">
               <thead>
                   <tr>
                       <th scope="col">ID</th>
                       <th scope="col">NOMBRE DEL PERMISO</th>
                       <th scope="col">CODIGO</th>
                       <th scope="col">PERMISO</th>
                   </tr>
               </thead>
               <tbody>';
               foreach($consultaPP as $fila){
                  $permisos .='<tr>';
                  $permisos .=' <th scope="row">'.$fila["ID"].'</th>';
                  $permisos .=' <td style="font-size:15px">'.$fila["NOMBRE"].'</td>';
                  $permisos .=' <td style="font-size:15px">'.$fila["CODIGO"].'</td>';
                  $permisos .= '<td ><div class="switch-button switch-button-success"><input type="checkbox" onclick="Modificarr('.$fila["ID"].');"  name="switch16" id="switch16'.$fila["ID"].'"><span><label for="switch16'.$fila["ID"].'"></label></span></div></td>'; 
                  $permisos .='</tr>';
               }
             
               $permisos .='</tbody> </table>';

               
              }


            }

         }
         if($permisos != ""){
           return $permisos; 
         }else{ 
         return mainModel::sweet_alert($Alerta);
       }
      }




    public function MostrarGrupos(){
           
   $FilasGrupo = GruposModelo::Mostrar_Grupos_Modelo();

      $datos = "";
      foreach ($FilasGrupo as $key) {
         $datos .= '<tr>
         <th scope="row">'.$key["COD_GP_C"].'</th>
         <td style="font-size:15px">'.$key["NOMBRE"].'</td>
         <td> <button class="btn btn-warning bttool" type="button" data-toggle="tooltip" data-placement="left" title="Editar" style="color: aliceblue" type="button"  onclick="Modificar('.$key["COD_GP_C"].','."'".$key["NOMBRE"]."'".');" > <i class=" fas fa-pencil-alt"></i> </button>  <button type="button" data-toggle="tooltip" data-placement="right" title="Borrar" onclick="borrar22('.$key["COD_GP_C"].');" style="color: aliceblue" type="button" class="btn btn-danger bttool" id="borrar"> <i class="fas fa-trash"></i> </button></td>
         </tr>';
           
          }

       return $datos;
           
    }

    public function BuscarGrupos($valores){
    
   


        $FilasGrupo = GruposModelo::Buscar_Grupos_Modelo($valores);
        $datos = "";
    if($FilasGrupo->rowCount()>= 1 ){
     foreach ($FilasGrupo as $key) {
        $datos .= '<tr>
      <th scope="row">'.$key["COD_GP_C"].'</th>
      <td style="font-size:15px">'.$key["NOMBRE"].'</td>
      <td><button style="color: aliceblue" type="button"  onclick="Modificar('.$key["COD_GP_C"].','."'".$key["NOMBRE"]."'".');" class="btn btn-warning "> <i class=" fas fa-pencil-alt"></i> </button>  <button onclick="borrar22('.$key["COD_GP_C"].');" style="color: aliceblue" type="button" class="btn btn-danger" id="borrar"> <i class="fas fa-trash"></i> </button></td>
      </tr>';
         }
        } else{
            $datos = "No hay Grupo con ese nombre ";
      }

  
         return $datos;
             
      }

      public function BorrarGrupos($id){
           $datos = "";
         
         $Verificar =  mainModel::ejecutar_consulta_simple("SELECT A.USUARIO, B.NOMBRE FROM maetro_permisos as B, control as A WHERE A.COD_GP_C = '$id' and A.COD_GP_C = B.COD_GP_C");

         if($Verificar->rowCount()>= 1){
            $datos .= "<br> <br> <script>
            Sweetalert2({
            title: 'No se puede eliminar',
            text: 'Este grupo contiene usuarios afiliados a él',
            type: 'warning'
              }).then(function() {
               actualizar();

          });

            </script>"; 
         }else{
         $FilasGrupo = GruposModelo::Borrar_Grupos_Modelo($id);
         
         if( $FilasGrupo->rowCount()>= 1 ){
           
            $datos .= "<br> <br> <script>
            $('.RespuestaAjax').empty();
            Sweetalert2({
            title: 'Se borro Correctamente',
            text: 'Se ha eliminado el registro',
            type: 'success',
            confirmButtonText: 'Aceptar'
          }).then(function() {
            actualizar();

          });

            </script>"; 
           
           
         }
         else{
            $datos .= " <script>
            Sweetalert2(
                'No se borro correctamenta',
                'El grupo no se ha borrado Correctamente',
                'error');
                
            </script>"; 
         }
           
           }
   
          
              return $datos;
       }



    }