<?php 
require_once "./core/ConfigGeneral.php";
require_once "./Controladores/VistasControlador.php";

$plantilla = new vistasControlador();

$plantilla->obtener_plantilla_controlador();
