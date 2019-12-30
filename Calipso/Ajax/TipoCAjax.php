<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";

if(isset($_POST['MostrarDatos'])){
    require_once "../Controladores/TipoCControlador.php";
    $logout = new TipoCControlador();
    $result = $logout->MostrarTipoC();
   echo $result;
 }

 if(isset($_POST['BorrarDatos'])){
    require_once "../Controladores/TipoCControlador.php";
    $logout = new TipoCControlador();
    $result = $logout->BorrarTipoC($_POST['BorrarDatos']);
    echo $result;
    
}

if(isset($_POST['nombre']) && $_POST['ID'] == "" ){
  require_once "../Controladores/TipoCControlador.php";
  $logout = new TipoCControlador();
  $datos = array("",$_POST['nombre']);
  $result = $logout->InsertarTipoC($datos);
  echo $result;
}

if(isset($_POST['nombre']) && $_POST['ID'] != "" ){
  require_once "../Controladores/TipoCControlador.php";
  $logout = new TipoCControlador();
  $datos = array($_POST['ID'],$_POST['nombre']);
  $result = $logout->ModificarTipoC($datos);
  echo $result;
}

 
if(isset($_POST['Select'])){
  require_once "../Controladores/TipoCControlador.php";
  $logout = new TipoCControlador();
  $result = $logout->mostrarTC();
 echo $result;
}