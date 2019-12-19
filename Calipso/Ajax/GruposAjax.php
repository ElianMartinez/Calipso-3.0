<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";

if(isset($_POST['grupo'])){
   require_once "../Controladores/GruposControlador.php";
   $logout = new GruposControlador();
   $result = $logout->MostrarGrupos();
   echo $result;

}

if(isset($_POST['valores'])){
    require_once "../Controladores/GruposControlador.php";
    $logout = new GruposControlador();
    $result = $logout->BuscarGrupos($_POST['valores']);
    echo $result;
 
 }

 if(isset($_POST['ID'])){
    require_once "../Controladores/GruposControlador.php";
    $logout = new GruposControlador();
    
    $result = $logout->BorrarGrupos($_POST['ID']);
    echo $result;
 }



 if(isset($_POST['Nombre'])){
   require_once "../Controladores/GruposControlador.php";
   $logout = new GruposControlador();
   $result = $logout->AgregarGrupos($_POST['Nombre']);
   echo $result;
}

if(isset($_POST['IDM'])){
   require_once "../Controladores/GruposControlador.php";
   $logout = new GruposControlador();
   $result = $logout->BuscarPermisos($_POST['IDM']);
   echo $result;
}

if(isset($_POST['IDMM'])){
   require_once "../Controladores/GruposControlador.php";
   $logout = new GruposControlador();
   $result = $logout->ModificarG($_POST['IDMM'],$_POST["OP"]);
   echo $result;
}

if(isset($_POST['NombreMM'])){
   require_once "../Controladores/GruposControlador.php";
   $logout = new GruposControlador();
   $result = $logout->ModificarGN($_POST['NombreMM'],$_POST["IDMODIFICADOR"]);
   echo $result;
}

