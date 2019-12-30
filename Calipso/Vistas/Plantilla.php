		
		
			<!DOCTYPE html>
		<html lang="es">
		<head>
			<title><?php echo COMPANY; ?></title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
			
			<link rel="stylesheet" href="<?php echo SERVERURL; ?>Vistas/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo SERVERURL; ?>Vistas/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>Vistas/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>Vistas/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>Vistas/assets/vendor/vector-map/jqvmap.css">
    <link href="<?php echo SERVERURL; ?>Vistas/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>Vistas/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>Vistas/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>Vistas/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SERVERURL; ?>Vistas/assets/vendor/daterangepicker/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL; ?>Vistas/css/Search.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL; ?>Vistas/css/sweetalert2.css" />
	<link rel="stylesheet" href="<?php echo SERVERURL; ?>Vistas/assets/datatables.min.css">
	
	
	

	<!-- CSS Just for demo purpose, don't include it in your project -->

	</head>
	
	
	<body>
		<script src="<?php echo SERVERURL; ?>Vistas/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
		
		<style type="text/css">
			
			.pre-loader{
				position: absolute;
				
				left: 50%;
				top: 50%;
			}

			.pre-loader span{
				height: 2em;
				width: 2em;
				background: black;
				display: block;
				position: absolute;
				left: 0;
				top: 0;
				
				z-index: 100;

				border-radius:50%;
				animation: wave 2s ease-in-out infinite;

			}

			.pre-loader span:nth-child(1){
				background: #0292B7;
				left: -4.5em;
				animation-delay: 0s;

			}
			

			.pre-loader span:nth-child(2){
				background: #1AC8DB;
				left: -1.5em;
				animation-delay: 0.1s;
				
			}


			.pre-loader span:nth-child(3){
				background: #8C756A;
				left: 1.5em;
				animation-delay: 0.2s;
				
			}


			.pre-loader span:nth-child(4){
				background: #DEE2EC;
				left: 4.5em;
				animation-delay: 0.3s;
				
			}

			@keyframes wave{
				0%,
				75%,
				100%{
					transform: translateY(0) scale(1);
				}
				25%{
					transform: translateY(2.5em);
				}

				50%{
					transform: translateY(-2.5em) scale(1.1);
				}


			}
			#example td{
    font-size:12px;
    color: #676A6C;
  }
  #example th{
	font-size:12px;
	
    color: #676A6C;
  }
  #example .bttool{
    font-size:15px;
    margin-left:10px;
    cursor: pointer;
  }
  #example thead{
    background: #EFEFF3;
    
  }

	   </style>
	
	<div class="pre-loader">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>


	
	<?php 

		$peticionAjax = false;
		require_once "./Controladores/VistasControlador.php";

		$vt = new vistasControlador();
		$ruta = $vt->obtener_vistas_controlador();
		if($ruta =="login" || $ruta == "404"):
			if($ruta =="login"){
				require_once "./Vistas/contenido/login-view.php";
			}else{
				require_once "./Vistas/contenido/404-view.php";
			}
			
		else:
			session_start();
			require_once "./Controladores/loginControlador.php";
			$lc =  new loginControlador();
			if(!isset($_SESSION['token']) || !isset($_SESSION['usuario'])){
				$lc->forzar_Cierre_Seccion_controlador();
			}
			
		?>
				<!--============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
       
        <?php include "Vistas/modulos/navbar.php"; ?>

		<?php include "Vistas/modulos/navlateral.php"; ?>
		
			

		<?php require_once $ruta; ?>

		<?php // include "Vistas/modulos/footer.php"; ?>
	</div>

	<script type="text/javascript">
		$('.pre-loader').hide();
		$(document).ready(function(){
		$(document).keydown(function(event){
        if(event.which === 27){
			let url ="<?php echo SERVERURL; ?>Home/";
			window.location.replace(url);
        }
	})

		});

		function direcion(){
			
		}
	
	</script>
		<script src="<?php echo SERVERURL; ?>Vistas/js/funcionesG.js"></script>
	<?php include "Vistas/modulos/script.php"; ?>
	<?php endif ?>
         
          
       
		
			
			
			
			
			
		
		
		</body>
		</html>