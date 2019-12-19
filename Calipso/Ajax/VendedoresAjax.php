<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";


if(isset($_POST['MostrarDatos'])){
    require_once "../Controladores/VendedoresControlador.php";
    $logout = new VendedoresControlador();
    $result = $logout->MostrarVendedores();
    echo  $result;
 }

 if(isset($_POST['inputUserName'])){
 
 }else{
  if(isset($_POST['tipoV']) && $_POST["nombre"]){
    require_once "../Controladores/VendedoresControlador.php";
    $logout = new VendedoresControlador();
    if(empty($_POST['nombre'])){
      $_POST['nombre'] = " ";
    }
  
    
    $result = $logout->BuscarVendedores($_POST['nombre'],$_POST['sexo'],$_POST['tipoV']);
    echo  $result;
  }
 }

 if(isset($_POST['BorrarDatos'])){
    require_once "../Controladores/VendedoresControlador.php";
    $logout = new VendedoresControlador();
    $result = $logout->BorrarVendedores($_POST['BorrarDatos']);
    echo $result;
}

 if(isset($_POST['BuscarDatos'])){
  require_once "../Controladores/VendedoresControlador.php";
  $logout = new VendedoresControlador();
  $result = $logout->BuscarVendedores($_POST['BuscarDatos'],$_POST['Sexo'],$_POST['de']);
 echo $result;  
}

if(isset($_POST['inputUserName']) && $_POST['ID'] == "" ){
  require_once "../Controladores/VendedoresControlador.php";
  $logout = new VendedoresControlador();
date_default_timezone_set('America/Santo_Domingo');
  $hora = date('g:i:s A');
  $fechaActual = date('d-m-Y');
  $datos = array('',0,$_POST['tipoV'],$_POST["inputUserName"],
  '',$_POST["Sexo"],$_POST["cedulaV"],$_POST["estado_c"],
  $_POST['fecnac'],$_POST['direccion1'],"",$_POST['ciudad'],
  $_POST['celular'],$_POST['telefono'],$_POST['vmm'],"",$_POST['cobros1'],
  $_POST['cobros2'],$_POST['cobros3'],$_POST['cobros4'],$_POST['cobros5'],
  $_POST['cobros6'],$_POST['precio1'],$_POST['precio2'],$_POST['precio3'],
  $_POST['precio4'],$_POST['precio44'],$_POST['credito1'],$_POST['credito2'],
  $_POST['credito3'],$_POST['credito4'],$_POST['credito44'],$_POST['status'],
  "","",$fechaActual,"",$hora,"","",0,0,0,0,0,0,0,0,0,0);

  $result = $logout->InsertarVendedores($datos);
  echo $result; 
}

if(isset($_POST['inputUserName']) && $_POST['ID'] != "" ){
  require_once "../Controladores/VendedoresControlador.php";
  date_default_timezone_set('America/Santo_Domingo');
  $hora = date('g:i:s A');
  $fechaActual = date('d-m-Y');
  $logout = new VendedoresControlador();
  $datos = array($_POST['ID'],0,$_POST['tipoV'],$_POST["inputUserName"],
  '',$_POST["Sexo"],$_POST["cedulaV"],$_POST["estado_c"],
  $_POST['fecnac'],$_POST['direccion1'],"",$_POST['ciudad'],
  $_POST['celular'],$_POST['telefono'],$_POST['vmm'],"",$_POST['cobros1'],
  $_POST['cobros2'],$_POST['cobros3'],$_POST['cobros4'],$_POST['cobros5'],
  $_POST['cobros6'],$_POST['precio1'],$_POST['precio2'],$_POST['precio3'],
  $_POST['precio4'],$_POST['precio44'],$_POST['credito1'],$_POST['credito2'],
  $_POST['credito3'],$_POST['credito4'],$_POST['credito44'],$_POST['status'],
  "","",$fechaActual,"",$hora,"","",0,0,0,0,0,0,0,0,0,0);
  $result = $logout->ModificarVendedores($datos);
  echo $result;
}