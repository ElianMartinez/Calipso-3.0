<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";

if(isset($_POST['MostrarDatos'])){
    require_once "../Controladores/VendedoresControlador.php";
    $logout = new VendedoresControlador();
    $result = $logout->MostrarVendedores();
    echo  $result;
 }

 if(isset($_POST['tipoV']) && $_POST["nombre"]){
  require_once "../Controladores/VendedoresControlador.php";
  $logout = new VendedoresControlador();
  if(empty($_POST['nombre'])){
    $_POST['nombre'] = " ";
  }

  
  $result = $logout->BuscarVendedores($_POST['nombre'],$_POST['sexo'],$_POST['tipoV']);
  echo  $result;
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
  $result = $logout->BuscarZona($_POST['BuscarDatos']);
 echo $result;  
}

if(isset($_POST['nombre1']) && $_POST['ID'] == "" ){
  require_once "../Controladores/VendedoresControlador.php";
  $logout = new VendedoresControlador();
  $datos = array("",$_POST['nombre'],$_POST["nota"]);
  $result = $logout->InsertarVendedores($datos);
  echo $result; 
}

if(isset($_POST['nombre1']) && $_POST['ID'] != "" ){
  require_once "../Controladores/VendedoresControlador.php";
  $logout = new VendedoresControlador();
  $datos = array($_POST['ID'],$_POST['nombre'],$_POST["nota"]);
  $result = $logout->ModificarZonas($datos);
  echo $result;
}