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
  $result = $logout->BuscarVendedores($_POST['BuscarDatos'],$_POST['Sexo'],$_POST['de']);
 echo $result;  
}

if(isset($_POST['nombre1']) && $_POST['ID'] == "" ){
  require_once "../Controladores/VendedoresControlador.php";
  $logout = new VendedoresControlador();
  $datos = array("",0,$_POST['tipoV'],$_POST["nombreV"],
  "",$_POST["Sexo"],$_POST["cedulaV"],$_POST["estado_c"],
  "fecha_naci",
);
  $result = $logout->InsertarVendedores($datos);
  echo $result; 
}

if(isset($_POST['nombre1']) && $_POST['ID'] != "" ){
  require_once "../Controladores/VendedoresControlador.php";
  $logout = new VendedoresControlador();
  $datos = array($_POST['ID'],$_POST['nombre'],$_POST["nota"]);
  $result = $logout->ModificarVendedores($datos);
  echo $result;
}