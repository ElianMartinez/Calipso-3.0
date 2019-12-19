<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";

if(isset($_POST['usuario222'])){
    require_once "../Controladores/UsuarioControlador.php";
    $logout = new UsuarioControlador();
    $result = $logout->MostrarUsuario();
    echo $result;
 }

 if(isset($_POST['mosG'])){
    require_once "../Controladores/UsuarioControlador.php";
    $logout = new UsuarioControlador();
    $result = $logout->MostrarGrupoS();
    echo $result;
 }

 if(isset($_POST['usuario']) && $_POST['ID'] == "" ){
    require_once "../Controladores/UsuarioControlador.php";
    $logout = new UsuarioControlador();
    $result = $logout->InsertarGrupo($_POST['nombre'],$_POST['grupo'],$_POST["usuario"],$_POST["clave1"],$_POST["comentario"],$_POST["monto"],$_POST["acumulado"],$_POST["fac"]);
    echo $result;
 }

 if(isset($_POST['valores'])){
   require_once "../Controladores/UsuarioControlador.php";
   $logout = new UsuarioControlador();
   $result = $logout->Revisar($_POST['valores']);
   echo $result;
}

if(isset($_POST['idBorrar'])){
   require_once "../Controladores/UsuarioControlador.php";
   $logout = new UsuarioControlador();
   $result = $logout->borrar2($_POST['idBorrar']);
   echo $result;
}

if(isset($_POST['ID'])){
   if($_POST['ID'] != ""){
      require_once "../Controladores/UsuarioControlador.php";
      $logout = new UsuarioControlador();
      $result = $logout->Modificar($_POST['ID'],$_POST['nombre'],$_POST['grupo'],$_POST["usuario"],$_POST["clave1"],$_POST["comentario"],$_POST["monto"],$_POST["acumulado"],$_POST["fac"]);
      echo  $result;
   }
   
}

if(isset($_POST['valores1'])){
   require_once "../Controladores/UsuarioControlador.php";
   $logout = new UsuarioControlador();
   $result = $logout->BuscarUsuarios($_POST['valores1']);
   echo $result;
}