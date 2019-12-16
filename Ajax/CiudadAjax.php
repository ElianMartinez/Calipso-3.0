<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";

if(isset($_POST['MostrarDatos'])){
    require_once "../Controladores/CiudadControlador.php";
    $logout = new CiudadControlador();
    $result = $logout->MostrarCiudad();
   echo $result;
    
 }

 if(isset($_POST['Select'])){
  require_once "../Controladores/CiudadControlador.php";
  $logout = new CiudadControlador();
  $result = $logout->mostrarCD();
 echo $result;
}
 
 if(isset($_POST['BorrarDatos'])){
  require_once "../Controladores/CiudadControlador.php";
  $logout = new CiudadControlador();
  $result = $logout->BorrarCiudad($_POST['BorrarDatos']);
  echo $result;
}




if(isset($_POST['nombre']) && $_POST['ID'] == "" ){
  require_once "../Controladores/CiudadControlador.php";
  $logout = new CiudadControlador();
  $datos = array("",$_POST['nombre'],$_POST['resumen']);
  $result = $logout->InsertarCiudad($datos);
  echo $result;
  
}


if(isset($_POST['nombre']) && $_POST['ID'] != "" ){
  require_once "../Controladores/CiudadControlador.php";
  $logout = new CiudadControlador();
  $datos = array($_POST['ID'],$_POST['nombre'],$_POST['resumen']);
  $result = $logout->ModificarCiudad($datos);
  echo $result;
  
  
}