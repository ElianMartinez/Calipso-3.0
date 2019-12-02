


  
       

<div class="dashboard-wrapper">
        <br> <h1 class="text-center">Configuración de Cuenta</h1>
 


                                                <!-- Modal -->
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-size:25px;" class=" modal-title " id="labelModal"></h5>
                                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </a>
                                                            </div>
                                                            <div class="modal-body">
                                                            <center><span style="font-size: 48px; color: Tomato;"><i class="red fas fa-exclamation-triangle"></i></span></center>
                                                                <p style="font-size:20px">        Las contraseñas son diferentes por favor intente escribirlas bien</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="#" class="btn btn-secondary"  data-dismiss="modal">Close</a>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                   

                                <div class="RespuetaAjax">

                                </div>
                     
    <br> <center> <div class=" col-xl-6 col-lg-6 col-md-9 col-sm-12 col-12">
                            <div class="section-block">
                               
                            </div>
                            <div class="accrodion-regular">
                                <div id="accordion3">
                                    
                                    <div class="card mb-2 ">
                                        <div class="card-header" id="headingEight">
                                            <h5 class="mb-0">
                                               <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                 <span class="fas fa-angle-down mr-4"></span>Configuración de Contraseña
                                             </button>       </h5>
                                        </div>
                                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion3">
                                            <center><br><div class=" col-lg-9 col-md-12 col-sm-12 col-12"> 
                                                <div class="card">
                                                    
                                                    <div class="card-body">
                                                        <form action="<?php echo SERVERURL;?>Ajax/cambiarConfiguracionAjax.php" method="post" class="FormularioAjax2"  >
                                                            <div class="form-group">
                                                                <label for="inputUserName">Contraseña Anterior</label>
                                                                <input id="inputUserName" type="password" name="password-anterior" data-parsley-trigger="change" required="" placeholder="Introduzca tu Contraseña anterior" autocomplete="off" class="form-control">
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <label for="pass">Contraseña Nueva</label>
                                                                <input  id="pass" type="password" name="pass2" placeholder="Contraseña" required="" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Rpass">Repita la  Contraseña</label>
                                                                <input  id="Rpass"  type="password" name="pass3" required="" placeholder="Contraseña" class="form-control">
                                                           
                                                            </div>
                                                                                                        
                                                                <center><div class="col-sm-6 pl-0">
                                                                    <p class="text-center">
                                                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                                        
                                                                    </p>
                                                                </div>  </center>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><br></center>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingNine">
                                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                  <span class="fas fa-angle-down mr-3"></span>Configuración de Imagen de Perfil
                                             </button>
                                     </h5>
                                        </div>
                                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion3">
                                            <div class="card-body">
                                                <div class="form-control">
                                                
                                                    <form method="post" action="#" enctype="multipart/form-data">
                                                        <div class="card" style="width: 18rem;">
                                                            <img class="card-img-top" src="<?php echo $_SESSION['IMG']; ?>">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Sube una foto</h5>
                                                                <p class="card-text">Sube una imagen...</p>
                                                                <div class="form-group">
                                                                    <label  for="image">Nueva imagen</label>
                                                                    <input required="" type="file" accept="image/png, .jpeg, .jpg, image/gif" class="form-control-file" name="image" id="image">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary upload">Subir</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                        <center> <div class="RespuestaImg"></div></center>
                                        </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></center>
                    </div>

                        

                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                      
                        
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo SERVERURL; ?>Vistas/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

 

   <script> 

   
$(document).ready(function() {
            $(".upload").click(function(e){

            
                e.preventDefault();
                
                var formData = new FormData();
                var files = $('#image')[0].files[0];
                formData.append('file',files);
                $.ajax({
                    url: '<?php echo SERVERURL; ?>Ajax/cambiarConfiguracionAjax.php',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response != 0) {
                         // let result =  response.split(">",2);
                         swal(
                             "Excelente","","success"
                         );
                          $(".card-img-top").attr("src",response);
                          console.log(response);
                          $(".user-avatar-md ").attr("src",response);
                        } else {
                            swal(
                             "Alerta","El formato es deconocido o el campo esta vacio","warning"
                         );
                        }
                    }
                });
                return false;
              });     

            });
        
       

    




	$('.FormularioAjax2').submit(function(e){
		e.preventDefault();
		var form=$(this);
        let pass1 = $("#pass").val();
        let pass2 = $("#Rpass").val();
        console.log(pass1+" "+pass2);
        if(pass1 != pass2){
            $("#labelModal").text("Las contraseñas no coinciden");
            $('#myModal').modal('show');
    }else{
   var tipo=form.attr('data-form');
        var accion=form.attr('action');
        var metodo=form.attr('method');
        console.log(tipo +"    "+ accion+"    " + metodo);
        var formdata = new FormData(this);
    $.ajax({
	url:accion,
		type:metodo,
		data: formdata ? formdata : form.serialize(),
       cache: false,
        contentType: false,
        processData: false,
	})
	.done(function(respuesta){
		
		$(".RespuetaAjax").html(respuesta);
	})

	.fail(function(){
		console.log('error');
	});

}
  });




    </script>
