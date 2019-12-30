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
        En este formulario es para agregar, modificar y eliminar la lista de IMPUESTOS.
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>

<style>
  .container {
    margin-top: 30px;
  }

  .social {

    display: flex;
    float: right;
    /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
    /* Establecemos la barra en la izquierda */
    top: 400px;
    /* Bajamos la barra 200px de arriba a abajo */
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
    color: #fff;
    background: #000;
    text-decoration: none;
    /* Establecemos una transición a todas las propiedades */
  }

  .social ul li .icon-facebook {
    background: #3b5998;
  }

  /* Establecemos los colores de cada red social, aprovechando su class */
  .social ul li .icon-twitter {
    background: #00abf0;
  }

  .social ul li .icon-googleplus {
    background: #d95232;
  }

  .social ul li .icon-pinterest {
    background: #ae181f;
  }

  .social ul li .icon-mail {
    background: #666666;
  }

  .social ul li a:hover {
    background: #000;
    /* Cambiamos el fondo cuando el usuario pase el mouse */
    /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
  }
  
</style>


<div class="dashboard-wrapper">
  

  
   
    <div class="MostrarGrupos">

     
      <center>  <div class="col-xl-11 col-lg-11 col-md-11 col-sm-10 col-10 App1">
        <br><br>
          <h2 id="Titulo"   class="text-center display-7"> IMPUESTOS </h2>
          <div class="card">
            <div class="card-header">
              <form action="#" class="form-inline ">
                <h4 style="margin-top:12px"> <span class=" badge badge-secondary">MAESTROS</span></h4>

                <button type="button" id="agregargrupo" class="btn btn-primary"
                  style="color:white; margin-left:30px "><i class="fas fa-plus-circle"></i> Agregar</button>
                  <button type="button" onclick="imprimir('<?php echo SERVERURL; ?>Vistas/assets/vendor/bootstrap/css/bootstrap.min.css','IMPUESTOS')"  class="btn btn-dark imprimir"
                  style="color:white; margin-left:30px "><i class="fas fa-print"></i> Imprimir</button>


                <div class="form-group mx-sm-3 mb-2">

                  
                </div>

              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">

              <table id="example" border=1 cellspacing="0" bordercolor="#DCDCDC" class="table  display table-hover table-striped" style="width:100%">
                  <thead>
                    <tr>
                      <th width="10%" scope="col">Código</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Resumen</th>
                      <th scope="col">Tasa</th>
                      <th width="10%" scope="col">Operaciones</th>
               
                    </tr>
                  </thead>
                  <tbody> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div></center>
      
      
    

    <div class="Registrogrupos container  col-xl-11 col-lg-11 col-md-11 col-sm-10 col-10 App2">
      <div class="card">
        <div class="form-group">
          <div class="row">
            <div style="margin-top:0px;" class="col" >
              <button id="back" class="btn btn-dark"><i class="fas fa-arrow-left"></i></button>
            </div>
          </div>
          <center>
            <h5 class="col-xl-4 col-lg-6 col-md-9">AGREGAR IMPUESTOS</h5>
          </center>
          <div class="card-body border-top">

            <div class="form-group">

              <form class="FormularioAjaxNuevo FormularioAjax " data-form="save"
                action="<?php echo SERVERURL;?>Ajax/ImpuestosAjax.php" method="POST">
                <div class="form-row mb-8">
                  <div class="col">
                    <label>Nombre de IMPUESTOS</label>
                    <div class="input-group mb-3">

                      <input id="inputUserName" type="text"  name="nombre" required data-parsley-trigger="change"
                        placeholder="Introduzca El Nombre de los Impuestos" autocomplete="off" class="form-control ">
                    </div>
                  </div>

                  <div class="col">
                    <label>Resumen de IMPUESTOS</label>
                    <div class="input-group mb-3">
                      <input id="resumen" type="text"  name="resumen" required autocomplete="off"
                        placeholder="Introduzca El Resumen" class=" form-control ">

                    </div>
                    
                  </div>
                  <div class="col">
                    <label>Tasa de IMPUESTOS</label>
                    <div class="input-group mb-3">
                      <input id="tasa" type="number"  name="tasa" required autocomplete="off"
                        placeholder="Introduzca La Tasa" class=" form-control ">

                    </div>
                </div>
                </div>
                <div>

                  <input style= "display: none" type="text" id="ID" name="ID" class="form-control">

                   <center><button type="submit" class="btn btn-space btn-primary registrar">Guardar</button>
                    <button type="submit" class="btn btn-space btn-primary modificar">Modificar</button></center>

                </div>
                <div class="RespuestaAjax">



                </div>

              </form>
            </div>
          </div>

          <div class="table-responsive">

          </div>
          <div class="RespuestaAjax3">

          </div>

        </div>


      </div>
    </div>





    <script>

      $(document).ready(function(){
        MostrarDatos('<?php echo SERVERURL;?>Ajax/ImpuestosAjax.php');
      });

      $("#back").click(function () {
       
        OcurtarApp2();
        $(".FormularioAjax")[0].reset();

      });
       

  

    </script>