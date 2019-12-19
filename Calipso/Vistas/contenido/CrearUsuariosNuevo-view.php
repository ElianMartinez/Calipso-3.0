
<style>
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 350px;
}

.backside .card a {
    font-size: 18px;
    
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
</style>

<center>


  <br>
  <div class="dashboard-wrapper">
    <div class="MostrarGrupos">


     
      <div class="col-xl-10 col-lg-11 col-md-12 col-sm-12 App1">
        <div class="card">
          <div class="card-header">
            <form action="#" class="form-inline ">
             <h4 style="margin-top:12px" class="display-7" >Lista de Usuarios</h4>

              <button type="button" id="agregargrupo" class="btn btn-primary" style="color:white; margin-left:30px "><i
                  class="fas fa-plus-circle"></i> Agregar</button>



              <div class="form-group mx-sm-3 mb-2">

                <input type="text" autocomplete="off" onKeyUp="this.value=this.value.toUpperCase();" class="form-control" id="input2" placeholder="Buscar...">
              </div>

            </form>
          </div>
          <div class="card-body">
            <section id="team" class="pb-5">
              <div class="container">
  
                  <div class="row RespuestaAjax">
                      <!-- Team member -->
                     
                    
          
                  </div>
              </div>
          </section>
          </div>
        </div>
      </div>
      </div>
    





    <div class="col-xl-10 col-lg-11 col-md-12 col-sm-12 App2">
      <div class="card">
        <div class="form-row " style="margin-top:10px ">
          <div class="col" style="float: left">
            <button id="back" class="btn btn-dark"><i class="fas fa-arrow-left"></i></button>
          </div>
          <div class="col">
            <center>
              <h2>Crear Nuevo Usuario</h2>
            </center>
          </div>


        </div>


        <div class="card-body border-top">
          <div class=" col-xl-9 col-lg-9 col-md-10 col-sm-10">

            <form action="<?php echo SERVERURL;?>Ajax/UsuarioAjax.php" method="post" class="FormularioAjax" id="basicform"  data-form="save" >
              <div class="form-row mb-8">
                <div class="col">
                  <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"><i
                          class="fas fa-address-book"></i></span></span>
                    <input id="inputUserName" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="nombre" data-parsley-trigger="change" required=""
                      placeholder="Introduzca tu Nombre" autocomplete="off" class="form-control">
                  </div>
                </div>
                <div class="col">
                  <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"><i
                          class="fas fa-user"></i></span></span>
                    <input id="Usuario" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="usuario" autocomplete="off"  placeholder="Introduzca tu Usuario" required=""
                      class=" form-control">
                      <span class="btn btn-danger aaaaa"></span>
                  </div>
                </div>
              </div>
              <div class="form-row mb-8">
                <div class="col">
                  <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"><i
                          class="fas fa-unlock"></i></span></span>
                          <input type="password" id="clave1" class="form-control" name="clave1" required placeholder="Introduzca tu Contraseña" >
                  </div>
                </div>

                <div class="col">
                  <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"><i
                          class="fas fa-lock"></i></span></span>
                          <input type="password" id="clave2" class="form-control" name="clave2" required placeholder="Repita tu Contraseña"
                          >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Comentario</label>
                <input type="text" id="comentario" class="form-control" name="comentario" placeholder="Introduzca un Comentario">
                                       
              </div>
              <div class="form-group">
                <LABEL>Grupo</LABEL>
                <SELECT id="grupo" name="grupo" class="form-control grupos">

                </SELECT>
              </div>
              <div class="form-group">
                <label for="Monto">Monto</label>
                <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"><i
                        class="fas fa-dollar-sign"></i></span></span>
                  <input id="monto" type="number" required="" name="monto" placeholder=" Introduzca monto" class="form-control" value= "0">
                </div>
              </div>
              <div class="form-group">
                <label for="Acumulado">Acumulado</label>
                <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"><i
                        class="fas fa-dollar-sign"></i></span></span>
                  <input id="Acumulado" type="number" name="acumulado" required="" placeholder=" Introduzca Acumulado"
                    class="form-control" value= "0">
                </div>
              </div>
              <div class="form-group">
                  <input  type="number" class="form-control" id="ID" name="ID" >
                <label for="facturacion">Facturación</label>
                <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"><i
                        class="fas fa-dollar-sign"></i></span></span>
                  <input id="facturacion" type="number" required="" name="fac" placeholder=" Introduzca factura"
                    class="form-control" value= "0">
                </div>
              </div>
              



              
                <div class="col-sm-6 pl-0">
                  
                   <center> <button type="submit" class="btn btn-space btn-primary aa">Enviar</button>
                    <button type="submit" class="btn btn-space btn-primary mmm">Modificar</button>
                 
                </div>
              

            </form>
          </div>
        </div>
      </div>

      <div class="respueta">

      </div>
    </div>
</center>



<script>
madd = false;
$("#ID").text("");
$(".aaaaa").hide();
let UsuarioA = false;

$(document).on('keyup', '#Usuario', function(e){
let valor = $(this).val();
console.log(valor);
if (valor != ""){
    Revision(valor);
}else{
  $(".aaaaa").hide();
  $("#Usuario").css("border", "2px solid red");
}   
});

function Revision(consulta) {
      
$.ajax({
    url:'<?php echo SERVERURL;?>Ajax/UsuarioAjax.php',
    type:"POST",
    dataType:'html',
    data:{valores : consulta},
})
.done(function(respuesta){
   if($.trim(respuesta) == "si"){
     console.log(respuesta);
    UsuarioA = false;
    $(".aaaaa").show();
    $(".aaaaa").removeClass("btn-success");
    $(".aaaaa").addClass("btn-danger");
      $(".aaaaa").text("Ese Usuario ya existe");
      $("#Usuario").css("border", "2px solid red");
   }else{
    console.log(respuesta);
    UsuarioA = true;
    $(".aaaaa").removeClass("btn-danger");
    $(".aaaaa").addClass("btn-success");
      $(".aaaaa").text("Ese Usuario esta Bien");
      $("#Usuario").css("border", "2px solid green");
   }
   
  
})
.fail(function(){
    console.log('error');
});



}



$('#basicform').submit(function(e){
		
    e.preventDefault();
    
		var form=$(this);
    let pas1 = $("#clave1").val();
    let pas2 = $("#clave2").val();
    if(UsuarioA === false && madd == false){
      $(".aaaaa").show();
      $(".aaaaa").text("Ese usuario esta mal");
      $("#Usuario").css("border", "2px solid red");
    }else{
    if(pas1 !== pas2 ){
      swal("Las contraseña no son iguales","","warning");
    }else{
        var tipo=form.attr('data-form');
        var accion=form.attr('action');
        var metodo=form.attr('method');
        var respuesta=$('.respueta');
		console.log(tipo +"    "+ accion+"    " + metodo);
       
        var formdata = new FormData(this);
            
             

        var textoAlerta;
        if(tipo==="save"){
            textoAlerta="Los datos que enviaras quedaran almacenados en el sistema";
        }else if(tipo==="delete"){
            textoAlerta="Los datos serán eliminados completamente del sistema";
        }else if(tipo==="update"){
        	textoAlerta="Los datos del sistema serán actualizados";
        }else{
            textoAlerta="Quieres realizar la operación solicitada";
        }
        swal({
            title: "¿Estás seguro?",   
            text: textoAlerta,   
            type: "question",   
            showCancelButton: true,     
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar"
        }).then(function () {
 $('.pre-loader').show();
            $.ajax({
                type: metodo,
                url: accion,
                data: formdata ? formdata : form.serialize(),
                cache: false,
                contentType: false,
                processData: false,
                xhr: function(){
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                      if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);
                        if(percentComplete<100){
                        	respuesta.html('<p class="text-center">Procesado... ('+percentComplete+'%)</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: '+percentComplete+'%"></div></div>');
                      	}else{
                      		respuesta.html('<p class="text-center"></p>');
                      	}
                      }
                    }, false);
                    return xhr;
                },
                success: function (data) {
                    respuesta.html(data);
                   
					$('.pre-loader').hide();
                      
                },
                error: function() {
                    respuesta.html(msjError);
                    console.log("Esta Mal");
                }
            });
            return false;
        });
      }
      }
    });



  $("#agregargrupo").on('click', function (e) {
    OcurtarApp1();
    $(".aa").show();
    $(".mmm").hide();
    $("#ID").val("");
    madd = false;
    $("#ID").text("");
    
    
  });

  $("#back").on('click', function (e) {
    OcurtarApp2();
    $("#basicform")[0].reset();
    $(".aaaaa").hide();
    $("#Usuario").css("border", "1px solid #D8D8D8");
    mostrar();
    $("#ID").text("");
  });

  $(document).ready(function () {
    mostrar();
    mostrarGrupos();
  });

  


  function mostrar() {
    $(".RespuestaAjax").empty();
    let usuarios = "ready";

    $.ajax({
      url: '<?php echo SERVERURL;?>Ajax/UsuarioAjax.php',
      type: "POST",
      dataType: 'html',
      data: { usuario222: usuarios },
    })
      .done(function (respuesta) {
        $(".RespuestaAjax").html(respuesta);
        $('.bttool').tooltip();

      })

      .fail(function () {
        console.log('error');
      });
  }


  function mostrarGrupos() {
    $(".RespuestaAjax").empty();
    let usuarios = "ready";

    $.ajax({
      url: '<?php echo SERVERURL;?>Ajax/UsuarioAjax.php',
      type: "POST",
      dataType: 'html',
      data: { mosG: usuarios },
    })
      .done(function (respuesta) {
        $(".grupos").html(respuesta);
        

      })

      .fail(function () {
        console.log('error');
      });
  }

  function borrar(id){

    Sweetalert2({
            title: '¿Estás seguro? ',
            text: 'Deseas borrar un Usuario, este se borrará permanentemente del sistema! ',
            type: 'question',
            confirmButtonText: 'Aceptar',
            showCancelButton: true
          }).then(function() {
        $.ajax({
        url:'<?php echo SERVERURL;?>Ajax/UsuarioAjax.php',
        type:"POST",
        dataType:'html',
        data:{idBorrar : id},
    })
    .done(function(respuesta){
       $(".respueta").html(respuesta);
       mostrar();
    })

    .fail(function(){
        console.log('error');
    });


          });
};

function Modificar(id,nombre,usuario,grupo,comentario,monto,acumulado,fac){
  OcurtarApp1();
  madd = true;
  $(".tooltip").removeClass("show");
  $("#inputUserName").val(nombre);
  $("#Usuario").val(usuario);
  $("#comentario").val(comentario);
  
  $("#grupo option[value='"+grupo+"']").attr("selected","selected");
  $("#monto").val(monto);
  $("#Acumulado").val(acumulado);
  $("#facturacion").val(fac);
  $(".mmm").show();
  $(".aa").hide();
  $("#ID").val(id);
  $("gad"); 
}


$(document).on('keyup', '#input2', function(e){

let valor1 = $(this).val();
let valor = valor1.trim();
console.log(valor);
if (valor != ""){
  buscarGrupos(valor);
}else{
  mostrar();
}
   
});

function buscarGrupos(consulta) {
       $('.pre-loader').show();
$.ajax({
    url:'<?php echo SERVERURL;?>Ajax/UsuarioAjax.php',
    type:"POST",
    dataType:'html',
    data:{valores1 : consulta},
})
.done(function(respuesta){
   $(".RespuestaAjax").html(respuesta);
   $('.pre-loader').hide();

})
.fail(function(){
    console.log('error');
});



}


$("#ID").hide();

</script>