
<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";
if(isset($_FILES["file"])){
if (($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/gif")) {
    require_once "../Controladores/CambiarConfiguracionControlador.php";
    $nombre = $_FILES['file']['name'];
  $file = $_FILES["file"]["tmp_name"];
   $file;
   session_start();
    $nombre;
   $cambio = new CambiarConfiguracionControlador();
   $veri =  $cambio->Subir_img(SERVERURL."Vistas/assets/images/".$nombre,$_SESSION["usuario"]);
   if($veri == "SI"){
  if (move_uploaded_file($file, "../Vistas/assets/images/".$nombre)) {
        //more code here
        $_SESSION["IMG"] = SERVERURL."Vistas/assets/images/".$nombre;
         echo $_SESSION["IMG"];

    } else {
        echo "fallo la movida";
  }
} else {
    echo "fallo la subida a la base de datos";

}

}else{
    echo 0;
}
}else{
    echo 0;
}

if(isset($_POST["password-anterior"])) {
    
    require_once "../Controladores/CambiarConfiguracionControlador.php";
    $cambio = new CambiarConfiguracionControlador();
   
    session_start();
   $a =  $cambio->CambiarConfig($_SESSION["usuario"],$_POST["password-anterior"],$_POST["pass2"],$_POST["pass3"]);

   echo $a;

}else {
    
}