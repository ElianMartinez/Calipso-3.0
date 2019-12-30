<?php
$peticionAjax = true;
require_once "../core/ConfigGeneral.php";

if(isset($_POST['user'])){
   require_once "../Controladores/loginControlador.php";
   $logout = new loginControlador();
   
   $result = $logout->iniciar_sesion_controlador2($_POST["user"],$_POST["pass"]);
   echo $result;

}

if(isset($_POST['userlogin']) && isset($_POST['passlogin']) ){
   require_once "../Controladores/loginControlador.php";
   $logout = new loginControlador();
   
   $result = $logout->iniciar_sesion_controlador($_POST["user"],$_POST["pass"]);
   echo $result;



}

if(isset($_GET['token'])) {
   require_once "../Controladores/loginControlador.php";
   $logout = new loginControlador();

   return $logout->cerrar_sesion_controlador();

}