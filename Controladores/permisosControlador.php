
<?php


if ($peticionAjax == true) {
    require_once "../Modelos/loginModelo.php";
    } else {
       require_once "./Modelos/loginModelo.php";
    }

    class PermisosControlador extends loginModelo {

    public function Inicio_Permisos($role,$Permiso){
           
      $datosPermiso = loginModelo::iniciar_permisos_modelo($role,$Permiso);
        
        
         $row = $datosPermiso->fetch();
             if($row["PERMISO"] == "NO"){
                return "style='display:none'";
             }else{
                return "SI";
             }
           
           

   



}



    }