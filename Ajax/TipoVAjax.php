<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";

if(isset($_POST['MostrarDatos'])){
    require_once "../Controladores/TipoVControlador.php";
    $logout = new TipoVControlador();
    $result = $logout->MostrarTipoV();
   echo $result;
 }

 if(isset($_POST['BorrarDatos'])){
    require_once "../Controladores/TipoVControlador.php";
    $logout = new TipoVControlador();
    $result = $logout->BorrarTipoV($_POST['BorrarDatos']);
    echo $result;
    
}

if(isset($_POST['nombre']) && $_POST['ID'] == "" ){
  require_once "../Controladores/TipoVControlador.php";
  $logout = new TipoVControlador();
  $datos = array("",$_POST['nombre']);
  $result = $logout->InsertarTipoV($datos);
  echo $result;
}

if(isset($_POST['nombre']) && $_POST['ID'] != "" ){
  require_once "../Controladores/TipoVControlador.php";
  $logout = new TipoVControlador();
  $datos = array($_POST['ID'],$_POST['nombre']);
  $result = $logout->ModificarTipoV($datos);
  echo $result;
  
}

if(isset($_POST['Select'])){
  require_once "../Controladores/TipoVControlador.php";
  $logout = new TipoVControlador();
  $result = $logout->mostrarTV();
 echo $result;
}