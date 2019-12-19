<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";


 
 
 if(isset($_POST['BorrarDatos'])){
  require_once "../Controladores/ImpuestosControlador.php";
  $logout = new ImpuestosControlador();
  $result = $logout->BorrarImpuestos($_POST['BorrarDatos']);
  echo $result;
}

if(isset($_POST["MostrarDatos"])){
  require_once "../Controladores/ImpuestosControlador.php";
  $logout = new ImpuestosControlador();
  $result = $logout->MostrarImpuestos();
  echo $result;
}


if(isset($_POST['BuscarDatos'])){
  require_once "../Controladores/ImpuestosControlador.php";
  $logout = new ImpuestosControlador();
  $result = $logout->BuscarImpuestos($_POST['BuscarDatos']);
  echo $result;
}

if(isset($_POST['nombre']) && $_POST['ID'] == "" ){
  require_once "../Controladores/ImpuestosControlador.php";
  $logout = new ImpuestosControlador();
  $datos = array("",$_POST['nombre'],$_POST['resumen'],$_POST['tasa']);
  $result = $logout->InsertarImpuestos($datos);
  echo $result;
  
}


if(isset($_POST['nombre']) && $_POST['ID'] != "" ){
  require_once "../Controladores/ImpuestosControlador.php";
  $logout = new ImpuestosControlador();
  $datos = array($_POST['ID'],$_POST['nombre'],$_POST['resumen'],$_POST['tasa']);
  $result = $logout->ModificarImpuesto($datos);
  echo $result;
  
  
}