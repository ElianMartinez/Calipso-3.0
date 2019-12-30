
 <!DOCTYPE html>
<html lang="es">
<head>
	<title>Login Sistema Calipso 3.0</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo SERVERURL; ?>Vistas/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL; ?>Vistas/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL;?>Vistas/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL;?>Vistas/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL;?>Vistas/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL;?>Vistas/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL;?>Vistas/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL;?>Vistas/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				<h4>Sistema Calipso 3.0</h4>
				<br><h6>Todos los Derechos Reservados por</h6>
				<p>Ing. Isaac Perez.</p>
				<p>Santo Domingo, Republica Dominicana</p>
				<p>Tels. 809-222-3348 /  809-779-1617</p>
				<h6>Ver.3.0</h6>
				<BR><h6>Licencia Otorgada a nombre de</h6>
				<p>Inverisap SRL</p>
				</div>
                 
				<form id="formLogin"  class="login100-form validate-form">
					<span class="login100-form-title">
				Bienvenidos
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Introduzca tu Usuario!">
						<input class="input100" id="userlogin" type="text" name="userlogin" placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Introduzca tu Contraseña!">
						<input class="input100" id="passlogin" type="password" name="passlogin" required placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div style="display:none" class="RespuestaAjax alert alert-info p-t-12" > Entro</div>
					<div class="container-login100-form-btn">
						<input type="submit" value="Login" class="login100-form-btn">
							
						
					</div>
					
					<div class="text-center p-t-12">
						<span class="txt1">
							Debes poner
						</span>
						<a class="txt2" href="#">
							Usuario / Constraseña?
						</a>
					</div>
					
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Para Usuario Contactanos...
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				
			</div>
		</div>
	</div>


	<div class="respuestafecth">

	</div>
	

	<script src="<?php echo SERVERURL; ?>Vistas/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo SERVERURL; ?>Vistas/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo SERVERURL; ?>Vistas/js/sweetalert2.min.js"></script>
	<script src="<?php echo SERVERURL; ?>Vistas/js/bootstrap.min.js"></script>
	<script src="<?php echo SERVERURL; ?>Vistas/js/material.min.js"></script>
	<script src="<?php echo SERVERURL; ?>Vistas/js/ripples.min.js"></script>
	<script src="<?php echo SERVERURL; ?>Vistas/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo SERVERURL; ?>Vistas/js/main2.js"></script>
	
<!--===============================================================================================-->	
<script src="<?php echo SERVERURL; ?>Vistas/js/sweetalert2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo SERVERURL; ?>Vistas/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo SERVERURL; ?>Vistas/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo SERVERURL; ?>Vistas/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo SERVERURL; ?>Vistas/vendor/tilt/tilt.jquery.min.js"></script>
	
<!--===============================================================================================-->
	<script src="<?php echo SERVERURL; ?>Vistas/js/main.js"></script>

	<script type="text/javascript">
		$('.pre-loader').hide();
		
		$("#formLogin").submit(function(event){
			event.preventDefault();
			 fetch("<?php echo SERVERURL; ?>Ajax/loginAjax.php" , {
 			 method: 'post',
             body: new FormData(document.getElementById('formLogin'))
}).then(respuesta => respuesta.text())

.then(function(dato) {
  $('.respuestafecth').html(dato);
}).catch(function(err) {
  // Error :(
});

});

		
	
	</script>

</body>
</html>