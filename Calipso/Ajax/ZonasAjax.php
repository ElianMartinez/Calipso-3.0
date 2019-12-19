<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";

if(isset($_POST['MostrarDatos'])){
    require_once "../Controladores/ZonasControlador.php";
    $logout = new ZonasControlador();
    $result = $logout->MostrarZonas();
   echo $result;
    
 }

 if(isset($_POST['BorrarDatos'])){
    require_once "../Controladores/ZonasControlador.php";
    $logout = new ZonasControlador();
    $result = $logout->BorrarZonas($_POST['BorrarDatos']);
    echo $result;
    
}


if(isset($_POST['nombre']) && $_POST['ID'] == "" ){
  require_once "../Controladores/ZonasControlador.php";
  $logout = new ZonasControlador();
  $datos = array("",$_POST['nombre'],$_POST["nota"]);
  $result = $logout->InsertarZona($datos);
  echo $result;
  
}

if(isset($_POST['nombre']) && $_POST['ID'] != "" ){
  require_once "../Controladores/ZonasControlador.php";
  $logout = new ZonasControlador();
  $datos = array($_POST['ID'],$_POST['nombre'],$_POST["nota"]);
  $result = $logout->ModificarZonas($datos);
  echo $result;
  
}