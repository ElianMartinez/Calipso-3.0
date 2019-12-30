<?php


if ($peticionAjax == true) {
    require_once "../Modelos/loginModelo.php";
    } else {
       require_once "./Modelos/loginModelo.php";
    }

    class loginControlador extends loginModelo {


        public function iniciar_sesion_controlador()
        {            
            $usuario = mainModel::limpiar_cadena($_POST["userlogin"]); 
            $pass = mainModel::limpiar_cadena($_POST["passlogin"]); 

            $datos = [
               "usuario" =>$usuario,
               "pass" => $pass  
            ];

            $datosCuenta = loginModelo::iniciar_sesion_modelo($datos);

            if($datosCuenta->rowCount()==1){
                $datosE = mainModel::ejecutar_consulta_simple("select * From dato_empresa");
                foreach($datosE as $em){
                    $_SESSION["N_E"] = $_em["NOMBRE"];
                }
            $row = $datosCuenta->fetch();
                  session_start(); 
            $_SESSION["usuario"] = $row['USUARIO'];
            $_SESSION["role"] = $row['COD_GP_C'];
            $_SESSION["COMENTARIO"] = $row['COMENTARIO'];
            $_SESSION["IMG"] = $row['IMG'];
                        if ($row['COMENTARIO'] == "ADMINISTRADOR DE SISTEMA") {
                            $url = SERVERURL."Home/";
                        } else {
                             $url = SERVERURL."Home/";
                        }
                        echo $urlLocation = '<script> window.location="'.$url.'" </script>';
                    
                        $_SESSION["token"] = mainModel::encryption($usuario);
            }else{

              
               $Alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Usuario o contraseña desconocido",
                    "Texto"=>"El usuario o la Contraseña no son validos porfavor intente nuevamente",
                    "Tipo"=>"warning"
               ];
              
               return mainModel::sweet_alert($Alerta);
             }
            }

            public function cerrar_sesion_controlador(){
               
                session_start();
                
                $datos = [
                    "Usuario"=> $_SESSION["usuario"]
                ];

                return loginModelo::cerrar_sesion_modelo($datos);
            }

            public function forzar_Cierre_Seccion_controlador(){
                session_destroy();
                return header("Location:".SERVERURL."login");
                
            }

            public function iniciar_sesion_controlador2($user,$pass)
            {    
                  loginControlador::cerrar_sesion_controlador(); 
                $usuario = mainModel::limpiar_cadena($user); 
                $pass = mainModel::limpiar_cadena($pass); 
    
                $datos = [
                   "usuario" =>$usuario,
                   "pass" => $pass  
                ];
    
                $datosCuenta = loginModelo::iniciar_sesion_modelo($datos);
    
                if($datosCuenta->rowCount()==1){
                    
                $row = $datosCuenta->fetch();
                      session_start(); 
                $_SESSION["usuario"] = $row['USUARIO'];
                $_SESSION["role"] = $row['COD_GP_C'];
                $_SESSION["COMENTARIO"] = $row['COMENTARIO'];
                $_SESSION["IMG"] = $row['IMG'];
                            if ($row['COMENTARIO'] == "ADMINISTRADOR DE SISTEMA") {
                                $url = SERVERURL."Home/";
                            } else {
                                 $url = SERVERURL."Home/";
                            }
                            echo $urlLocation = '<script> window.location="'.$url.'" </script>';
                        
                            $_SESSION["token"] = mainModel::encryption($usuario);
                }else{

                   $Alerta = "El usuario o la Contraseña no son validos porfavor intente nuevamente";
                   
                   return $Alerta;
                 }

                }



           
        }