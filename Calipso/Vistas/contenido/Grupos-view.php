<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Información</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
    En este formulario es para agregar, modificar y eliminar la lista de Grupos.
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>

<style>
.container{
    margin-top: 30px;
}

.social {
	
    display:flex;
    float: right;
   /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
	                       /* Establecemos la barra en la izquierda */
	top: 400px; /* Bajamos la barra 200px de arriba a abajo */
    z-index: 2000;
    
    /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
}
 
	.social ul {
        
       
       
		list-style: none;
	}
 
	.social ul li a {
        padding-bottom: 5px;
         border-radius: 50%;
        width: 60px;
        height: 60px;
		display: inline-block;
		color:#fff;
		background: #000;
		text-decoration: none;
	 /* Establecemos una transición a todas las propiedades */
	}
 
	.social ul li .icon-facebook {background:#3b5998;} /* Establecemos los colores de cada red social, aprovechando su class */
	.social ul li .icon-twitter {background: #00abf0;}
	.social ul li .icon-googleplus {background: #d95232;}
	.social ul li .icon-pinterest {background: #ae181f;}
	.social ul li .icon-mail {background: #666666;}
 
	.social ul li a:hover {
		background: #000; /* Cambiamos el fondo cuando el usuario pase el mouse */
	 /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
	}

</style>


<div class="dashboard-wrapper"> 
        <div class="social">
                <ul>
                    <li><a href=""  class="icon-facebook" style="background-color: #064E60;"><center><i class="fas fa-info-circle" style="font-size: 25px; margin-top: 5px;"></i></center><h5 style="color: white;"><center>F4</center></h5></a></li><br>
                    <li><a href=""  class="icon-facebook"><center><i class="fas fa-plus-circle" style="font-size: 25px; margin-top: 5px;"></i></center><h5 style="color: white;"><center>F2</center></h5></a></li><br>
                    <li><a href=""  class="icon-facebook" style="background-color: #064E60"><center><i class="fas fa-search"style="font-size: 25px; margin-top: 5px;"></i></center><h5 style="color: white;"><center>F6</center></h5></a></li>
                  
                </ul>
            </div>
            
    <div class="container">
            <h2  id="Titulo" class="text-center" >MAESTROS DE GRUPO</h2> 
        <div class="MostrarGrupos">
 
 <div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <form action="#" class="form-inline ">  
                                 <h4 style="margin-top:12px" >Lista de Grupos</h4>

                                 <button type="button" id="agregargrupo" class="btn btn-primary" style="color:white; margin-left:30px "><i class="fas fa-plus-circle"></i> Agregar</button>
                         
                                
                                       
                                        <div class="form-group mx-sm-3 mb-2">
                                         
                                          <input type="text" autocomplete="off" class="form-control" id="input2" placeholder="Buscar...">
                                        </div>
                                       
                                      </form>
                            </div>
                                <div class="card-body">
                                <div class="table-responsive">
                                
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">CODIGO</th>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">OPERACIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="RespuestaAjax">
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                    <div class="Registrogrupos">
                        <div class="card">
                                <div class="form-group">
                                 <div class="row">
                                     <div style="margin-top:0px;" class="container">
                                        <button id="back" class="btn btn-dark"><i class="fas fa-arrow-left"></i></button>
                                         </div>
                                        </div> 
                            <div class="card-body border-top">
                                   
                                    <div class="form-group">
                                            <form class="FormularioAjax" action="#">  
                                        <div style="display:flex;">
                    <h5  class="col-xl-4 col-lg-6 col-md-9">NOMBRE DEL GRUPO</h5>
                                        </div>
                                        <div class="input-group mb-2 col-xl-4 col-lg-6 col-md-9 ">
                                            <input required type="text" id="nombreGrupo"  class="form-control">
                                            <div class="input-group-append">
                                            <button type="button" id="registarungrupo" class="btn btn-primary">Agregar!</button>
                                                <button type="button" id="modificarungrupo" class="btn btn-primary">Modificar!</button>
                                                <button class="auxiliar" style="display:none" vall="" ></button>
                                        </div>
                                    </div>
                                </form>
                                    </div>  
                                    <div class="table-responsive">
                                    <div class="RespuestaAjax2">
                                            
                                                   
                                                
                                    </div>
                                    </div>
                                    <div class="RespuestaAjax3">

                                    </div>
                                        
                    </div>

                   
    </div>   
</div>




<script>



$('.Registrogrupos').hide();


$("#modificarungrupo").click(function(e){
    let nombre = $('#nombreGrupo').val();
    let id =  $(".auxiliar").attr('vall');
   if(nombre === ""){
    alert("Por favor ingrese un valor");
    $('#nombreGrupo').focus();
   }else{
    $('.pre-loader').show();
    $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/GruposAjax.php',
        type:"POST",
        dataType:'html',
        data:{NombreMM : nombre,IDMODIFICADOR : id},
    })
    .done(function(respuesta){
       $(".RespuestaAjax3").html(respuesta);
       $('.pre-loader').hide();
      
      
    })

    .fail(function(){
        console.log('error');
    });
   
   
   }
    
});


$("#registarungrupo").click(function(e){
    let nombre = $('#nombreGrupo').val(); 
   if(nombre === ""){
    alert("Por favor ingrese un valor");
    $('#nombreGrupo').focus();
   }else{
    $('.pre-loader').show();
    $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/GruposAjax.php',
        type:"POST",
        dataType:'html',
        data:{Nombre : nombre},
    })
    .done(function(respuesta){
       $(".RespuestaAjax2").html(respuesta);
       $('.pre-loader').hide();
       $("#modificarungrupo").show();
       $("#registarungrupo").hide();
      
    })

    .fail(function(){
        console.log('error');
    });
   
   
   }
    
});

function Modificarr(Id){
    

    let idcheck = "switch16"+Id;
    let op = "";
    if( $('#'+idcheck).is(':checked') ) {
       op = "SI";
   }else{
    op = "NO";
   }
   
   $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/GruposAjax.php',
        type:"POST",
        dataType:'html',
        data:{IDMM : Id, OP : op},
    })
    .done(function(respuesta){
        console.log("Bien");
      
    })

    .fail(function(){
        console.log('error');
    });

    
}

function Modificar(Id,Nombre){
    $(".auxiliar").attr('vall',Id);
    $('#Titulo').text("EDITAR GRUPO");
    $('.Registrogrupos').show();
    $('.MostrarGrupos').hide();
    $('#registarungrupo').hide(); 
    $('#nombreGrupo').val(Nombre); 
    $('#Registrogrupos').show();
    $('.pre-loader').show();
    $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/GruposAjax.php',
        type:"POST",
        dataType:'html',
        data:{IDM : Id},
    })
    .done(function(respuesta){
       $(".RespuestaAjax2").html(respuesta);
      $('.pre-loader').hide();
    })

    .fail(function(){
        console.log('error');
    });

}

$('#back').click(function(){
    $('#Titulo').text("MAESTROS DE GRUPO");
    $(".FormularioAjax")[0].reset();
    $('.Registrogrupos').hide();
    $('.MostrarGrupos').show();
    $(".RespuestaAjax2").empty();
    let grupos = "ready";
    
    $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/GruposAjax.php',
        type:"POST",
        dataType:'html',
        data:{grupo : grupos},
    })
    .done(function(respuesta){
       $(".RespuestaAjax").html(respuesta);
       $('.bttool').tooltip();
      
    })

    .fail(function(){
        console.log('error');
    });

});

$('#agregargrupo').click(function(){
    $('#Titulo').text("AGREGAR GRUPO");
    $('.Registrogrupos').show();
    $('.MostrarGrupos').hide();
    $('#nombreGrupo').show();
   $('#registarungrupo').show();
   $("#modificarungrupo").hide();
   $('#tituloEspecial').text("NOMBRE DEL GRUPO"); 

});

$(document).ready(function() {
   
    $(".RespuestaAjax").empty();
    let grupos = "ready";
    
    $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/GruposAjax.php',
        type:"POST",
        dataType:'html',
        data:{grupo : grupos},
    })
    .done(function(respuesta){
       $(".RespuestaAjax").html(respuesta);
       $('.bttool').tooltip();
      
    })

    .fail(function(){
        console.log('error');
    });

});



function actualizar(){
    let grupos = "ready";
    
    $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/GruposAjax.php',
        type:"POST",
        dataType:'html',
        data:{grupo : grupos},
    })
    .done(function(respuesta){
       $(".RespuestaAjax").html(respuesta);
       $('.bttool').tooltip();
      
    })

    .fail(function(){
        console.log('error');
    });
}





function borrar22(id){
    
    Sweetalert2({
            title: '¿Estás seguro? ',
            text: 'Deseas borrar un grupo, este se borrará permanentemente del sistema! ',
            type: 'question',
            confirmButtonText: 'Aceptar',
            showCancelButton: true
          }).then(function() {
        $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/GruposAjax.php',
        type:"POST",
        dataType:'html',
        data:{ID : id},
    })
    .done(function(respuesta){
       $(".RespuestaAjax3").html(respuesta);
        $('.tooltip').removeClass('show');
    })

    .fail(function(){
        console.log('error');
    });


          });
};



$(document).on('keyup', '#input2', function(e){

    let valor = $(this).val();
    console.log(valor);
   if (valor != ""){
        buscarGrupos(valor);
   }else{
    let grupos = "ready";
    $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/GruposAjax.php',
        type:"POST",
        dataType:'html',
        data:{grupo : grupos},
    })
    .done(function(respuesta){
       $(".RespuestaAjax").html(respuesta);
      
    })

    .fail(function(){
        console.log('error');
    });
   }
       
});

function buscarGrupos(consulta) {
           $('.pre-loader').show();
    $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/GruposAjax.php',
        type:"POST",
        dataType:'html',
        data:{valores : consulta},
    })
    .done(function(respuesta){
       $(".RespuestaAjax").html(respuesta);
        $('.pre-loader').hide();
      
    })
    .fail(function(){
        console.log('error');
    });



}


$(document).ready(function(){
	$(document).keydown(function(event){
        
    if(event.which === 113)
    {
    $('#Titulo').text("AGREGAR GRUPO");
    $('.Registrogrupos').show();
    $('.MostrarGrupos').hide();
    $('#modificarungrupo').hide();
    }
    
    
    if(event.which === 114)
    {
  $('#myModal').modal('show');
    }
 
if(event.which === 115)
    {
  $('#nombreGrupo').focus();
    }
});
});





</script>