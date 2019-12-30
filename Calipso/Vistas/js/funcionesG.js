$(document).ready(function(){
    OcurtarApp2();
  });

 

  $("#agregargrupo").click(function(){
    OcurtarApp1();
    $(".TituloAE").text("Agregar");
    $(".modificar").hide();
    $(".registrar").show();
   
  });
  
  function OcurtarApp2() {
      $(".App2").hide();
      $(".App1").show();
    }
  
    function OcurtarApp1() {
      $(".App2").show();
      $(".App1").hide();
      $("#inputUserName").focus();
    }

    $('.FormularioAjaxNuevo').submit(function(e){
		
        e.preventDefault();
        
            var form=$(this);
   
            var tipo=form.attr('data-form');
            var accion=form.attr('action');
            var metodo=form.attr('method');
            var respuesta=$('.RespuestaAjax');
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
          
          
        });
     

        function accc(){
            
          $('.bttool').tooltip();
      
          }
        function MostrarDatos(urrl){
            var a = $('#example').DataTable();
            a.destroy();
           
      var table = $("#example").DataTable({
        "processing":false,
        "ServerSide":true,
        "order":[],
       
        "ajax":{
          url:urrl,
          method:"POST",
          data:{MostrarDatos : "hola"}
        },
        "columnDefs":{
           "target":[0,3,4],
           "orderable":false,

        }
       
     

      });
      setInterval(accc,1000); 
      
        }
        function borrar(Id,uurl){
            console.log(Id+" "+uurl);
           
            swal({
                title: "¿Estás seguro?",   
                text: "El registro se borrara de forma permanente del sistema",   
                type: "question",   
                showCancelButton: true,     
                confirmButtonText: "Aceptar",
                cancelButtonText: "Cancelar"
            }).then(function () {
            $.ajax({
                url:uurl,
                type:"POST",
                dataType:'html',
                data:{BorrarDatos : Id},
            })
            .done(function(respuesta){
              
              
               $(".tooltip").removeClass("show");
               $(".RespuestaAjax3").html(respuesta);
               console.log(respuesta);
               MostrarDatos(uurl);

              
            })
        
            .fail(function(){
                console.log('error');
            });
        });

        $(".tooltip").removeClass("show");
        }




   

     function Modificar1(campos,datos){
        OcurtarApp1(); 
        $(".TituloAE").text("Editar");
        $(".modificar").show();
        $(".registrar").hide();
         for(i = 0; i < campos.length; i++){
           
            if(!$(campos[i]).is("select")) {
              // the input field is not a select
              $(campos[i]).val(datos[i]);
            }else{
                $(campos[i]+"option[value='"+datos[i]+"']").attr("selected","selected");
            }
        
           
          
          }

     }


     
    


     function imprimir(stylesheet,valor,empresa){
        var pageTitle = 'Impuestos',
        
        win = window.open('', 'Print', 'width=500,height=300');
    win.document.write('<html><head><title ></title>' +
        '<link rel="stylesheet" href="' + stylesheet + '">' +
        '</head><body><style> .table{background:#DCDCDC;} </style> <h2 class="text-center display">'+empresa+'</h2><p class="text-center"> Calle Europea No.99</p><h6 class="display text-center"> MAESTROS DE '+valor+' </h6> <br>' + $('#example')[0].outerHTML + '</body></html>');
    win.document.close();
    win.print();
    win.close();
    return false;
     }



