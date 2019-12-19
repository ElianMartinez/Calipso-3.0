        <!-- navbar -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="/Home/">Calipso 3.0</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">ISAAC </span>Creó un Usuario.
                                                        <div class="notification-date">hace 2 minutos</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>                    
                        <li class="nav-item dropdown nav-user">

                             <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $_SESSION['IMG']; ?>" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION["usuario"]; ?></h5>
                                    <span class="status"></span><span class="ml-2"><?php echo $_SESSION["COMENTARIO"]; ?></span>
                                </div>
                                <a class="dropdown-item" id="tttt" href="#"><i class="fas fa-user mr-2"></i>Cambiar de Usuario</a>
                                <a class="dropdown-item" href="<?php echo SERVERURL;?>CambioUsuario/"><i class="fas fa-cog mr-2"></i>Configuración</a>
                                <a class="dropdown-item" id="bbton" href="<?php echo $_SESSION['token']; ?>"><i class="fas fa-power-off mr-2 "></i>Cerrar Sección</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="modal fade" id="ModalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar de Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form_reenviar">
            <i class="fa fa-user" aria-hidden="true"></i><input class="form-control" required="" id="userC" type="text" name="user" placeholder="Username">
            <i class="fa fa-lock" aria-hidden="true"></i><input class="form-control" required="" id="passC" type="password" name="pass" placeholder="Password">
						
            <br>
            
            <br>
            <div class="alert-danger" style="display: none"> problema</div>
        
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="upuser" class="btn btn-primary">Enviar</button>
      </div>

    </form>
    </div>
  </div>
</div>
        <!-- Modal -->
<div class="modal fade" id="SalidaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="font-size:25px;" id="exampleModalLabel">¿Quieres cerrar sesión?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-footer ">
        <button type="button" class="btn btn-primary " data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger aaa">Salir</button>
      </div>
    </div>
  </div>
</div>
        <script src="<?php echo SERVERURL; ?>Vistas/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <script>
    
    $('#tttt').on('click', function(e){
		e.preventDefault();
        $('#ModalUser').modal('show');
	});

  $("#upuser").on('click',function(e){
    e.preventDefault();
      let user1 = $('#userC').val();
      let pass1 = $('#passC').val();
     console.log(user1+" "+pass1);
      $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/loginAjax.php',
        type:"POST",
        dataType:'html',
        data:{user : user1, pass : pass1},
    })
    .done(function(respuesta){
       $(".alert-danger").html(respuesta);
       $(".alert-danger").show();
    })

    .fail(function(){
        console.log('error');
    });

    });

	$('#bbton').on('click', function(e){
		e.preventDefault();
        $('#SalidaModal').modal('show');
	});

    $('.aaa').on('click', function(e){
		e.preventDefault();
        var Token = $(this).attr('href');
        $.ajax({
            url:'<?php echo SERVERURL; ?>Ajax/loginAjax.php?token='+Token,
            success:function(data){
                if(data=="true"){
                    
                }else{
                    window.location.href="<?php echo SERVERURL; ?>login";
                }
            }
        });
		
  });
  



    $('.form_reenviar').submit(function(e){
    e.preventDefault();
    console.log("hola lo la li lu");
    var form=$(this);
    var formdata = new FormData(this);

    

    $.ajax({
	url:'<?php echo SERVERURL; ?>Ajax/loginAjax.php',
		type:'post',
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
		
	});
   



</script>

        <!-- ============================================================== -->
        <!-- end navbar -->