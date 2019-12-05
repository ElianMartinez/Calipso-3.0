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

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 App1">
      <br>
      <br>
      <h2 id="Titulo" class="text-center">MAESTRO DE ZONAS</h2>
      <div class="card">
        <div class="card-header">
          <form class="form-inline">
            <h4 style="margin-top:12px">NOMBRE DE LAS ZONAS</h4>

            <button type="button" id="agregargrupo" class="btn btn-primary" style="color:white; margin-left:30px "><i
                class="fas fa-plus-circle"></i> Agregar</button>
            <button type="button"
              onclick="imprimir('<?php echo SERVERURL; ?>Vistas/assets/vendor/bootstrap/css/bootstrap.min.css','ZONAS','<?php echo COMPANY; ?>')"
              class="btn btn-dark imprimir" style="color:white; margin-left:30px "><i class="fas fa-print"></i>
              Imprimir</button>




            <div class="form-group mx-sm-3 mb-2">


            </div>
          </form>
        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table id="example" border=1 cellspacing="0" bordercolor="#DCDCDC" class="display table table-hover"
              style="width:100%">
              <thead class="the">
                <tr>
                  <th width="8%" scope="col">CODIGO</th>
                  <th scope="col">NOMBRE</th>
                  <th scope="col">NOTA</th>
                  <th width="8%" scope="col">0OPERACIONES</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  <br>
  <br>
  <div class="Registrogrupos col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 App2">
    <div class="card">
      <div class="form-group">
        <div class="row">
          <div style="margin-top:0px;" class="col">
            <button id="back" class="btn btn-dark"><i class="fas fa-arrow-left"></i></button>
          </div>
        </div>
        <center>
          <h5 class="col-xl-4 col-lg-6 col-md-9 display-7">AGREGAR ZONAS</h5>
        </center>

      </div>
      <div class="card-body border-top">

        <div class="form-group">

          <form class="FormularioAjaxNuevo FormularioAjax " data-form="save"
            action="<?php echo SERVERURL;?>Ajax/ZonasAjax.php" method="POST">
            <div class="form-row mb-8">
              <div class="col">
                <label>Nombre de Zonas</label>
                <div class="input-group mb-3">
                  <input id="inputUserName" type="text" name="nombre" required data-parsley-trigger="change"
                    placeholder="Introduzca el Nombre de la Zona" autocomplete="off" class="form-control ">
                </div>
              </div>
              <div class="col">
                <label>Nota de la Zona</label>
                <div class="input-group mb-3">
                  <input id="nota" type="text" name="nota" autocomplete="off"
                    placeholder="Introduzca la nota de la Zona" class="form-control">
                </div>
              </div>
            </div>
            <input style="display:none" type="text" id="ID" name="ID" class="form-control">
            <div>
              <button type="submit" class="btn btn-space btn-primary registrar">Guardar</button>
              <button type="submit" class="btn btn-space btn-primary modificar">Modificar</button>
            </div>
            <div class="RespuestaAjax">



            </div>
          </form>
        </div>
      </div>



      <div class="RespuestaAjax3">

      </div>



    </div>
  </div>


  <script>
    $(document).ready(function () {
      MostrarDatos('<?php echo SERVERURL;?>Ajax/ZonasAjax.php');
    });

    $("#back").click(function () {
      MostrarDatos('<?php echo SERVERURL;?>Ajax/ZonasAjax.php');
      OcurtarApp2();
      $(".FormularioAjax")[0].reset();

    });
  </script>