<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";

if(isset($_POST['MostrarDatos'])){
    require_once "../Controladores/BancoControlador.php";
    $logout = new BancoControlador();
    $result = $logout->MostrarBanco();
   echo $result;
    
 }
 if(isset($_POST['BorrarDatos'])){
  require_once "../Controladores/BancoControlador.php";
  $logout = new BancoControlador();
  $result = $logout->BorrarBanco($_POST['BorrarDatos']);
 echo $result;
  
} 

if(isset($_POST['BuscarDatos'])){
  require_once "../Controladores/BancoControlador.php";
  $logout = new BancoControlador();
  $result = $logout->BuscarBanco($_POST['BuscarDatos']);
 echo $result;
  
}

if(isset($_POST['nombre']) && $_POST['ID'] == "" ){
  require_once "../Controladores/BancoControlador.php";
  $logout = new BancoControlador();
  $datos = array("",$_POST['nombre']);
  $result = $logout->InsertarBanco($datos);
  echo $result;
  
}


if(isset($_POST['nombre']) && $_POST['ID'] != "" ){
  require_once "../Controladores/BancoControlador.php";
  $logout = new BancoControlador();
  $datos = array($_POST['ID'],$_POST['nombre']);
  $result = $logout->ModificarBanco($datos);
  echo $result;
  
}

